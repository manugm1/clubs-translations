<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;
use Session, Config;
use App\Language;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        //Comprobamos si la sesión tiene locale
        //El locale por defecto es inglés
        if(Session::has('locale'))
        {
            Config::set('app.locale', Session::get('locale', 'en'));
        }
        //Si no, sacamos el del navegador
        else
        {
            Config::set('app.locale', $this->getBrowserLocale());
        }
    }

    public function getBrowserLocale(){
        $websiteLanguages = array_map('strtoupper', Language::all()->pluck('locale')->toArray());
        //$websiteLanguages = array_map('strtoupper', ['en', 'esa', 'zh']);
        // Parse the Accept-Language according to:
        // http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4
        preg_match_all(
            '/([a-z]{1,8})' .       // M1 - First part of language e.g en
            '(-[a-z]{1,8})*\s*' .   // M2 -other parts of language e.g -us
            // Optional quality factor M3 ;q=, M4 - Quality Factor
            '(;\s*q\s*=\s*((1(\.0{0,3}))|(0(\.[0-9]{0,3}))))?/i',
            $_SERVER['HTTP_ACCEPT_LANGUAGE'],
            $langParse);

        $langs = $langParse[1]; // M1 - First part of language
        $quals = $langParse[4]; // M4 - Quality Factor

        $numLanguages = count($langs);
        $langArr = array();

        for ($num = 0; $num < $numLanguages; $num++)
        {
            $newLang = strtoupper($langs[$num]);
            $newQual = isset($quals[$num]) ?
                (empty($quals[$num]) ? 1.0 : floatval($quals[$num])) : 0.0;

            // Choose whether to upgrade or set the quality factor for the
            // primary language.
            $langArr[$newLang] = (isset($langArr[$newLang])) ?
                max($langArr[$newLang], $newQual) : $newQual;
        }

        // sort list based on value
        // langArr will now be an array like: array('EN' => 1, 'ES' => 0.5)
        arsort($langArr, SORT_NUMERIC);

        // The languages the client accepts in order of preference.
        $acceptedLanguages = array_keys($langArr);

        // Set the most preferred language that we have a translation for.
        foreach ($acceptedLanguages as $preferredLanguage)
        {
            if (in_array($preferredLanguage, $websiteLanguages))
            {
                $_SESSION['lang'] = $preferredLanguage;
                return strtolower($preferredLanguage);
            }
        }
    }
}
