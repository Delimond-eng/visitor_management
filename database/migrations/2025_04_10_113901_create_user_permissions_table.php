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
        Schema::create('user_permissions', function (Blueprint $table) {
            $table->id(); // ID unique de l’autorisation
            $table->unsignedBigInteger('user_id'); // Référence vers l’utilisateur
            $table->enum('permission_type', ['Update', 'Delete', 'Export']); // Type de permission accordée
            $table->boolean('enabled')->default(false); // Permission activée ou non
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
        Schema::dropIfExists('user_permissions');
    }
};
