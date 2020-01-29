<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_code',15);
            $table->integer('store_id');
            $table->integer('worker_id');
            $table->string('buyer',25);
            $table->tinyInteger('paid_status')->comment('0:unpaid, 1:paid')->default(0);
            $table->decimal('total_amount');
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
        Schema::dropIfExists('store_invoices');
    }
}
