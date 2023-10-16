<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;


class Rappel extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->belongsTo(Clients::class);
    }
    public function renduVous()
    {
        return $this->belongsTo(RenduVous::class, 'rendez_vous_id');
    }
    protected $table = 'rappel';
    protected $fillable = [
        'client_id', // Add any other fillable attributes here
        'reminder_date',
        'rendez_vous_id',
        'description',
    ];

}