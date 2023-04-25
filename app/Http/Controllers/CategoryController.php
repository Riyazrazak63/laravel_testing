<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
    public function getSubcategories($id)
    {
        // echo "Test";
        // $subcategories = [];
        // for ($i = 1; $i <= 2; $i++) {
        //     $subcategory = new Category();
        //     $subcategory->name = "Subcategory $i of Category $id";
        //     $subcategory->parent_id = $id;
        //     $subcategory->save();
        //     $subcategories[] = $subcategory;
        // }

        return response()->json('amer');
    }

}