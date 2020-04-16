<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteamAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steam_accounts', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->bigInteger('steamId');
            $table->string('steamId2');
            $table->string('steamId3');
            $table->bigInteger('accountId');
            $table->string('accountUrl');
            $table->timestamp('joined')->nullable();
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
        Schema::dropIfExists('steam_account');
    }
}
