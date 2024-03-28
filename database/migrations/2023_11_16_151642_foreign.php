<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {



        
        //individuals
        Schema::table('individuals', function (Blueprint $table) {
            // $table->foreign('roleID')->references('roleID')->on('roles');
        });

//passwords
        Schema::table('passwords', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

        //salaries
        Schema::table('salaries', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });
//patients

        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->foreign('careGroupID')->references('careGroupID')->on('caregroup');

        });
//payments
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('patientID')->references('patientID')->on('patients');
        });
//emergency_contacts
        Schema::table('emergency_contacts', function (Blueprint $table) {
            $table->foreign('patientID')->references('patientID')->on('patients');
        });
//approvals
        Schema::table('approvals', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });
//doctor_appointments
        Schema::table('doctor_appointments', function (Blueprint $table) {
            $table->foreign('doctorID')->references('individualID')->on('individuals');
            $table->foreign('patientID')->references('patientID')->on('patients');

        });

//doctors
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

//supervisors
        Schema::table('supervisors', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

        

//caregivers
        Schema::table('caregivers', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->foreign('careGroupID')->references('careGroupID')->on('caregroup');
        
        });
//rosters
        // Schema::table('rosters', function (Blueprint $table) {
        //     $table->foreign('supervisorID')->references('supervisorID')->on('supervisors');
        //     $table->foreign('doctorID')->references('doctorID')->on('doctors');
        //     $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
        // });

        //home_care
        Schema::table('home_care', function (Blueprint $table) {
             $table->foreign('patientID')->references('patientID')->on('patients');
             $table->foreign('doctorID')->references('doctorID')->on('doctors');
             $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
        });

        //caregroup
        Schema::table('caregroup', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');

       });
        
    }


    public function down()
{
    // Drop foreign keys in reverse order of creation

    

    // Drop from home_care table
    Schema::table('home_care', function (Blueprint $table) {
        $table->dropForeign(['patientID']);
        $table->dropForeign(['doctorID']);
        $table->dropForeign(['caregiverID']);
    });

    // Drop from rosters table
    // Schema::table('rosters', function (Blueprint $table) {
    //     $table->dropForeign(['supervisorID']);
    //     $table->dropForeign(['doctorID']);
    //     $table->dropForeign(['caregiverID']);
    // });
    

    // Drop from caregivers table
    Schema::table('caregivers', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
        $table->dropForeign(['careGroupID']);
    });
 // Drop from caregroup table
    Schema::table('caregroup', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
        $table->dropForeign(['caregiverID']);
    });

    // Drop from doctors table
    Schema::table('doctors', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
    });

    // Drop from doctor_appointments table
    Schema::table('doctor_appointments', function (Blueprint $table) {
        $table->dropForeign(['doctorID']);
        $table->dropForeign(['patientID']);
    });

    // Drop from approvals table
    Schema::table('approvals', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
    });

    // Drop from emergency_contacts table and payments table
    Schema::table('emergency_contacts', function (Blueprint $table) {
        $table->dropForeign(['patientID']);
    });

    Schema::table('payments', function (Blueprint $table) {
        $table->dropForeign(['patientID']);
    });

    // Drop from patients table
    Schema::table('patients', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
        $table->dropForeign(['careGroupID']);
    });

    // Drop from salaries and passwords tables
    Schema::table('salaries', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
    });

    Schema::table('passwords', function (Blueprint $table) {
        $table->dropForeign(['individualID']);
    });

    // Drop from individuals table
    Schema::table('individuals', function (Blueprint $table) {
        // $table->dropForeign(['roleID']);
    });

    
}
};

