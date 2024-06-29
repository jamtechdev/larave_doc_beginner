<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('students', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name', 100);
    //         $table->string('email', 100);
    //         $table->integer('phone');
    //         $table->string('address', 100);
    //         $table->timestamps();
    //     });
    // }

    // create custom primary key 
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string("url")->unique();
            $table->string('email', 100)->unique()->nullable();
            $table->string('phone')->unique();
            $table->string('address', 100)->comment("Student Address");
            $table->string("image");
            $table->string("about");
            // $table->string("city", 30)->default("No City")->nullable();
            $table->integer("age")->unsigned();
            $table->timestamps();
        });
        // DB::table('students')->insert([
        //     ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => 1234567890, 'address' => '123 Main St', 'age' => 20, 'created_at' => now(), 'updated_at' => now()],
        //     ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => 9876543210, 'address' => '456 Elm St', 'age' => 22, 'created_at' => now(), 'updated_at' => now()],
        //     ['id' => 3, 'name' => 'Alice Johnson', 'email' => null, 'phone' => 5555555555, 'address' => '789 Oak St', 'age' => 25, 'created_at' => now(), 'updated_at' => now()],
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
