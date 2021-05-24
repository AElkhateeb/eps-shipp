<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Slider::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Slider::class, static function (Faker\Generator $faker) {
    return [
        'activated' => $faker->boolean(),
        'is_published' => $faker->boolean(),
        'link1' => $faker->sentence,
        'link2' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Identity::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\$table;::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pro::class, static function (Faker\Generator $faker) {
    return [
        'link1' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Service::class, static function (Faker\Generator $faker) {
    return [
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        'body' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Job::class, static function (Faker\Generator $faker) {
    return [
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Application::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Testimonial::class, static function (Faker\Generator $faker) {
    return [
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'job' => ['en' => $faker->sentence],
        'text' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Social::class, static function (Faker\Generator $faker) {
    return [
        'icon' => $faker->sentence,
        'link' => $faker->sentence,
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Package::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'weight' => $faker->randomFloat,
        'number' => $faker->randomNumber(5),
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Page::class, static function (Faker\Generator $faker) {
    return [
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'description' => ['en' => $faker->sentence],
        'h1' => ['en' => $faker->sentence],
        'body' => ['en' => $faker->sentence],
        
    ];
});
