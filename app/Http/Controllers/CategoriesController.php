<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $categoriesModel;

    public function __construct(Categories $categories)
    {
        $this->categoriesModel = $categories;
    }

    public function index()
    {
        // get all categories
        $data = $this->categoriesModel->getAllCategories();
        $dataPaginated = PaginationHelper::paginate($data, 10);
        return view('backend/categories',[
            'dataPaginated' => $dataPaginated
        ]);
    }
}
