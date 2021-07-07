<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrySectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->comment('Default Label');
            $table->string('en_industry_sector_name', 255)->nullable()->comment('English Label');
            $table->string('it_industry_sector_name', 255)->nullable()->comment('Italy Label');
            $table->string('gr_industry_sector_name', 255)->nullable()->comment('Germany Label');
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
        Schema::dropIfExists('industry_sectors');
    }
}
