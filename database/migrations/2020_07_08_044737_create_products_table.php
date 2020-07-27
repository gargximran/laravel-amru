<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('pruchase_id')->nullable();
            $table->string('pro_name');
            $table->string('slug');
            $table->integer('cat_id');
            $table->integer('sub_cat_id')->nullable();
            $table->string('supplier_id')->nullable();
            $table->float('pruchase_price')->nullable(); 
            $table->float('discount')->nullable();                       
            $table->float('price')->nullable();         
            $table->float('sell_price', 8, 2);
            $table->integer('qty')->nullable();
            $table->string('qty_type')->nullable();
            $table->text('images')->nullable();   
            $table->text('short_description')->nullable();        
            $table->text('description')->nullable();
            $table->integer('stk_status')->default(0);
            $table->string('pubstatus')->default('active');
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
