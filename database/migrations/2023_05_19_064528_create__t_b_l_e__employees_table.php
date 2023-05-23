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
        Schema::create('_t_b_l_e__employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('address')->nullable();
            $table->double('salary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_t_b_l_e__employees');
    }
};
