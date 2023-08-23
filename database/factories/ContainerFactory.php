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
        return [
            'container_number' => $this->faker->regexify('[A-Z]{4}[1-9]{7}'),
            'port_due_date' => $this->faker->dateTime(),
            'warehouse_due_date' => $this->faker->dateTime(),
            'shipper_reference_number' => $this->faker->randomNumber(7, true),
            'shipper_invoice_number' => $this->faker->randomNumber(7, true),
            'shipping_invoice_number' => $this->faker->randomNumber(7, true),
            'number_items_in_container' => $this->faker->randomNumber(7, false),
        ];
    }
}
