<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index($name)
    {
        return view('admin.index', ['name' => $name]);
    }
}