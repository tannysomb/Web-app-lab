<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ดึงข้อมูลสินค้าทั้งหมดพร้อมข้อมูลพนักงาน
        $products = products::all();

        // ส่งข้อมูลไปยัง view
        return view('product', compact('products'));
    }
}

