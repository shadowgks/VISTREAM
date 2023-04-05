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
            $table->string('slug');
            $table->integer('duration');
            $table->text('link_media');
            $table->text('link_imdb')->nullable();
            $table->text('picture');
            $table->text('description');
            $table->date('released_year');
            $table->text('director')->nullable();
            $table->text('production')->nullable();
            $table->text('trailer')->nullable();
            $table->boolean('status');
            $table->integer('click')->default(0);
            $table->timestamps();

            //Foreign-keys
            //country
            $table->foreignId('country_id')
                ->constrained('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //type-quality
            $table->foreignId('quality_id')
                ->constrained('type_qualities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //type-media
            $table->foreignId('type_id')
                ->constrained('types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('media');
        Schema::enableForeignKeyConstraints();
    }
};
