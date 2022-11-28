<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Contact;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'first_name' => $faker->name,
            'last_name' => $faker->lastName,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'company_id' => Company::pluck('id')->random()
        ];
    }
}
