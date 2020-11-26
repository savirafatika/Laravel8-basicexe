<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UsersDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'alamat' => $this->faker->address,
            'jenis_kelamin' => 'P'
        ];
    }
}
