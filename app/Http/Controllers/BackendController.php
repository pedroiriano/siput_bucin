<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $dt = Carbon::now();
        $dt = $dt->format('d-m-Y H:i:s');

        return view('backend.index')->with('user', $user)->with('dt', $dt);
    }
}
