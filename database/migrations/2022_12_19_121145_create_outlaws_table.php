<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlaws', function (Blueprint $table) {
            $table->id();
            
            $table->string('name',150);
            $table->string('alias',50);
            $table->string('crime',150);
            $table->string('hint',150);
            $table->integer('reward');
            $table->text('description');
            $table->dateTime('deadline');
            $table->integer('gang');
            $table->string('img');

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
        Schema::dropIfExists('outlaws');
    }
};
