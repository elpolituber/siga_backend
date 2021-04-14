<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityBeneficiaryInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('beneficiary_institutions', function (Blueprint $table) {

            $table->id();
            $table->boolean('state')->default(true);
            $table->text('logo')->nullable();
            $table->string('ruc',15)->nullable();
            $table->text('name',300)->nullable();
            $table->text('address')->nullable();
            $table->foreignId('location_id')->nullable()->constrained('app.locations');//fk propia
            // $table->string('legal_representative_name',100);
            // $table->string('legal_representative_lastname',100);
            // $table->string('legal_representative_identification',100);
            $table->string('function')->nullable();
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
        Schema::dropIfExists('beneficiary_institutions');
    }
}
