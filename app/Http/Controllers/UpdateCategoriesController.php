<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class UpdateCategoriesController extends Controller
{
    protected $categoriesModel;

    public function __construct(Categories $categories)
    {
        $this->categoriesModel = $categories;
    }

    public function index($categories_id)
    {
        $data = $this->categoriesModel->getCategoriesById($categories_id);
        return view('backend/update_categories', [
            'data' => $data
        ]);
    }


    public function updateAction(Request $request, $id)
    {
        //execute command to update categories
        $this->categoriesModel->updateCategoriesById($id, $request->name_categories);

        // redirect to all categories
        return redirect()->to(route('categories'));
    }
}
