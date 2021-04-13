<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costs extends Model
{
    use HasFactory;
    protected $table = "costs";
    protected $primaryKey = "postcode";
    public $timestamps = false;
}
