<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'goods_name',
        'description',
        'status'
    ];


    public function addGoods($data){
        Goods::create([
            'goods_name' => $data['goods_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateGoods($data,$id){
        $goods = Goods::find($id);
        $goods->update([
            'goods_name' => $data['goods_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllGoods(){
        return Goods::all();
    }



    //
}
