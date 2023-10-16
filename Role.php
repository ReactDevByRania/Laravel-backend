<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Permission;



class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'role',
    ];
    public function admins()
    {
        return $this->hasMany(Admin::class, 'role');
    }
    public function permissions()
    {
        return $this->hasMany(Permission::class, 'role');
    }
    public function permissions_role()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}