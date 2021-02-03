<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'train_name',
        'description',
        'time',
        'status'
    ];


    public function addTrain($data){
        Train::create([
            'train_name' => $data['train_name'],
            'description' => $data['description'],
            'time' => $data['time'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateTrain($data,$id){
        $train = City::find($id);
        $train->update([
            'train_name' => $data['train_name'],
            'description' => $data['description'],
            'time' => $data['time'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllTraines(){
        return Train::all();
    }



    //
}
