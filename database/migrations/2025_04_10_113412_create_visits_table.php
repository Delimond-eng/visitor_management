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
            $table->id();
            $table->unsignedBigInteger('visitor_id');
            $table->string('purpose');
            $table->date('visit_date');
            $table->time('time_in');
            $table->time('time_out')->nullable();
            $table->time('stay_time')->nullable();
            $table->string('entry_authorized_by')->nullable();
            $table->string('pass_number')->nullable();
            $table->enum('status', ['Pending', 'Approved', 'Completed'])->default('Pending');
            $table->text('remarks')->nullable();
            $table->string('picture_url')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('update_timestamp')->useCurrent();
            $table->timestamps();
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
