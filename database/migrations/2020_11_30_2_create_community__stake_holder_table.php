<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityStakeHolderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('stake_holders', function (Blueprint $table) {
            $table->id();
            $table->boolean('state')->default(true);
            $table->foreignId('project_id')->nullable()->constrained();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('identification')->nullable();
            $table->string('position')->nullable();
            $table->foreignId('type_id')->nullable()->constrained('app.catalogues');//coordinador o representate legal
        //    $table->foreignId('function')->nullable()->constrained('app.catalogues');//rol asignado catalogo 
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
        Schema::dropIfExists('student_participants');
    }
}
