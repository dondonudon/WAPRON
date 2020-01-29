<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysMenuGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_menu_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->tinyInteger('sys')->comment('0:Android, 1:Web');
            $table->string('icon',50);
            $table->tinyInteger('ord');
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
        Schema::dropIfExists('sys_menu_groups');
    }
}
