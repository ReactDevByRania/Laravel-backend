<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rappel', function (Blueprint $table) {
            $table->unsignedBigInteger('rendez_vous_id')->nullable();
            $table->foreign('rendez_vous_id')->references('id')->on('rendu_vous');
        });
    }
    
    public function down()
    {
        Schema::table('rappel', function (Blueprint $table) {
            $table->dropForeign(['rendez_vous_id']);
            $table->dropColumn('rendez_vous_id');
        });
    }
};
