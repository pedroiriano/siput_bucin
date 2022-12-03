<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('address');
            $table->bigInteger('user_id')->nullable();
            $table->string('photo')->nullable();
            $table->string('category')->nullable();
            $table->string('subdistrict')->default('Beji');
            $table->string('village')->default('Pondok Cina');
            $table->string('bin')->nullable();
            $table->string('business_age');
            $table->integer('employees');
            $table->string('phone');
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
        Schema::dropIfExists('stores');
    }
}
