<?php

namespace App\Http\Controllers;

### URL Query : https://laravel.com/docs/5.5/queries .


use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;
USE App\Category;

class CategoryController extends Controller
{
    protected $redirectedTo = '/category';

    public function index()
    {
        $categories = Category::all();

        return view('category.list', ['categories' => $categories]);

        /* foreach ($categories as $category){
             echo $category->label . '<br>';
         }
         $categories = Category::find(1);

         requête sql = string(95) "select * from `categories` where `idcategories` = ? or `label` = ? order by `label` asc limit 2"
         $categories = Category::where('idcategories', 1)->orWhere('label', "essai")->limit(2)->orderBy('label');

         Sélectionne les élements 1, 2 et 3.
         $categories = Category::find([1,2,3]);

         //Sélectionne tous les élements.
         $categories = Category::query('SELECT * FROM `category`;');

         var_dump($categories);
        */
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreBlogCategory $request)
    {
        $category = new Category;

        $category->label = $request->label;

        $category->save();

        return redirect($this->redirectedTo);
    }

    public function update($id)
    {
        $category = Category::find($id);
        return view('category.update', ['category' => $category]);
    }

    public function edit(StoreBlogCategory $request, $id)
    {

        $category = Category::find($id);
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect($this->redirectTo);
    }

}