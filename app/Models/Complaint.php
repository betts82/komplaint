<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    //protected $fillable = ['title','description'] akan kmaskini yg ada ahj

    protected $guarded =[];   // masukkan variable yg taknak update..terbalik 
}
