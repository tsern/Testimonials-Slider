<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialSlidersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'testimonial_sliders';

    /**
     * Run the migrations.
     * @table testimonials
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('img_id')->nullable();
            $table->string('title', 100);
            $table->string('description')->nullable();
            $table->boolean('status')->default(true);
            $table->dateTime('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });

////        Schema::table($this->set_schema_table, function ($table) {
////            $table->foreign('user_id')
////                ->references('id')->on('users')
////                ->onDelete('cascade')
////                ->onUpdate('cascade');
////
////            $table->foreign('img_id')
////                ->references('id')->on('images')
////                ->onDelete('cascade')
////                ->onUpdate('cascade');
//        });


        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(

                'title' => 'Some text',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'status' => '1',
                'start_date' => '01.01.2019',
                'end_date' => '12.01.2019',
            )
        );

        DB::table($this->set_schema_table)->insert(
            array(
                'title' => 'Some text 222222222222',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'status' => '1',
                'start_date' => '01.01.2019',
                'end_date' => '12.01.2019',
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
