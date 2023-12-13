<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     */
     protected $model = Invoice::class;
     /*
     * @return array<string, mixed>
     */


    public function definition(): array
    {
            $status = $this->faker->randomElements('B', 'P', 'V' );
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 20000),
            'status' => $status,
            'billed_data' =>$this->faker->dateTimeThisDecade(),
            'paid_date' => $status =='P' ? $this->faker->dateTimeThisDecade(): NULL,
        ];
    }
}
