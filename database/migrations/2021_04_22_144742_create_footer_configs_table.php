<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_configs', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('youtube')->nullable();
            $table->string('time_working')->nullable();
            $table->text('contact')->nullable();
            $table->text('introduce')->nullable();
            $table->text('return_policy')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('terms_of_service')->nullable();
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
        Schema::dropIfExists('footer_configs');
    }
}
