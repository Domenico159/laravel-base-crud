<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Item;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics =  config('comics');

        foreach ($comics as $cartoon) {

            $new_comics = new Item();

            // $table->string('title', 80);
            $new_comics->title =  $cartoon['title'];
            // $table->string('slug');
            $new_comics->slug = Str::slug($cartoon['title'], '-');
            // $table->string('description');
            $new_comics->description =  $cartoon['description'];
            // $table->string('image');
            $new_comics->image =  $cartoon['thumb'];
            // $table->string('series');
            $new_comics->series =  $cartoon['series'];
            // $table->string('sale_date', 50);
            $new_comics->sale_date =  $cartoon['sale_date'];
            // $table->string('type', 50);
            $new_comics->type =  $cartoon['type'];
            // $table->string('price', 20);
            $new_comics->price =  $cartoon['price'];

            $new_comics->save();
        }
    }
}
