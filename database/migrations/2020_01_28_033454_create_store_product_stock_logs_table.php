<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProductStockLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_product_stock_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_code');
            $table->integer('product_id');
            $table->integer('qty');
            $table->decimal('purchase_price');
            $table->decimal('selling_price');
            $table->decimal('subtotal');
            $table->text('info');
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
        Schema::dropIfExists('store_product_stock_logs');
    }
}
