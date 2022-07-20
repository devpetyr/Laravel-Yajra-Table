<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamodel extends Model
{
    protected $table = "grave_product";
    protected $primaryKey = "PersonID";
    use HasFactory;

}
