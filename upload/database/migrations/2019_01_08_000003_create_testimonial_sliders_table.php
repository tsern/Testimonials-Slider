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
            $table->string('title', 100);
            $table->string('description', 500)->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('show_image')->default(true);
            $table->boolean('show_company')->default(true);
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'title' => 'Only image',
                'description' => 'Slider with image only',
                'status' => '1',
                'show_image' => '1',
                'show_company' => '0',
                'start_date' => '2019.01.01',
                'end_date' => '2019.01.12'
            )
        );

        DB::table($this->set_schema_table)->insert(
            array(
                'title' => 'Company name only',
                'description' => 'Slider with image and company name. Till Christmas',
                'status' => '1',
                'show_image' => '0',
                'show_company' => '1',
                'start_date' => '2019.01.01',
                'end_date' => '2019.01.07'
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
