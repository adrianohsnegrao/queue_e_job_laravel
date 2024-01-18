<?php

namespace Database\Seeders;

use App\Models\Mensagem;
use Illuminate\Database\Seeder;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::factory()->count(90)->create();
    }
}
