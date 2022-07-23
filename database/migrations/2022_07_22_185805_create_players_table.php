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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->date('birth_date');
            $table->string('height');
            $table->string('weight');
            $table->string('image')->nullable();
            $table->string('wingspan');
            $table->smallInteger('draft_pick_number')->nullable();
            $table->smallInteger('draft_round_picked')->nullable();
            $table->foreignId('draft_id')->constrained()->nullable();
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
        Schema::dropIfExists('players');
    }
};
