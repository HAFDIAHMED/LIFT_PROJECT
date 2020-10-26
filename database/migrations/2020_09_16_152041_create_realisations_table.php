<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('installation_date')->nullable();
            $table->string('s_title')->nullable();
            $table->mediumText('description')->nullable();
            $table->text('video')->nullable();
            $table->timestamps();
            $table->text('images')->nullable();
            $table->text('client_name')->nullable();
            $table->text('logo')->nullable();
            $table->string('city')->nullable();
            $table->integer('country_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisations');
    }
}
