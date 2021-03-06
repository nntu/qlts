<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiSansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_sans', function (Blueprint $table) {
            $table->string('MaTS')->primary();
            $table->string('TenTS');
            $table->string('MaNhomTS');
            $table->datetime('NgayDuaVaoSD');         
            $table->string('Serrial')->nullable();
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
        Schema::dropIfExists('tai_sans');
    }
}
