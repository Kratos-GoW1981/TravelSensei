<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'is_admin' => $this->faker->boolean(10), // 10% chance of being admin
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Default password for testing
            'remember_token' => Str::random(10),
        ];
    }
}
