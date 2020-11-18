<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'student_id' => 622115000,
                'password' => Hash::make('622115000'),
                'email'=>'Dummy@Dummy',
                'student_name' => 'Dummy Guy'
            )
        );
        DB::table('users')->insert(
            array(
                'student_id' => 622115039,
                'password' => Hash::make('622115039'),
                'email'=>'Sahachan@Sahachan',
                'student_name' => 'Sahachan Tippimwong'
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 001101,
                'course_name' => 'Fundamental English',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953103,
                'course_name' => 'Programming Logical Thinking',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953212,
                'course_name' => 'Computer Orgainzation',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953231,
                'course_name' => 'Object Oriented Programming',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953102,
                'course_name' => 'Abstract Data Type',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953104,
                'course_name' => 'Web User Interface and Development',
                'course_credit' => 3.00
            )
        );
        DB::table('courses')->insert(
            array(
                'course_id' => 953202,
                'course_name' => 'Intro to Software Engineering',
                'course_credit' => 3.00
            )
        );
        DB::table('registrations')->insert(
            array(
                'semester_name' => '1/2019',
                'student_id' => 622115039,
                'course_id' => 953103
            )
        );
        
        DB::table('registrations')->insert(
            array(
                'semester_name' => '1/2019',
                'student_id' => 622115039,
                'course_id' => 953212
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
