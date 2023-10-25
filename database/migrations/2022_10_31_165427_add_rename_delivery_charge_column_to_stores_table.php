<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRenameDeliveryChargeColumnToStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->double('minimum_shipping_charge', 16, 3, true)->default('0');
            $table->double('per_km_shipping_charge',16, 3, true)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->renameColumn('minimum_shipping_charge', 'delivery_charge');
            $table->dropColumn('per_km_shipping_charge');
        });
    }
}
