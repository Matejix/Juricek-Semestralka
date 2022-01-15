<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' =>'admin', //$this->faker->name(),
            'lastname' =>'admin', // $this->faker->lastName(),
            'username' =>'admin', //$this->faker->userName(),
            'username_verified_at' => now(),
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => '$2a$12$AFbIgZovRMBU.uHNQmCp.eLXgBupAFEakd.MQBP8mVRCjAWtHo7nW', // admin
            'remember_token' => Str::random(10),
            'admin' => 1,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'username_verified_at' => null,
                'email_verified_at' => null,
            ];
        });
    }
}
