<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_raw_meat_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawMeatTable extends Migration
{
    public function up()
    {
        Schema::create('raw_meats', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->decimal('item_price', 8, 2);
            $table->string('item_picture');
            $table->text('review');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('raw_meats');
    }
}
