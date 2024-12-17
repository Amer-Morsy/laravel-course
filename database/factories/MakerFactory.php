<?php

namespace Database\Factories;

use App\Models\Maker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maker>
 */
class MakerFactory extends Factory
{
    //    if factory does'nt follow convention
//    protected $model = Maker::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word()
        ];
    }

    public function alternativeNames()
    {
        return $this->sequence(fn(Sequence $sequence) => [
            'name' => 'Name' . $sequence->index,
        ]);
    }
}
