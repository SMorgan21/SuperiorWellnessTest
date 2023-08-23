<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Random Selection of letters for the Cat ID
        $catId =  $this->faker->randomElement(['U','J','Z']);
        return [
            'container_number' => $this->faker->regexify('[A-Z]{3}'.$catId.'[1-9]{7}'),
            'container_final_destination' => $this->faker->city(),
            'port_due_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'warehouse_due_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'shipper_reference_number' => $this->faker->randomNumber(7, true),
            'shipper_invoice_number' => $this->faker->randomNumber(7, true),
            'shipping_invoice_value' => $this->faker->randomNumber(7, true),
            'number_items_in_container' => $this->faker->randomNumber(7, false),
        ];
    }
}
