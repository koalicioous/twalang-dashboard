<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryPurchaseController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.category-purchase.index');
    }

    public function detail()
    {
        return view('pages.admin.category-purchase.detail');
    }
}
