<?php

namespace App\Http\Controllers;

class SpaController extends Controller
{
    public function index()
    {
        $config = [
            'csrfToken' => csrf_token(),
            'baseUrl' => url('api'),
            'appName' => config('app.name'),
            'locale' => $locale = app()->getLocale(),
            'locales' => config('app.locales'),
        ];

        return view('spa')->with('config', json_encode($config));
    }
}
