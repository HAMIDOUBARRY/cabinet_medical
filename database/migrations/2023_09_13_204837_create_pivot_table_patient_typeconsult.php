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
        Schema::create('pivot_table_patient_typeconsult', function (Blueprint $table) {
            $table->id();
            $table->date('date_consultation');
          
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('typeconsult_id')->constrained('typeconsults');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_patient_typeconsult');
    }
};
