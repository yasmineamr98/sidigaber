<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_kitchen_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitchenTable extends Migration
{
    public function up()
    {
        Schema::create('kitchens', function (Blueprint $table) {
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
        Schema::dropIfExists('kitchens');
    }
}
