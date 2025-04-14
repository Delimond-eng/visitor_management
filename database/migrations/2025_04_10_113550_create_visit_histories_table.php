<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * suivi des modifications des visites
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_histories', function (Blueprint $table) {
            $table->id(); // ID unique de l'historique
            $table->unsignedBigInteger('visit_id'); // Référence à la visite concernée
            $table->unsignedBigInteger('updated_by'); // Utilisateur ayant effectué la modification
            $table->timestamp('update_timestamp')->useCurrent(); // Date/heure de la modification
            $table->json('changes'); // Détails des modifications sous forme JSON
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_histories');
    }
};
