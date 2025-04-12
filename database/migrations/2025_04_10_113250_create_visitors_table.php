<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * informations sur les visiteurs
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id(); // ID visiteur unique
            $table->string('full_name'); // Nom complet du visiteur
            $table->string('company_or_address')->nullable(); // Société ou adresse du visiteur (facultatif)
            $table->string('contact_number')->nullable(); // Numéro de téléphone (facultatif)
            $table->string('email_address')->nullable(); // Adresse email du visiteur (facultatif)
            $table->string('id_proof_type')->nullable(); // Type de pièce d'identité (ex : CIN, passeport)
            $table->string('id_proof_number')->nullable(); // Numéro de pièce d'identité
            $table->string('vehicle_number')->nullable(); // Numéro d'immatriculation du véhicule (facultatif)
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
        Schema::dropIfExists('visitors');
    }
};
