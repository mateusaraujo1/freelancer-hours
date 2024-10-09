<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            // pega 5 palavras, mas é array, então o collect transforma em string e o join separa com um espaço
            'description' => fake()->randomHtml(),
            // remove as tags html?
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['react', 'Laravel', 'Vue', 'tailwind', 'javascript', 'next.js'], random_int(1, 5)),
            // pegará entre 1 e 5 desses elementos do array aleatoriamente
            'created_by' => User::factory()
        ];
    }
}
