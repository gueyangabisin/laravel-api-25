<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory; #untuk seeder database
     protected $guarded = ['id'];

    public function books(){
        return $this->hasMany(Books::class); #author bisa punya banyak buku
    }
}
