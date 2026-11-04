<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Kiki Pratiwi
        Student::create([
            'nis' => '0012345',
            'name' => 'Kiki Pratiwi',
            'classroom' => 'X IPA 1',
            'birth_date' => '1998-07-17',
            'average_score' => 87.50,
            'is_active' => true,
            'address' => 'Kp. Lebak Cadas',
            'parent_phone' => '0813-2222-3333',
        ]);

        // 2. Devy Purnama Sari
        Student::create([
            'nis' => '0012346',
            'name' => 'Devy Purnama Sari',
            'classroom' => 'X IPS 1',
            'birth_date' => '2010-03-30',
            'average_score' => 82.10,
            'is_active' => true,
            'address' => 'Graha Raya Bintaro',
            'parent_phone' => '0813-2222-3334',
        ]);

        // 3. Mega Safira
        Student::create([
            'nis' => '0012347',
            'name' => 'Mega Safira',
            'classroom' => 'XI IPA 2',
            'birth_date' => '2010-12-17',
            'average_score' => 90.00,
            'is_active' => true,
            'address' => 'Jl. ALmuhajirin, Cipondoh',
            'parent_phone' => '0813-2222-3335',
        ]);

        // 4. Muhammad Farras Hidayat
        Student::create([
            'nis' => '0012348',
            'name' => 'Muhammad Farras Hidayat',
            'classroom' => 'X IPA 1',
            'birth_date' => '2010-07-31',
            'average_score' => 78.45,
            'is_active' => true,
            'address' => 'Jl. Kehakiman, Tanah Tinggi',
            'parent_phone' => '0813-2222-3336',
        ]);

        // 5. Ghanu Nandora
        Student::create([
            'nis' => '0012349',
            'name' => 'Ghanu Nandora',
            'classroom' => 'X IPS 1',
            'birth_date' => '2010-06-13',
            'average_score' => 85.20,
            'is_active' => true,
            'address' => 'Jl. Nangka, Pakulonan',
            'parent_phone' => '0813-2222-3337',
        ]);

        // 6. Dhimas Bagus
        Student::create([
            'nis' => '0012350',
            'name' => 'Dhimas Bagus',
            'classroom' => 'XI IPA 2',
            'birth_date' => '2009-03-23',
            'average_score' => 88.90,
            'is_active' => true,
            'address' => 'Puri Dewata, Poris Plawad',
            'parent_phone' => '0813-2222-3338',
        ]); 

        // 7. Fitri Yulianti
        Student::create([
            'nis' => '0012351',
            'name' => 'Fitri Yulianti',
            'classroom' => 'X IPA 1',
            'birth_date' => '2010-07-18',
            'average_score' => 92.15,
            'is_active' => true,
            'address' => 'Jl. Bidar, Kelapa Dua',
            'parent_phone' => '0813-2222-3339',
        ]);

        // 8. Julia Safhira
        Student::create([
            'nis' => '0012352',
            'name' => 'Julia Safhira',
            'classroom' => 'X IPS 1',
            'birth_date' => '2010-07-04',
            'average_score' => 79.80,
            'is_active' => true,
            'address' => 'Jl. Flamboyan, Kota Bumi',
            'parent_phone' => '0813-2222-3340',
        ]);

        // 9. Ayu Saraswati
        Student::create([
            'nis' => '0012353',
            'name' => 'Ayu Saraswati',
            'classroom' => 'XI IPA 2',
            'birth_date' => '2009-05-02',
            'average_score' => 86.60,
            'is_active' => true,
            'address' => 'Kp. Melayu, Teluknaga',
            'parent_phone' => '0813-2222-3341',
        ]);

        // 10. Saskia Ayu
        Student::create([
            'nis' => '0012354',
            'name' => 'Saskia Ayu',
            'classroom' => 'X IPA 1',
            'birth_date' => '2010-01-17',
            'average_score' => 84.30,
            'is_active' => true,
            'address' => 'Jl. Gatot Subroto, Cimone',
            'parent_phone' => '0813-2222-3342',
        ]);

        // 11. Fabrizio
        Student::create([
            'nis' => '0012355',
            'name' => 'Fabrizio',
            'classroom' => 'X IPS 1',
            'birth_date' => '2010-02-06',
            'average_score' => 94.50,
            'is_active' => true,
            'address' => 'Taman Pinang Indah',
            'parent_phone' => '0813-2222-3343',
        ]);

        // 12. Aji Soko
        Student::create([
            'nis' => '0012356',
            'name' => 'Aji Soko',
            'classroom' => 'XI IPA 2',
            'birth_date' => '2009-04-27',
            'average_score' => 81.25,
            'is_active' => true,
            'address' => 'Kp. Kelapa',
            'parent_phone' => '0813-2222-3344',
        ]);

        // 13. Robert
        Student::create([
            'nis' => '0012357',
            'name' => 'Robert',
            'classroom' => 'X IPA 1',
            'birth_date' => '2010-10-1',
            'average_score' => 89.10,
            'is_active' => true,
            'address' => 'ALam Indah, Cipondoh',
            'parent_phone' => '0813-2222-3345',
        ]);

        // 14. Nurmaqiah
        Student::create([
            'nis' => '0012358',
            'name' => 'Nurmaqiah',
            'classroom' => 'X IPS 1',
            'birth_date' => '2010-07-03',
            'average_score' => 76.50,
            'is_active' => true,
            'address' => 'Jl. Solo Total Persada',
            'parent_phone' => '0813-2222-3346',
        ]);

        // 15. Irfan
        Student::create([
            'nis' => '0012359',
            'name' => 'Irfan',
            'classroom' => 'XI IPA 2',
            'birth_date' => '2009-04-21',
            'average_score' => 91.80,
            'is_active' => true,
            'address' => 'Binong',
            'parent_phone' => '0813-2222-3347',
        ]);

        // 16. Fanisa
        Student::create([
            'nis' => '0012360',
            'name' => 'Fanisa',
            'classroom' => 'X IPA 1',
            'birth_date' => '2010-11-09',
            'average_score' => 83.75,
            'is_active' => true,
            'address' => 'Jl. Nyiur, Kunciran',
            'parent_phone' => '0813-2222-3348',
        ]);
    }
}
