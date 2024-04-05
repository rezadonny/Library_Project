<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;                                /* menggunakan model tabel user */

use Illuminate\Support\Facades\Auth;                /* untuk mengetahui Auth */

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type; /* variabel $user_type ditentukan oleh tabel user pada kolom user_type */
            if ($user_type == 'admin') {
                return view('admin.index');         /* masuk ke halaman Admin */
            } else if ($user_type == 'user') {
                return view('home.index');          /* Masuk ke halaman User */
            }
        } else {
            return redirect()->back();
        }  /* jika tidak ada isi variabel user_type maka akan tetap dihalaman login */
    }
}
