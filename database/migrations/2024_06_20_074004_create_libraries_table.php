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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained()->cascadeOnUpdate()->cascadeOnDelete();


            // $table->unsignedBigInteger("stud_id");
            // $table->foreign("stud_id")->references("id")->on("students")->onUpdate("cascade")->onDelete("cascade");
            $table->string("book_name", 50);
            $table->date("issue_date")->nullable();
            $table->boolean("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
