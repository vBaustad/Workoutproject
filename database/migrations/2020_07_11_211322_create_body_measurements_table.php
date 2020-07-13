<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_measurements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('weight');
            $table->decimal('height');
            $table->decimal('waist');
            $table->decimal('bust');
            $table->decimal('calves');
            $table->decimal('chest');
            $table->decimal('forearm');
            $table->decimal('hips');
            $table->decimal('thigs');
            $table->decimal('upperarm');
            $table->tinyInteger('sex');           

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_measurements');
    }
}
