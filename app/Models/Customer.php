<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name',
        'description',
        'status'
    ];


    public function addCustomer($data){
        Customer::create([
            'customer_name' => $data['customer_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateCustomer($data,$id){
        $customer = Customer::find($id);
        $customer->update([
            'customer_name' => $data['customer_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllCustomers(){
        return Customer::all();
    }



    //
}
