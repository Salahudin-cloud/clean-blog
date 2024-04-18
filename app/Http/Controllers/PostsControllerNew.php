<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostsControllerNew extends Controller
{
    public function index()
    {
        return view('backend/postsNew');
    }

    public function actionAddPosts(Request $request)
    {
        echo json_encode($request->input('post_content'));
        exit;
    }
}
