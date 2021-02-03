<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    protected $fillable = [
        'packing_name',
        'description',
        'status'
    ];


    public function addPacking($data){
        Packing::create([
            'packing_name' => $data['packing_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updatePacking($data,$id){
        $packing = Packing::find($id);
        $packing->update([
            'packing_name' => $data['packing_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllPackinges(){
        return Packing::all();
    }



    //
}
