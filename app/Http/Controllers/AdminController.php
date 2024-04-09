<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type;

            if ($user_type == 'admin') {
                return view('admin.index');
            } else if ($user_type == 'user') {
                return view('home.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function category_page()
    {
        $data = Category::all(); /* Memanggil semua variabel data dari tabel Category ke dalam variabel $data */
        return view('admin.category', compact('data')); /* Menampilkan data tabel Category */

       /*  return view('admin.category'); /* menampilkan halaman view Category */
    }

    public function add_category(Request $request)
    {
        $data = new Category;                   /* memanggil tabel Category dari DB project */
        $data->cat_title = $request->category;  /* memasukan data dari input category ke dalam field cat_title */
        $data->save();                          /* menyimpan data pada tabel dBase*/

        /* return redirect()->back(); */              /* kembali ke halaman awal atau seperti tetap di halaman tersebut */

        return redirect()->back()->with('message', 'Category Added Successfully'); /* menampilkan pesan input berhasil */
    }
}
