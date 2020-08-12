<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControllablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controllables', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('controllable_id');
            $table->string('controllable_type');
            $table->timestamps();
        });

        Schema::table('user_permissions', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controllables');
    }
}
