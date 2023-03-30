<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('duration');
            $table->text('link_media');
            $table->text('link_imdb');
            $table->text('picture');
            $table->text('description');
            $table->date('released_year');
            $table->text('director');
            $table->text('production');
            $table->text('trailer');
            $table->boolean('status');
            $table->integer('click')->default(0);


            //Foreign-keys
            //country
            $table->foreignId('country_id')
                ->constrained('Country')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //type-quality
            $table->foreignId('quality_id')
                ->constrained('TypeQuality')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //type-media
            $table->foreignId('type_id')
                ->constrained('Type')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('media');
    }
};
