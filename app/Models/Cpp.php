<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpp extends Model
{
    protected $fillable = [
        'cpp_name',
        'description',
        'status'
    ];


    public function addCpp($data){
        Cpp::create([
            'cpp_name' => $data['cpp_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateCpp($data,$id){
        $cpp = Cpp::find($id);
        $cpp->update([
            'cpp_name' => $data['cpp_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllCpp(){
        return Cpp::all();
    }



    //
}
