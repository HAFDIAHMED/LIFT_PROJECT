<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->float('mesure', 10, 0)->nullable();
            $table->float('largeur', 10, 0)->nullable();
            $table->float('espace', 10, 0)->nullable();
            $table->integer('hauteur')->nullable();
            $table->text('p_palier_base')->nullable();
            $table->text('p_palier_haut')->nullable();
            $table->text('p_ensembre')->nullable();
            $table->string('societe', 253)->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('codepostal')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->text('devis_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis');
    }
}
