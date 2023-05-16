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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email') -> unique();
            $table->string('mobile') -> unique();
            $table->string('password');
            $table->string('photo') -> nullable();
            $table->string('blood_group') -> nullable();
            $table->string('date_of_birth') -> nullable();
            $table->string('age') ->nullable();
            $table->string('address') ->nullable();
            $table->string('country') ->nullable();
            $table->string('city') ->nullable();
            $table->string('status') ->default(true);
            $table->string('trash') ->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
