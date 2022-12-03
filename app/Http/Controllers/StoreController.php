<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\User;
use App\Store;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        if(($user->role_id) == 1) {
            $mars = DB::table('stores')->get();

            return view('backend.store.index')->with('user', $user)->with('mars', $mars);
        }
        else if(($user->role_id) == 2) {
            $mars = DB::table('stores')->where('id', $user->store_id)->first();

            return view('backend.store.index')->with('user', $user)->with('mars', $mars);
        }
        else {
            return back()->with('status', 'Tidak Punya Akses');
        }
    }

    public function create()
    {
        $user = auth()->user();

        if(($user->role_id) == 1) {
            $usrs = DB::table('users')->where('role_id', 2)->get();

            return view('backend.store.create')->with('user', $user)->with('usrs', $usrs);
        }
        else {
            return back()->with('status', 'Tidak Punya Akses');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'market' => 'required|string|max:255',
            'logo' => 'image|mimes:jpg,jpeg,png,gif,bmp|max:150000',
        ]);

        $user = auth()->user();

        if($request->hasFile('logo')) {
            $photoNameWithExt = $request->file('logo')->getClientOriginalName();
            $photoName = pathinfo($photoNameWithExt, PATHINFO_FILENAME);
            $photoName = $request->input('market');
            $convertPhotoName = Str::lower($photoName);
            $collectionConvertPhotoName = Str::of($convertPhotoName)->explode(' ');
            $collectionConvertPhotoName = $collectionConvertPhotoName->implode('-');
            $photoExt = $request->file('logo')->getClientOriginalExtension();
            $photoNameSaved = $collectionConvertPhotoName.'-'.time().'.'.$photoExt;
            $photoPath = $request->file('logo')->storeAs('public/photos', $photoNameSaved);
        }
        else {
            return back()->with('error', 'Unggah Logo Gagal');
        }

        $market = new Store;
        $market->name = $request->input('market');
        $market->address = $request->input('address');
        if(($user->role_id) == 1) {
            $market->user_id = $request->input('usrs');
        }
        else {
            $market->user_id = $user->id;
        }
        $market->photo = $photoNameSaved;
        $market->category = $request->input('category');
        $market->bin = $request->input('bin');
        $market->business_age = $request->input('ba');
        $market->employees = $request->input('employee');
        $market->phone = $request->input('phone');

        $market->save();

        return redirect()->route('store')->with('success', 'Toko Berhasil Disimpan');
    }

    public function show($id)
    {
        try {
            $mar = Store::where('id', $id)->first();

            return view('backend.store.show')->with('mar', $mar);
        } catch (\Exception $e) {
            return back()->with('error', 'Maaf Data Tidak Sesuai');
        }
    }

    public function edit($id)
    {
        $user = auth()->user();

        if(($user->role_id) == 1) {
            $mar = Market::findOrFail($id);

            return view('backend.market.edit')->with('mar', $mar);
        }
        else {
            return back()->with('status', 'Tidak Punya Akses');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'market' => 'required|string|max:255',
        ]);

        $market = Market::findOrFail($id);
        $market->name = $request->input('market');
        $market->save();

        return redirect()->route('market')->with('success', 'Toko Berhasil Diubah');
    }

    public function destroy($id)
    {
        try {
            $mar = Market::findOrFail($id);
            $mar->delete();

            return redirect()->route('market')->with('success', 'Toko Berhasil Dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Maaf Data Tidak Sesuai');
        }
    }
}
