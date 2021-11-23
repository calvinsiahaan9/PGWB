<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index() 
    {
        $getProduk = Produk::all();
        
        return view('produk.product',compact('getProduk'));
    }

    public function destroy($id){
        Produk::destroy($id);
        return redirect()->back();
    }
}
