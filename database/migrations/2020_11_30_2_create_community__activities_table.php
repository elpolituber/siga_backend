<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('activities', function (Blueprint $table) {
            //Actividad de vinculación Sectores de intervención,Ejes estratégicos de vinculación con la colectividad    
            $table->id();
            $table->boolean('state')->default(true);
            $table->foreignId('project_id')->nullable()->constrained();
            $table->foreignId('type_id')->nullable()->constrained('app.catalogues');//un catalogo unico de la tabla
            $table->text('description')->nullable();
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
        Schema::connection('pgsql-community')->dropIfExists('activities');
    }
}
