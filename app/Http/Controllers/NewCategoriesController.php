<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class NewCategoriesController extends Controller
{


    public function index()
    {
        return view('backend/new_categories');
    }

    public function addAction(Request $req)
    {

        // add new categories 
        Categories::newCategories($req->name_categories);

        // redirect 
        return redirect()->to(route('categories'));
    }
}
