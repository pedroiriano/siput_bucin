<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function story()
    {
        return view('pages.about.story');
    }

    public function vision()
    {
        return view('pages.about.vision');
    }

    public function news()
    {
        return view('pages.core.news');
    }

    public function announcement()
    {
        return view('pages.core.announcement');
    }

    public function production()
    {
        return view('pages.core.production');
    }

    public function halal()
    {
        return view('pages.core.halal');
    }

    public function market()
    {
        return view('pages.core.market');
    }

    public function trademark()
    {
        return view('pages.core.trademark');
    }

    public function news_detail()
    {
        return view('pages.core.news-detail');
    }
}
