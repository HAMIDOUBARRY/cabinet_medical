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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->char('nom_medecin');
            $table->char('prenom_medecin');
            $table->foreignId('service_id')->constrained('services');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medecins', function(Blueprint $table){
            $table->dropForeign('service_id');
        });
        Schema::dropIfExists('medecins');
    }
};
