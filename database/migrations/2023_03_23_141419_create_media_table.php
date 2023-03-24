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
            $table->float('time');
            $table->text('poster_path');
            $table->text('picture');
            $table->text('description');
            $table->text('director');
            $table->text('production');
            $table->date('release_year');

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
