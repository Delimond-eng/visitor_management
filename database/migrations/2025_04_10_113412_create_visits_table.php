<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * enregistrements des visites
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id(); // ID unique de la visite
            $table->string('full_name'); // Nom complet du visiteur
            $table->string('company_or_address')->nullable(); // Société ou adresse du visiteur (facultatif)
            $table->string('contact_number')->nullable(); // Numéro de téléphone (facultatif)
            $table->string('email_address')->nullable(); // Adresse email du visiteur (facultatif)
            $table->string('id_proof_type')->nullable(); // Type de pièce d'identité (ex : CIN, passeport)
            $table->string('id_proof_number')->nullable(); // Numéro de pièce d'identité
            $table->string('visitor_type')->nullable(); // Numéro de pièce d'identité
            $table->string('vehicle_number')->nullable(); // Numéro d'immatriculation du véhicule (facultatif)
            $table->string('department')->nullable(); // Numéro d'immatriculation du véhicule (facultatif)
            $table->string('purpose'); // But de la visite (ex : réunion, livraison)
            $table->timestamp('visit_date')->useCurrent(); // Date de la visite
            $table->time('time_in'); // Heure d’entrée
            $table->time('time_out')->nullable(); // Heure de sortie (null si pas encore sorti)
            $table->string('stay_time')->nullable(); // Durée de la visite (calculée)
            $table->string('entry_authorized_by')->nullable(); // Personne ayant autorisé l'entrée
            $table->string('pass_number')->nullable(); // Numéro du badge visiteur
            $table->string('hostname')->nullable(); // Numéro du badge visiteur
            $table->enum('status', ['Pending', 'Approved', 'Completed'])->default('Pending'); // État de la visite
            $table->text('remarks')->nullable(); // Remarques éventuelles sur la visite
            $table->string('picture_url')->nullable(); // URL vers la photo du visiteur
            $table->unsignedBigInteger('updated_by'); // Nom ou ID de la personne ayant mis à jour l’entrée
            $table->timestamp('update_timestamp')->useCurrent(); // Horodatage de mise à jour (auto)
            $table->foreignId("account_id")->constrained("accounts", "id")->cascadeOnDelete();
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
        Schema::dropIfExists('visits');
    }
};
