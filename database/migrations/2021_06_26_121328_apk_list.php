<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApkList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apk_list', function (Blueprint $table) {
            $table->string('id');

            $table->string('apk_name')->nullable();
            $table->string('apk_package')->nullable();
            $table->boolean('apk_status')->default(0)->nullable();
            $table->string('apk_icon')->default('https://v2l.cdnsfree.com/sfiles/logo_teams/defaultlogo.png')->nullable();

            $table->boolean('redirect_status')->default(0)->nullable();
            $table->string('redirect_to')->nullable();

            $table->string('ads_type')->nullable()->default('admob'); // admob or fan


            $table->string('fan_inter')->nullable();
            $table->string('fan_banner')->nullable();
            $table->string('fan_native')->nullable();

            $table->string('admob_inter')->nullable();
            $table->string('admob_banner')->nullable();
            $table->string('admob_native')->nullable();

            $table->string('onesignal_api')->nullable();
            $table->string('onesignal_secret')->nullable();


            $table->boolean('notice_status')->default(0)->nullable();

            $table->string('notice_title')->nullable();
            $table->string('notice_img')->nullable();
            $table->text('notice_desc')->nullable();
            $table->string('notice_url')->nullable();

            $table->boolean('button_detail_status')->default(0)->nullable();
            $table->boolean('button_download_status')->default(0)->nullable();




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
        Schema::dropIfExists('apk_list');
    }
}
