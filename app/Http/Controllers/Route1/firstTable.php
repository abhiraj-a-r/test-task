<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Route1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Models\Tasks;

class firstTable extends Controller
{

    public function showTable()
    {
        $data = Tasks::all();

        return view('show-table', ['data' => $data]);
    }
}
