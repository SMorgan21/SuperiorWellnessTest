<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->text('container_number');
            $table->text('container_final_destination');
            $table->dateTime('port_due_date');
            $table->dateTime('warehouse_due_date');
            $table->text('shipper_reference_number');
            $table->text('shipper_invoice_number');
            $table->text('shipping_invoice_value');
            $table->integer('number_items_in_container');
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
        Schema::dropIfExists('containers');
    }
}
