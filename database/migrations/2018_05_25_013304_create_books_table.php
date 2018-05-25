<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->date('publish_date');
            $table->string('author');
            $table->string('thumb')->nullable(true);
            $table->integer('number_of_pages')->default(0);
            $table->float('rating', 8, 1)->default(0);
            $table->integer('category_id');
            $table->tinyInteger('status')->default(config('settings.books.status.pending'));
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
        Schema::dropIfExists('books');
    }
}
