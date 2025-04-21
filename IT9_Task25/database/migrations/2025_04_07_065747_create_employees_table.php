<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('first_name', 20)->nullable();
            $table->string('last_name', 25);
            $table->string('email', 100);
            $table->string('phone_number', 20)->nullable();
            $table->date('hire_date');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->decimal('salary', 8, 2);
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->timestamps();

            
            $table->foreign('job_id')->references('job_id')->on('jobs');
            $table->foreign('manager_id')->references('employee_id')->on('employees');
            $table->foreign('department_id')->references('department_id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
