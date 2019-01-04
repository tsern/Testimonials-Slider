<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table = 'images';

    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('img_url');
            $table->string('title', 100 );
            $table->string('desc');
        });

        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 1,
                'title' => 'Some text',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'img_url' => 'https://abc-import.ru/wp-content/uploads/2018/10/fb939f6b6d6a203689ffbac968b9e320-300x200.jpg',
            )
        );

        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'id' => 2,
                'title' => 'Some text',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'img_url' => 'https://abc-import.ru/wp-content/uploads/2018/10/a57ee2c62ca44076955e2afa74223d07-300x200.jpg',
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
