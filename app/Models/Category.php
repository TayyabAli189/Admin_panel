<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'description',
        'status'
    ];


    public function addCategory($data){
        Category::create([
            'category_name' => $data['category_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateCategory($data,$id){
        $category = Category::find($id);
        $category->update([
            'category_name' => $data['category_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllCategories(){
        return Category::all();
    }



    //
}
