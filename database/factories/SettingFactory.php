<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{

    protected $model = \App\Models\Setting::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'ienergy.africa',
            'copyright' => 'Copyright © 2022 iEnergyAfrica | Designed by Ken Ossai'
        ];
    }
}
