<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()
        ->each(fn (User $u) => Project::factory()->create(['created_by' => $u->id]));

        // faz uma consulta, pegando 10 registros aleatórios, 
        // depois faz um loop (each) e cria um projeto pra cada usuário escolhido anteriormente
    }
}
