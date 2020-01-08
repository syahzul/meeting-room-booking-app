<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->mediumText('description')->nullable();
            $table->mediumInteger('capacity', false, true);
            $table->boolean('projector')->nullable()->default(false);
            $table->boolean('flip_chart')->nullable()->default(false);
            $table->boolean('wifi')->nullable()->default(false);
            $table->bigInteger('created_by', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
