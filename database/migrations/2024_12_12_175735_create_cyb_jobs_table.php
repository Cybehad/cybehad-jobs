<?php

use App\Models\Employer;
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
        Schema::create('cyb_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->string('salary', 10);
            $table->string('schedule')->default('Full Time');
            $table->string('url');
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('cyb_jobs');
    }
};
