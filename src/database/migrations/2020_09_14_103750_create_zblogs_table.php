<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zblogs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->string('link_name');
            $table->text('short_description');
            $table->text('body');
            
            $table->date('published_date');
            $table->date('display_date');

            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable(); 
            $table->timestamp('banner_status')->nullable();
            
            $table->string('parcel')->nullable(); 
            $table->string('slug')->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('has_deleted')->default(0);
            $table->boolean('has_cancelled')->default(0);
            $table->boolean('has_blocked')->default(0);
 
            $table->unsignedBigInteger('user_id')->default(0);
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
        Schema::dropIfExists('zblogs');
    }
}
