<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'UI/UX Instructor',
            'Full Stack Web Developer (Angular & Dot Net)',
            'Full Stack Web Developer (React & Node.js)',
            'Full Stack Web Developer (React & PHP  Laravel)',
            'Flutter Instructor',
            'React Frontend Instructor',
            'Angular Frontend Instructor',
            'Dot .NET Backend Instructor',
            'PHP(Laravel) Backend Instructor',
            'Node.js Instructor',
            'Artificial Intelligence Instructor',
            'AI Automation Instructor',
            'Data Analysis Instructor',
            'Full Stack AI',
            'Full Stack Web Developer',
            'Software Testing Instructor',
            'Cybersecurity (SOC & Penetration Testing) Instructor',
            'Networking Instructor',
            // مجالات إضافية
            'DevOps Engineer',
            'Cloud Computing Instructor',
            'Machine Learning Engineer',
            'Blockchain Developer',
            'Game Development Instructor',
            'Mobile App Development Instructor (iOS/Android)',
            'Digital Marketing Specialist',
            'Database Administrator (DBA)',
        ];

        foreach ($courses as $course) {
            Field::create([
                'name' => $course,
                'description' => null,
            ]);
        }
    }
}
