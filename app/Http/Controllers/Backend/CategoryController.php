<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{

    public function createCategory(){
         $medicinCateList = Category::all();
        // return view page with variable

        return view('pages.category.create', compact('medicinCateList'));
    }

    public function MedicinCategoryEdit($id){
         return $catagoryInfo = Category::where('id', $id)->first();
         return view('pages.category.create', compact('catagoryInfo'));

    }

//data insert & update
    public function categoryStore(Request $request){
        $category = $request->input('id');
        if($category>0){
            $category = Category::findOrFail($category);
        }else{
            $category = new Category();
        }
        
        $category->medicin_cate = $request->input('medicin_cate');

        if($category->save()){
            Session::flash('success', 'Data Save Successfully');
        }else{
            Session::flash('feiled', 'Faild to data save');
        }
        return redirect()->back();
    }

    public function deleteCategory($id){
        $delete = Category::find($id)->delete();
        if($delete){
            Session::flash('success', 'Delete Successfully');
        }else{
            Session::flash('feiled', 'Faild to data save');
        }
        return redirect()->back();
    }
}
