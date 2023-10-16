<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Devis;
use App\Models\RenduVous;
use App\Models\Rappel;




class Clients extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'login-at',
    ];
    protected $guard = 'clients';

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }
    public function rendu_vous()
    {
        return $this->hasMany(RenduVous::class);
    }
    public function rappels()
    {
        return $this->hasMany(Rappel::class);
    }

}