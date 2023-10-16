<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RenduVous;


class RenduVouSeeder extends Seeder
{
    
    public function run(): void
    {

        RenduVous::create([
            'client_id' => 1,
            'date' => now(),
            'time' => '10:00',
            'notes' => '',
        ]);

        RenduVous::create([
            'client_id' => 2,
            'date' => now()->addDays(1),
            'time' => '14:30',
            'notes' => 'Notes pour le deuxième rendez-vous',
        ]);

        RenduVous::create([
            'client_id' => 3,
            'date' => now()->addDays(2),
            'time' => '09:15',
            'notes' => 'Notes pour le troisième rendez-vous',
        ]);

        // Ajoutez d'autres rendez-vous de démonstration si nécessaire
    }
    
}
