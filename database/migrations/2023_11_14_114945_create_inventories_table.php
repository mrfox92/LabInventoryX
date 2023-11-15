<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->integer('quantity');
            // TODO: agregar estado 
            $table->enum('status', [
                \App\Models\Inventory::UTILIZADO,
                \App\Models\Inventory::NODISPONIBLE,
                \App\Models\Inventory::REPARACION,
                \App\Models\Inventory::PRESTAMO,
                \App\Models\Inventory::DISPONIBLE,
            ])->default(\App\Models\Inventory::DISPONIBLE);
            //  TODO se podra agregar la fecha adquisicion de forma opcional
            $table->timestamp('add_date')->nullable();
            //  TODO si tuviera una fecha de vencimiento, ejemplo: tintas para impresora de forma opcional
            $table->timestamp('exp_date')->nullable();
            //  claves foráneas
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('inventories');
    }
}
