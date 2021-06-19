<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_institution_id')->nullable()->connstrained('beneficiary_institutions');                 
            $table->foreignId('school_period_id')->nullable()->connstrained('app.school_periods'); //pgsql-ignug
            $table->foreignId('career_id')->nullable()->constrained('app.careers');
            $table->string('code',100);
            $table->text('title',500)->nullable();
            $table->foreignId('status_id')->nullable()->constrained('app.catalogues');//catalogo propio una fk 
            $table->boolean('state')->default(true);
            $table->string('field',100)->nullable();//campo de area de vinculacion
            $table->foreignId('frequency_activities_id')->nullable()->constrained('app.catalogues');//frecuencia de actividades
            $table->text('cycle')->nullable();//ciclo
            $table->foreignId('location_id')->nullable()->constrained('app.locations');//crear tabla de localizacion fk
            $table->integer('lead_time')->nullable();//plazo de ejecucion
            $table->date('delivery_date')->nullable();// tiempo
            $table->date('start_date')->nullable();// tiempo
            $table->date('end_date')->nullable();//tienmpo
            $table->text('description',1000)->nullable();//DESCRIPCION GENERAL  DEL PROYECTO.
            $table->text('indirect_beneficiaries')->nullable();
            $table->text('direct_beneficiaries')->nullable();
            $table->text('introduction')->nullable();
            $table->text('situational_analysis',300)->nullable();//ANALISIS SITUACIONAL (DIAGNOSTICO)
            $table->text('foundamentation')->nullable();
            $table->text('justification')->nullable();
            $table->foreignId('create_by_id')->nullable()->connstrained('app.users');
            $table->text('observations')->nullable();
            $table->text('bibliografia')->nullable();//pendiente
            $table->string('document')->nullable()->unique();
            $table->string('schedules')->nullable()->unique();//cronograma
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
        Schema::dropIfExists('projects');
    }
}
