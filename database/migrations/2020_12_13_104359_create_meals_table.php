<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('meals')) {
            Schema::create('meals', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                  
                $table->string('slug')->nullable();
                $table->string('description')->nullable();
                  $table->string('description_cro')->nullable();
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
