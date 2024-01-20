<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributionsModel extends Model
{
    protected $table = "gen_role_attribution";

    protected $fillable = ["US_ID","ROL_CODE"];

    use HasFactory;
}
