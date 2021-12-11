<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogFarmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_farms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('farm_id');
            $table->unsignedBigInteger('product_id');
            $table->text('thumbnail');
            $table->text('description');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->date('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_farm');
    }
}
