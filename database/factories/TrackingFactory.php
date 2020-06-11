<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tracking;
use Faker\Generator as Faker;

$factory->define(Tracking::class, function (Faker $faker) {
    return [
        'training_group' => $faker->randomElement([
                'Информационные системы и программирование',
                'Мастер по ремонту и обслуживанию автомобилей',
                'Хозяйка (ин) усадьбы',
                'Механизация сельского хозяйства',
                'Дошкольное образование',
                'Преподавание в начальных классах',
                'Физическая культура',
            ]),
        'year' => mt_rand(2016, 2020),
        'full_name_student' => $faker->name(),
        'full_name_teacher' => $faker->name(),
        'topic' => 'Тема для теста №' . $faker->unique()->numberBetween(1,50),
        'mark' => mt_rand(3,5)
    ];
});
