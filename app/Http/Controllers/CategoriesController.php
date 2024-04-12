<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        // get all categories
        $data = Categories::getAllCategories();
        $dataPaginated = PaginationHelper::paginate($data, 10);
        return view('backend/categories', [
            'dataPaginated' => $dataPaginated
        ]);
    }
}
