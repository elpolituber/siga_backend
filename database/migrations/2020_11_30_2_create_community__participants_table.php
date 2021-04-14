<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('participants', function (Blueprint $table) {
            $table->id();
            $table->boolean('state')->default(true);
            $table->foreignId('user_id')->nullable()->connstrained('app.users');
            $table->foreignId('project_id')->nullable()->constrained();
            $table->string('position')->nullable()->nullable();
            $table->foreignId('type_id')->nullable()->constrained('app.catalogues');//rector estudiante coordinador profesor
            //$table->string('resolucion')->nullable();
            $table->integer('working_hours')->nullable()->nullable();//horas de trabajo
            $table->foreignId('function_id')->nullable()->constrained('app.catalogues');//rol asignado catalogo 
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
        Schema::dropIfExists('teacher_participants');
    }
}
