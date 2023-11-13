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
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
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
