<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigwigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bigwigs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('comment')->nullable();
            $table->string('designation')->nullable();
            $table->string('profile_image')->nullable();
            $table->integer('featured')->nullable();
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
        Schema::dropIfExists('bigwigs');
    }
}
