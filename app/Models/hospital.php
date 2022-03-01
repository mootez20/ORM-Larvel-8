<?php

namespace App\Models;
use App\Models\doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;
    protected $fillable = ['name','address'];


    public function doctors(){

        return $this->hasMany(doctor::class);
    }
    
}
