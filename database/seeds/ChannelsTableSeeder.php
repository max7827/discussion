<?php
use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([

            'name' => 'laravel 5',
            'slug' => Str::slug('laravel 5', '-'),
        ]);

        Channel::create([

            'name' => 'vue js 5',
            'slug' => Str::slug('vue js 5', '-'),
        ]);

        Channel::create([

            'name' => 'codignitor 5',
            'slug' => Str::slug('codignitor 5', '-'),
        ]);

        Channel::create([

            'name' => 'react js 5',
            'slug' => Str::slug('react js 5', '-'),
        ]);
    }
}
