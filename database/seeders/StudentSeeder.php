<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // import json data into database
        // $json = File::get(path: 'database/json/students.json');
        // $students = collect(json_decode($json, true));
        // $students->each(function ($student) {
        //     student::create([
        //         'name' => $student['name'],
        //         'email' => $student['email'],
        //         'phone' => $student['phone'],
        //         'address' => $student['address'],
        //         'age' => $student['age'],
        //         'created_at' => $student['created_at'],
        //         'updated_at' => $student['updated_at'],

        //     ]);
        // });

        // insert fake data using faker in laravel 

        // student::create([
        //     'name' => fake()->name(),
        //     'email' => fake()->email(),
        //     'phone' => fake()->phoneNumber(20),
        //     'address' => fake()->address(),
        //     'age' => fake()->numberBetween(20, 40),

        // ]);


        // $students = collect([
        //     ['name' => 'Doe', 'email' => 'doe@example.com', 'phone' => 1234567892, 'address' => '123 Main St', 'age' => 20],
        //     ['name' => 'Smith', 'email' => 'smith@example.com', 'phone' => 98761243210, 'address' => '456 Elm St', 'age' => 22],
        //     ['name' => 'Johnson', 'email' => 'johnson@example.com', 'phone' => 5525555555, 'address' => '789 Oak St', 'age' => 25],
        //     ['name' => 'Brown', 'email' => 'brown@example.com', 'phone' => 1111111111, 'address' => '321 Pine St', 'age' => 30],
        //     ['name' => 'Garcia', 'email' => 'garcia@example.com', 'phone' => 2222222222, 'address' => '654 Cedar St', 'age' => 35],
        //     ['name' => 'Miller', 'email' => 'miller@example.com', 'phone' => 3333333333, 'address' => '987 Spruce St', 'age' => 40],
        // ]);
        // $students->each(function ($student) {
        // student::insert($student);
        // });

        // student::create([
        //     'name' => 'xxxDoe',
        //     'email' => 'xxx.doe@example.com',
        //     'phone' => 9889415087,
        //     'address' => '123 Main St',
        //     'age' => 20,

        // ]);

        // insert  fake data using factory 
        student::factory(6)->create();
    }
}
