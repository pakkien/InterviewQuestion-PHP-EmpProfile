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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('marital_status'); //single, married, divorced
            $table->string('phone_no');
            $table->string('email');
            $table->string('address');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('hire_date');
            $table->string('department');
            $table->timestamps();
            //$table->timestamps('updated_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
