<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Caffeinated\Shinobi\Models\Role;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions;

    protected $fillable = [
        'name', 'username', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsToMany(Role::class);
    }
}
