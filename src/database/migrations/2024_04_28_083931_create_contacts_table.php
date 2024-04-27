<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->tinyInteger('gender')->unsigned()->nullable();
            $table->string('email');
            $table->string('tel', 11);
            $table->string('address');
            $table->string('building')->nullable();
            $table->text('detail')->nullable();
            $table->timestamps();

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            // $table->bigInteger('category_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
