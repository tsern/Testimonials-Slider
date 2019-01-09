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
            $table->string('foto');
            $table->integer('testimonialslider');

            $table->timestamps();
        });

        // Insert some stuff
//        DB::table($this->set_schema_table)->insert(
//            array(
//                'id' => 1,
//                'title' => 'Some text',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
//                'name' => 'Micky',
//                'lastname' => 'House',
//                'foto' => 'https://abc-import.ru/wp-content/uploads/2018/10/fb939f6b6d6a203689ffbac968b9e320-300x200.jpg',
//            )
//        );

        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 2,
                'title' => 'Some text',
                'status' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'name' => 'Micky',
                'lastname' => 'Mouth',
                'company' => "NoName",
                'website' => 'https://ts.loc',
                'linkedin' => 'https://linkedin.com',
                'foto' => 'https://abc-import.ru/wp-content/uploads/2018/10/a57ee2c62ca44076955e2afa74223d07-300x200.jpg',
                'testimonialslider' => 1
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
