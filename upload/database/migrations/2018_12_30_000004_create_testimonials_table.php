<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'testimonials';

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
            $table->string('title', 100);
            $table->string('text')->nullable();
            $table->string('img_url');
            $table->boolean('status')->default(true);
            $table->dateTime('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });

//        Schema::table($this->set_schema_table, function ($table) {
//            $table->foreign('user_id')
//                ->references('id')->on('users')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');

//            $table->foreign('period_id')
//                ->references('id')->on('period')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//        });


        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'user_id' => 1,
                'title' => 'Some text',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'http://www.reactiongifs.com/r/overbite.gif',
                'status' => '1',
                'start_date' => '01.01.2019',
                'end_date' => '12.01.2019',
            )
        );

        DB::table($this->set_schema_table)->insert(
            array(
                'user_id' => 2,
                'title' => 'Some text',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.',
                'img_url' => 'https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg',

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
