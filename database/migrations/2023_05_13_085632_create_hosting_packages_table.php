<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingPackagesTable extends Migration
{
    public function up()
    {
        Schema::create('hosting_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->integer('disk_space');
            $table->integer('bandwidth');
            $table->integer('email_accounts');
            $table->integer('ftp_accounts');
            $table->integer('databases');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hosting_packages');
    }
}
