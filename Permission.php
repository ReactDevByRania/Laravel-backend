<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;


class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    public function roles_permission()
    {
        return $this->belongsToMany(Role::class, 'role_permission');
    }
}