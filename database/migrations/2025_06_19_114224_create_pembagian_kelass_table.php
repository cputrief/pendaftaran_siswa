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
        Schema::create('pembagian_kelass', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("kelass_id");
            $table->bigInteger("pendaftarans_id");
            $table->bigInteger("gurus_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembagian_kelass');
    }
};
