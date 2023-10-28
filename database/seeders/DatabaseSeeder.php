<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'Abbes Essa',
            'email' => 'hnarfr20063@gmail.com',
        ]);

        Country::create(['name' => 'جالو']);
        Country::create(['name' => 'بنغازي']);
        City::create(['country_id' => 1, 'name' => 'البلاد']);
        City::create(['country_id' => 1, 'name' => 'اللبه']);
        City::create(['country_id' => 1, 'name' => 'شرف']);
        City::create(['country_id' => 2, 'name' => 'شارع 20']);
        City::create(['country_id' => 2, 'name' => 'فينيسيا']);
        City::create(['country_id' => 2, 'name' => 'بوهديمه']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);

    }
}
