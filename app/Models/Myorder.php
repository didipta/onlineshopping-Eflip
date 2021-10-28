<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myorder extends Model
{
    use HasFactory;

   
    public function assignedinfo(){
        $info= Orderdetail::where('order_id', $this->id)->get();
        return $info;
    }

    
}
