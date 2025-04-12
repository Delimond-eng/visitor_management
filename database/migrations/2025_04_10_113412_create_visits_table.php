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
            $table->unsignedBigInteger('visitor_id'); // Référence vers le visiteur concerné (clé étrangère)
            $table->string('purpose'); // But de la visite (ex : réunion, livraison)
            $table->date('visit_date'); // Date de la visite
            $table->time('time_in'); // Heure d’entrée
            $table->time('time_out')->nullable(); // Heure de sortie (null si pas encore sorti)
            $table->time('stay_time')->nullable(); // Durée de la visite (calculée)
            $table->string('entry_authorized_by')->nullable(); // Personne ayant autorisé l'entrée
            $table->string('pass_number')->nullable(); // Numéro du badge visiteur
            $table->enum('status', ['Pending', 'Approved', 'Completed'])->default('Pending'); // État de la visite
            $table->text('remarks')->nullable(); // Remarques éventuelles sur la visite
            $table->string('picture_url')->nullable(); // URL vers la photo du visiteur
            $table->string('updated_by')->nullable(); // Nom ou ID de la personne ayant mis à jour l’entrée
            $table->timestamp('update_timestamp')->useCurrent(); // Horodatage de mise à jour (auto)
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
