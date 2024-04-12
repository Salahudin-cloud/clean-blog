<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class UpdateCategoriesController extends Controller
{

    public function index($categories_id)
    {
        $data = Categories::getCategoriesById($categories_id);
        return view('backend/update_categories', [
            'data' => $data
        ]);
    }


    public function updateAction(Request $request, $id)
    {
        //execute command to update categories
        Categories::updateCategoriesById($id, $request->name_categories);

        // redirect to all categories
        return redirect()->to(route('categories'));
    }
}
