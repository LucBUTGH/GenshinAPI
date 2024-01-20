<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    protected $table = "gen_roles";

    protected $fillable = ["ROL_CODE"];
    use HasFactory;
    
}
