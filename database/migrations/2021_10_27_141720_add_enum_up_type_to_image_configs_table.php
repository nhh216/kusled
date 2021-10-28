<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnumUpTypeToImageConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::table('image_configs', function (Blueprint $table) {
            $table->enum('type', ['SLIDER', 'BANNER', 'LOGO', 'META', 'FAVICON']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('image_configs', 'type')) {
            Schema::table('image_configs', function (Blueprint $table) {
                $table->dropColumn('type');
            });
        }
    }
}
