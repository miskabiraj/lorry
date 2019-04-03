<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLorriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lorries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transport_name')->nullable();
            $table->string('vendor_type')->nullable();
            $table->string('name')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('vechile_number')->nullable();
            $table->string('vechile_type')->nullable();
            $table->string('lifted_company')->nullable();
            $table->string('suplier_name')->nullable();
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
        Schema::dropIfExists('lorries');
    }
}
