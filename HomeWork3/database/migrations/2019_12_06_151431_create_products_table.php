<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(); 
            $table->string('code')->nullable();
            $table->integer('product_type_id')->nullable();      
            $table->integer('product_status_id')->nullable();           
            $table->integer('zone_id')->nullable();      
            $table->integer('shape_id')->nullable(); 
            $table->double('rent_price', 12, 2)->nullable();           
            $table->double('sale_price', 12, 2)->nullable();      
            $table->double('list_price', 12, 2)->nullable();       
            $table->double('sold_price', 12, 2)->nullable();       
            $table->integer('created_by')->nullable(); 
            $table->integer('updated_by')->nullable(); 
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
        Schema::dropIfExists('products');
    }
}
