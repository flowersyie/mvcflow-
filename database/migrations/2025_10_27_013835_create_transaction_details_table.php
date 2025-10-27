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
        Schema::create('transaction_details', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignId(column: 'transaction_id')->constrained();
            $table->date(column: 'item_id')->constrained();
            $table->integer(column: 'qty');
            $table->integer(column: 'substotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'transaction_details');
    }
};
