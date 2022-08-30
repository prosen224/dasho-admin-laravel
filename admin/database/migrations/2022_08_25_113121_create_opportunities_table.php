<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('icon_text_1')->nullable();
            $table->string('icon_text_2')->nullable();
            $table->string('icon_text_3')->nullable();
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_3')->nullable();
            $table->string('image')->nullable();
            $table->string('button_label')->nullable();
            $table->string('button_link')->nullable();
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
        Schema::dropIfExists('opportunities');
    }
}
