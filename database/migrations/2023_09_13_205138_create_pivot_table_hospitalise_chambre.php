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
        Schema::create('pivot_table_hospitalise_chambre', function (Blueprint $table) {
            $table->id();
            $table->date('date_attribution');

           
            $table->foreignId('hospitalisation_id')->constrained('hospitalisations');

            $table->foreignId('chambre_id')->constrained('chambres');


            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_hospitalise_chambre');
    }
};
