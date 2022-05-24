<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Illuminate\Http\RedirectResponse;

class langueController extends Controller
{
        /**
     * @param $locale
     * @return RedirectResponse
     */
    public function index($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
