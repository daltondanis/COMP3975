<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('schools')->insert([
            ['name' => 'University of British Columbia'],
            ['name' => 'Langara College'],
            ['name' => 'Simon Fraser University'],
            ['name' => 'British Columbia Institute of Technology'],
            ['name' => 'Vancouver Community College'],
            ['name' => 'Kwantlen Polytechnic University'],
            ['name' => 'The Art Institute of Vancouver'],
            ['name' => 'Emily Carr University of Art and Design'],
            ['name' => 'Capilano University'],
            ['name' => 'Douglas College'],
            ['name' => 'University of Victoria'],
            ['name' => 'Vancouver Island University'],
            ['name' => 'Camosun College']
        ]);



        //users test data -------------------------------------------------------
        DB::table('users')->insert(['email' => 'testing@gmail.com',
            'password' =>'123456',
            'username' => 'bcit' ]);


        DB::table('users')->insert([
            'email' => 'testing2@gmail.com',
            'password' =>'123456',
            'username' => 'bcit2' ]);


        DB::table('users')->insert([
            'email' => 'testing3@gmail.com',
            'password' =>'123456',
            'username' => 'bcit3' ]);


        DB::table('users')->insert([
            'email' => 'testing4@gmail.com',
            'password' =>'123456',
            'username' => 'bcit4' ]);
        DB::table('users')->insert([
            'email' => 'testing5@gmail.com',
            'password' =>'123456',
            'username' => 'bcit5' ]);



        //notes test data -------------------------------------------------------
        DB::table('notes')->insert(['user_id' => 1,
            'title' => 'Notes for Web and Mobile',
            'school_id' => '1', 'program' => 'CST',
            'courseName' => 'COMP3975',
            'yearTaken' => 2016,
            'teacher' => 'Jason Harrison',
            'description' => 'These notes are for the whole semester, colour coded.',
            'imagePath' => '/images/image1.jpg',
            'price' => 12,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);

        DB::table('notes')->insert(['user_id' => 2,
            'title' => 'COMP 3512: Object Oriented Prog in C++',
            'school_id' => '2', 'program' => 'CST',
            'courseName' => 'COMP3912',
            'yearTaken' => 2016,
            'teacher' => 'Albert Wei',
            'description' => 'Categorized by topics, following teaching order from the instructor.',
            'imagePath' => '/images/image2.jpg',
            'price' => 18,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 3,
            'title' => 'BCIT - COMP 1510',
            'school_id' => '3', 'program' => 'CST',
            'courseName' => 'COMP1510',
            'yearTaken' => 2013,
            'teacher' => 'Bruce Link',
            'description' => 'Notes package includes lecture and lab notes as well as assignment solutions.',
            'imagePath' => '/images/image3.png',
            'price' => 10,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 2,
            'title' => 'COMP 1536: Intro to Web Development',
            'school_id' => '4', 'program' => 'CST',
            'courseName' => 'COMP1536',
            'yearTaken' => 2015,
            'teacher' => 'Medhat Elmasry',
            'description' => 'Separated into lecture and lab notes, includes all topics covered in lectures and assignments given either in lab or out.',
            'imagePath' => '/images/image1.jpg',
            'price' => 18,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);

        DB::table('notes')->insert(['user_id' => 4,
            'title' => 'BCIT CST Applied Mathematics',
            'school_id' => '5', 'program' => 'CST',
            'courseName' => 'COMP1113',
            'yearTaken' => 2015,
            'teacher' => 'Paul Rozman',
            'description' => 'This deal includes all lecture notes, quizzes during the labs, and the exams (answers included).',
            'imagePath' => '/images/image2.jpg',
            'price' => 11,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 4,
            'title' => 'BCIT CST Discrete Mathematics',
            'school_id' => '6', 'program' => 'CST',
            'courseName' => 'COMP2121',
            'yearTaken' => 2015,
            'teacher' => 'Goran Ruzic',
            'description' => 'This deal includes all lecture notes, quizzes during the labs, and the exams (answers included).',
            'imagePath' => '/images/image3.png',
            'price' => 12,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 4,
            'title' => 'BCIT CST Computer Organization/Architec',
            'school_id' => '7', 'program' => 'CST',
            'courseName' => 'COMP2721',
            'yearTaken' => 2015,
            'teacher' => 'Jason Harrison',
            'description' => 'This deal includes all lecture notes, quizzes during the labs, and the exams (answers included).',
            'imagePath' => '/images/image1.jpg',
            'price' => 12,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);

        DB::table('notes')->insert(['user_id' => 4,
            'title' => 'BCIT CST Intro to Data Communications',
            'school_id' => '8', 'program' => 'CST',
            'courseName' => 'COMP3721',
            'yearTaken' => 2015,
            'teacher' => 'Chi En Huang',
            'description' => 'This deal includes all lecture notes, quizzes during the labs, and the exams (answers included).',
            'imagePath' => '/images/image2.jpg',
            'price' => 13,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 4,
            'title' => 'BCIT CST Algorithms Analysis and Design',
            'school_id' => '9', 'program' => 'CST',
            'courseName' => 'COMP3760',
            'yearTaken' => 2016,
            'teacher' => 'Farnaz Dargahi',
            'description' => 'This deal includes all lecture notes, quizzes during the labs, and the exams (answers included).',
            'imagePath' => '/images/image3.png',
            'price' => 13,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);


        DB::table('notes')->insert(['user_id' => 5,
            'title' => '!AMAZING! Relational Database Systems !AMAZING!',
            'school_id' => '10', 'program' => 'CST',
            'courseName' => 'COMP2714',
            'yearTaken' => 2015,
            'teacher' => 'Keith Tang',
            'description' => 'Most amazing notes in the world from the amazing lecture of Keith Tang!',
            'imagePath' => '/images/image1.jpg',
            'price' => 99,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);

        DB::table('notes')->insert(['user_id' => 5,
            'title' => '!AMAZING! Object Oriented Analysis and Design !AMAZING!',
            'school_id' => '11', 'program' => 'CST',
            'courseName' => 'COMP3711',
            'yearTaken' => 2016,
            'teacher' => 'Richard Chau',
            'description' => 'Most amazing notes in the world from the amazing lectures of Richard Chau!',
            'imagePath' => '/images/image2.jpg',
            'price' => 99,
            'created_at'=>new \DateTime(),
            'updated_at'=>new \DateTime()]);
    }
}
