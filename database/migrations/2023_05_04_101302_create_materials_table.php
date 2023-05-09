<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('dateLivrision');
            $table->boolean('etat')->default(0);
            $table->enum('lieu',['Direction','Bibliotheque','SMM','Salle de eouvr','Labo']);
            $table->string('probleme')->nullable();
            $table->foreignId('type_id');
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
        Schema::dropIfExists('materials');
    }
}
