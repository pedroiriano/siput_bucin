<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use App\User;
use App\Store;

class PagesController extends Controller
{
    public function index()
    {
        $mars = DB::table('stores')
                ->leftJoin('users', 'stores.user_id', '=', 'users.id')
                ->select('stores.*', 'users.name as user_name')
                ->get();
        
        $mars = $this->array_pagination($mars);

        return view('pages.index')->with('mars', $mars);
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

    public function business_detail($id)
    {
        try {
            $mar = DB::table('stores')
                ->leftJoin('users', 'stores.user_id', '=', 'users.id')
                ->select('stores.*', 'users.name as user_name')
                ->where('stores.id', $id)
                ->first();
            // $mar = Store::where('id', $id)->first();

            return view('pages.business-detail')->with('mar', $mar);
        } catch (\Exception $e) {
            return back()->with('error', 'Maaf Data Tidak Sesuai');
        }
    }

    public function array_pagination($items, $perPage = 3, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
