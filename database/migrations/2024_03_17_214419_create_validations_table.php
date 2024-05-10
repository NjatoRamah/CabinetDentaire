<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rdv_id');
            $table->unsignedBigInteger('service_id');
            $table->date('date');
            $table->time('heure');
            $table->foreign('rdv_id')
                    ->references('id')->on('rendez_vouses')
                    ->onDelete('cascade');

            $table->foreign('service_id')
                    ->references('id')->on('services')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
