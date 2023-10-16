<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
use App\Models\LigneDevis;


class Devis extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->belongsTo(Clients::class);
    }
    public function lignes_devis()
    {
        return $this->hasMany(LigneDevis::class);
    }
    protected $fillable = [
        'title',
        'montant',
        'date',
        'description',
        'montant',
        'produit_id',
        'client_id',
    ];

}