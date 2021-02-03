<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_name',
        'description',
        'status'
    ];


    public function addCity($data){
        City::create([
            'city_name' => $data['city_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateCity($data,$id){
        $city = City::find($id);
        $city->update([
            'city_name' => $data['city_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllCities(){
        return City::all();
    }



    //
}
