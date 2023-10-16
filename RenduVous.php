<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;


class RenduVous extends Model
{
    use HasFactory;
    protected $table = 'rendu_vous';
    public function client()
    {
        return $this->belongsTo(Clients::class);
    }
    protected $fillable = [
        'client_id',
        'date',
        'time',
    ];

}