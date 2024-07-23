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
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // 'Effect Monster', 'Synchro Monster', 'Normal Monster', etc.
            $table->string('frame_type')->nullable();
            $table->text('desc')->nullable();
            $table->integer('atk')->nullable();
            $table->integer('def')->nullable();
            $table->integer('level')->nullable();
            $table->string('race')->nullable();
            $table->string('attribute')->nullable();
            $table->string('archetype')->nullable();
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
        //
    }
};
