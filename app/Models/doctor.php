<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hospital;
use App\Models\Service;

class doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name','title','hospital_id'];
    protected $hidden = ['pivot'];



    /* public function hospital(){
        return $this->belongsTo(hospital::class);
    }
 */

    public function services(){
        return $this->belongsToMany(Service::class,'doctor_service');
    }
}
