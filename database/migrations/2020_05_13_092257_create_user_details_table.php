<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('account_type')->default(1);
            $table->string('name');
            $table->date('dob')->nullable();
            $table->char('indentity_number', 100)->nullable();
            $table->char('phone', 20)->nullable();
            $table->char('representative', 255)->nullable();
            $table->char('representative_phone', 20)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->integer('national_id')->unsigned()->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('distric_id')->unsigned()->nullable();
            $table->integer('ward_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->char('avata_url', 255)->nullable();
            $table->char('facebook', 255)->nullable();
            $table->char('zalo', 255)->nullable();
            $table->integer('outbound_national_ids')->unsigned()->nullable();
            $table->integer('fields_ids')->unsigned()->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->timestamps();
        });

        // Schema::create('company_details', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->date('dob')->nullable();
        //     $table->char('indentity_number', 100)->nullable();
        //     $table->char('phone_1', 20)->nullable();
        //     $table->char('phone_2', 20)->nullable();
        //     $table->tinyInteger('gender')->nullable();
        //     $table->integer('national_id')->unsigned()->nullable();
        //     $table->integer('province_id')->unsigned()->nullable();
        //     $table->integer('distric_id')->unsigned()->nullable();
        //     $table->integer('ward_id')->unsigned()->nullable();
        //     $table->string('address')->nullable();
        //     $table->char('avata_url', 255)->nullable();
        //     $table->char('facebook', 255)->nullable();
        //     $table->char('zalo', 255)->nullable();
        //     $table->char('tax_number', 100)->unsigned()->nullable();
        //     $table->integer('outbound_national_ids')->unsigned()->nullable();
        //     $table->integer('fields_ids')->unsigned()->nullable();
        //     $table->enum('status', [0, 1])->default(1);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_details');

        Schema::dropIfExists('company_details');
    }
}
