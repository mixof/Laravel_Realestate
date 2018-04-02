<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('properties')) {
            Schema::create('properties', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 150);
                $table->text('description');
                $table->integer('user_id');
                $table->tinyInteger('rent_type');
                $table->tinyInteger('price_type');
                $table->integer('location_id');
                $table->tinyInteger('rooms_count');
                $table->smallInteger('area');
                $table->tinyInteger('bedrooms_count');
                $table->tinyInteger('bathrooms_count');
                $table->string('images', 200);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
