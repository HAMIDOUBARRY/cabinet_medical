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
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->char('type_traitement');

            $table->foreignId('hospitalisation_id')->constrained('hospitalisations');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('traitements', function(Blueprint $table){
            $table->dropForeign('hospitalisation_id');
        });
        Schema::dropIfExists('traitements');
    }
};
