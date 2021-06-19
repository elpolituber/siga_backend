<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityVinculacionAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-community')->create('authorities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('authentication.users');
            $table->foreignId('type_id')->nullable()->constrained('app.catalogues');
            // $table->foreignId('status_id')->nullable()->constrained('app.catalogues');
            // $table->date('start_date')->nullable();
            // $table->date('end_date')->nullable();
            $table->boolean('state')->default(true);
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
        Schema::dropIfExists('authorities');
    }
}
