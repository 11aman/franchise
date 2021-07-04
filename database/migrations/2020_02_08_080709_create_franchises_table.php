<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('franchise_name');
            $table->string('franchise_code');
            $table->string('franchise_password');
            $table->string('user_id');
            $table->string('register_no');   
            $table->string('contact_person_name');
            $table->string('number');
            $table->string('address');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('account_holder_name');
            $table->string('bank_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}
