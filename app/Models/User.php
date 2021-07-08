<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const ADMIN = 'admin';
    public const MANAGER = 'manger';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'email',
        'role',
        'is_active',
        'created_by',
        'updated_by',
    ];

    protected $perPage = 25;

    public function createBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

}

//on to many
//many to on
//many to many
//polyporphic realtaion
