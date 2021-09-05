<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_no');
            $table->longText('asset_desc');
            $table->tinyinteger('type');/* Type of Asset : (1)-assets are capitalized | (2)-assets are not capitalized */
            $table->integer('ordered');/* Ordered quantity */
            $table->integer('received');/* Received quantity */
            $table->integer('rejected');/* Rejected quantity */
            $table->decimal('surplus');/* Surplus quantity */
            $table->decimal('shortage');/* Shortage quantity */
            $table->float('price');
            $table->longText('rejection_note')->nullable();;
            $table->longText('note');
            $table->string('delivery_note_ref_no');
            $table->timestamps();
            
        });

        Schema::create('assets_acceptance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_no');
            $table->longText('name');
            $table->longText('address');
            $table->tinyinteger('type');/* Delivery Method (1)-Air | (2)-Train | (3)-Truckload | (4)-LTL | (5)-Ocean */
            $table->longText('transport_info');
            $table->string('delivery_note_ref_no');
            $table->string('document_ref_no');
            $table->boolean('receiving_officer_sign')->default(0);
            $table->boolean('technical_officer_sign')->default(0);
            $table->timestamps();
            
        });

        Schema::create('assets_rejection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_no');
            $table->longText('name');
            $table->longText('address');
            $table->longText('transport_info');
            $table->tinyinteger('rejection_type');/* Type of Rejection (1)-Amount rejected | (2)-Amount shortage | (3)-Amount surplus */
            $table->string('delivery_note_ref_no');
            $table->string('document_ref_no');
            $table->string('assets_acceptance_ref_no');
            $table->timestamps();
            
        });

        Schema::create('delivery_note', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_no');
            $table->string('order_ref_no');
            $table->tinyinteger('delivery_method');/* Delivery Method (1)-Air | (2)-Train | (3)-Truckload | (4)-LTL | (5)-Ocean */
            $table->longText('note')->nullable();;
            $table->timestamp('order_date')->nullable();
            $table->timestamp('despatch_date')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
