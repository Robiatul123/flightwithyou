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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->string('maskapai');
            $table->string('kotaasal');
            $table->string('kotatujuan');
            $table->string('jadwalkeberangkatan');
            $table->string('penumpang1');
            $table->string('penumpang2')->nullable(true);
            $table->string('kursi');
            $table->string('status')->default('Waiting For Payment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
