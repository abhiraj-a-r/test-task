<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Route2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Models\Products;

class SecondTable extends Controller
{

    public function showTable()
    {
        $data = Products::all();

        return view('show-products-table', ['data' => $data]);
    }
}
