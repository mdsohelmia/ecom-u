<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public const  ACTIVE = 1;
    public const IN_ACTIVE = 0;

    protected $guarded = [];
}
