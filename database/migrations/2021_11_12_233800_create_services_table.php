<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('space_available')->nullable();
            $table->enum('status', [\App\Models\Service::BORRADOR, \App\Models\Service::PUBLICADO])->default(\App\Models\Service::BORRADOR);
            $table->enum('av_status', [
                \App\Models\Service::AVAILABLE,
                \App\Models\Service::UNDERWAY,
                \App\Models\Service::FINISHED
            ])->default(\App\Models\Service::AVAILABLE);
            $table->timestamp('init_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
