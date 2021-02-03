<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
        'terminal_name',
        'description',
        'status'
    ];


    public function addTerminal($data){
        Terminal::create([
            'terminal_name' => $data['terminal_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function updateTerminal($data,$id){
        $terminal = Terminal::find($id);
        $terminal->update([
            'terminal_name' => $data['terminal_name'],
            'description' => $data['description'],
            'status' => (isset($data['status']) && $data['status'] == 'on') ? true : false,
        ]);

    }
    public function getAllTerminales(){
        return Terminal::all();
    }



    //
}
