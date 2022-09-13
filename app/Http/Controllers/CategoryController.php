<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Storage;
class CategoryController extends Controller
{
    function AddCategory(Request $request ){
         $name= $request->input('name');
         $code= time();
         $imagePath= $request->file('image')->store('public');
         $result=CategoryModel::insert(['cat_name'=>$name, 'cat_code'=>$code, 'cat_icon'=>$imagePath]);
         if($result==true){
                 return "Catageory added successfully ";
              }else{
               return "Category not Added ";
              }

        //  $photo = $request->file('image');
        //  if ($photo) {
        //     $photoNewName = 'photo_'.time().'.'.$photo->getClientOriginalExtension();
        //     $photo->move('Images');
        //  }

        //  $input = ['cat_name'=>$name, 'cat_code'=>$code, 'cat_icon'=>$imagePath];

    //     $photo = $request->file('image');
    // if ($photo){
    //     $photo->move('Images');
       
       
        
    //  if($result==true){
    //      return "Catageory added successfully ";
    //  }else{
    //     return "Category not Added ";
    //  }
    // }
     

    }


    function SelectCategory(){
        return $result=CategoryModel::all();

    }
    function UpdateCategory(){

    }
    function DeleteCategory(){

    }
}
