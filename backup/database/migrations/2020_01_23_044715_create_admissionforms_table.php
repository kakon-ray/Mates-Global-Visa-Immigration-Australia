<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissionforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admission_name', 40);
            $table->string('admission_phone', 16);
            $table->string('admission_email', 40)->unique();
            $table->string('admission_from_country', 40);
            $table->string('admission_study_country', 40);
            $table->string('admission_qualification', 40);
            $table->string('admision_course', 40);
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
        Schema::dropIfExists('admissionforms');
    }
}
