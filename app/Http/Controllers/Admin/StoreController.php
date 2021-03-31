<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\User;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::paginate(10);

        return view('admin.stores.index',compact('stores'));
    }

    public function create()
    {
        $users = User::all('id','name');
        return view('admin.stores.form', compact('users'));
    }

    public function store(Request $request)
    {
        dd($request);
    }
}

