<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolPeriodsTable extends Migration
{

    public function up()
    {
        Schema::connection('pgsql-app')->create('school_periods', function (Blueprint $table) {
            $table->id();
            $table->morphs('school_periodable');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('ordinary_start_date');
            $table->date('ordinary_end_date');
            $table->date('extraordinary_start_date');
            $table->date('extraordinary_end_date');
            $table->date('especial_start_date');
            $table->date('especial_end_date');
            $table->foreignId('status_id')->constrained('catalogues');
            $table->boolean('state')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('pgsql-app')->dropIfExists('school_periods');
    }
}
