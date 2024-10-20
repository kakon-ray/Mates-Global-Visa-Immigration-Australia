<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMisevensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misevens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 40);
            $table->char('email', 40);
            $table->char('phone_number', 16);
            $table->tinyInteger('age');
            $table->tinyInteger('marital_status');
            $table->char('facebook', 40)->nullable();
            $table->char('nationality', 40);
            $table->tinyInteger('experience_year');

            $table->char('university', 40);
            $table->char('certificate', 40);
            $table->char('specialized', 40)->nullable();
            $table->smallInteger('passing_year');

            $table->char('company_one', 40);
            $table->char('position_one', 40);
            $table->tinyInteger('experience_one');
            $table->char('company_two', 40)->nullable();
            $table->char('position_two', 40)->nullable();
            $table->tinyInteger('experience_two')->nullable();
            $table->char('company_three', 40)->nullable();
            $table->char('position_three', 40)->nullable();
            $table->tinyInteger('experience_three')->nullable();

            $table->boolean('ielts')->nullable()->default(false);
            $table->boolean('pte')->nullable()->default(false);
            $table->tinyInteger('ielts_reading')->nullable();
            $table->tinyInteger('ielts_speaking')->nullable();
            $table->tinyInteger('ielts_writing')->nullable();
            $table->tinyInteger('ielts_listening')->nullable();
            $table->tinyInteger('ielts_overall_score')->nullable();
            $table->tinyInteger('pte_reading')->nullable();
            $table->tinyInteger('pte_speaking')->nullable();
            $table->tinyInteger('pte_writing')->nullable();
            $table->tinyInteger('pte_listening')->nullable();
            $table->tinyInteger('pte_overall_score')->nullable();
            $table->char('mi_day')->nullable();
            $table->char('mi_time')->nullable();
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
        Schema::dropIfExists('misevens');
    }
}
