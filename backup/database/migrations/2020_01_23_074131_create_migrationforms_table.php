<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrationforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('migration_name', 40);
            $table->string('migration_phone', 16);
            $table->string('migration_email', 40)->unique();
            $table->string('migration_from_country', 40);
            $table->string('migration_migrate_country', 40);
            $table->string('migration_visa', 40);
            $table->string('other_visa', 40);
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
        Schema::dropIfExists('migrationforms');
    }
}
