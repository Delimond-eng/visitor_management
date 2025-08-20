<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID utilisateur unique, auto-incrémenté (clé primaire)
            $table->string('name'); // Nom complet de l'utilisateur
            $table->string('email')->unique(); // Adresse email unique
            $table->timestamp('email_verified_at')->nullable(); // Date de vérification de l’email (null si non vérifié)
            $table->string('password'); // Mot de passe chiffré
            $table->enum('role', ['ADMIN', 'USER'])->default('USER'); // Rôle de l’utilisateur (admin ou utilisateur simple)
            $table->foreignId("account_id")->constrained("accounts", "id")->cascadeOnDelete();
            $table->rememberToken(); // Jeton de session pour l’authentification "remember me"
            $table->timestamps(); // Champs created_at et updated_at automatiques
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
