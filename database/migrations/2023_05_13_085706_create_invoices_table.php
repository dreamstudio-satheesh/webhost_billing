<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->timestamp('invoice_date');
            $table->timestamp('due_date');
            $table->decimal('total_amount', 8, 2);
            $table->decimal('paid_amount', 8, 2);
            $table->decimal('balance', 8, 2);
            $table->enum('status', ['paid', 'unpaid', 'partially_paid']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
