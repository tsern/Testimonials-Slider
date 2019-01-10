<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table = 'testimonials';

    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100 );
            $table->boolean('status')->default(true);
            $table->string('description');
            $table->string('name');
            $table->string('lastname');
            $table->string('company');
            $table->string('website');
            $table->string('linkedin');
            $table->string('image');
            $table->unsignedInteger('slider_id')->default(1);

            $table->timestamps();
        });



        Schema::table($this->set_schema_table, function ($table) {
            $table->foreign('slider_id')
                ->references('id')->on('testimonial_sliders')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

         //Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 1,
                'title' => 'Lorem ipsum dolor',
                'status' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'name' => 'Dony',
                'lastname' => 'House',
                'company' => "Apple",
                'website' => 'https://apple.com',
                'linkedin' => 'https://linkedin.com/Dony_House',
                'image' => 'https://abc-import.ru/wp-content/uploads/2018/10/fb939f6b6d6a203689ffbac968b9e320-300x200.jpg',
                'slider_id' => 1
            )
        );


        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 2,
                'title' => 'Sed do eiusmod tempor',
                'status' => 1,
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'name' => 'Micky',
                'lastname' => 'Mouse',
                'company' => "Google",
                'website' => 'https://google.com',
                'linkedin' => 'https://linkedin.com/Micky_Mouse',
                'image' => 'http://cdn01.ru/files/users/images/32/c4/32c4cb047498da9301d64986ee0a646b.jpeg',
                'slider_id' => 1
            )
        );


        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 3,
                'title' => 'Sed do eiusmod tempor',
                'status' => 1,
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'name' => 'Gary',
                'lastname' => 'Queen',
                'company' => "Microsoft",
                'website' => 'https://microsoft.com',
                'linkedin' => 'https://linkedin.com/Gary_Queen',
                'image' => 'https://www.b17.ru/foto/uploaded/b69a564c47110acefb8c986f768210ac.jpg',
                'slider_id' => 2
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
