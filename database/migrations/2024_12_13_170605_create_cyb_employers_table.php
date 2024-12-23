<?php

use App\Models\User;
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
        Schema::create('employers', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number', 20);
            $table->string('logo');
            $table->string('website');
            $table->string('location');
            $table->string('identifier', 40)->unique();
            $table->timestamps();
            $table->innoDb();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
