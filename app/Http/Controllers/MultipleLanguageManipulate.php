<?php

namespace App\Http\Controllers;

use App\IndustrySector;
use Illuminate\Support\Facades\Log;

class MultipleLanguageManipulate extends Controller
{
    /**
     * @param string $lang
     *
     * @return \Exception|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function multipleLanguageManipulate(string $lang = 'en')
    {
        app()->setLocale($lang); // set locale

        try {
            $industrySectors = IndustrySector::getAllByPluck($lang);
            $keySpecificValue = labelManipulate('magic-label', 'current_language_options')[$lang]; // fetch key specific value from language file.

            return view('demo')->with([
                'industrySectors'  => $industrySectors,
                'keySpecificValue' => $keySpecificValue,
            ]);
        } catch (\Exception $ex) {
            Log::error($ex);
            abort(404);
        }
    }
}
