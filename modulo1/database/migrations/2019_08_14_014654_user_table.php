<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthdate')->after('password');
            $table->string('gender')->after('birthdate');
            $table->string('photo')->after('gender')->default('/img/image.png');
            $table->string('role')->after('photo')->default('Customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('birthdate');
            $table->dropColumn('gender');
            $table->dropColumn('photo');
            $table->dropColumn('role');
        });
    }
}
