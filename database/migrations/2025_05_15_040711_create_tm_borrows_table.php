<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tm_borrows', function (Blueprint $table) {
            $table->id();
            $table->int('user_id');
            $table->int('book_id');
            $table->tinyint('status_id');
            $table->date('borrow_date');
            $table->date('borrow_due');
            $table->date('return_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_borrows');
    }
};
