<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependents', function (Blueprint $table) {
            $table->id('dependent_id');
            
        
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('relationship', 25); 
            
           
            $table->unsignedBigInteger('employee_id');
        
            $table->timestamps();
            
       
            $table->foreign('employee_id')
                  ->references('employee_id')
                  ->on('employees')
                  ->onDelete('cascade');
            
     
            $table->index('last_name');
            $table->index('employee_id');
            $table->index(['last_name', 'first_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependents');
    }
}
