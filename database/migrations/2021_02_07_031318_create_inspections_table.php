<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->text('notes')->nullable();
            $table->text('hive');
            $table->text('temperament');
            $table->text('cleanliness');
            $table->text('brood');
            $table->text('stores');
            $table->text('room');
            $table->text('health');
            $table->text('varroa');
            $table->text('feed')->nullable();
            $table->text('supers')->nullable();
            $table->text('weather')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('inspections');
    }
}
