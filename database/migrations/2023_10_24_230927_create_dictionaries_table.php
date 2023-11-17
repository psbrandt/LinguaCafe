<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionaries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->string('database_table_name', 256);
            $table->string('language', 256);
            $table->string('color', 256);
            $table->string('imported', 256)->default(true);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });

        DB::table('dictionaries')->insert([
            'name' => 'JMDict',
            'database_table_name' => 'dict_jp_jmdict',
            'language' => 'japanese',
            'color' => '#74E39A',
            'imported' => false,
            'enabled' => true
        ]);

        DB::table('dictionaries')->insert([
            'name' => 'DeepL JP',
            'database_table_name' => 'API',
            'language' => 'japanese',
            'color' => '#92B9E2',
            'imported' => false,
            'enabled' => true
        ]);

        DB::table('dictionaries')->insert([
            'name' => 'DeepL NO',
            'database_table_name' => 'API',
            'language' => 'norwegian',
            'color' => '#92B9E2',
            'imported' => false,
            'enabled' => true
        ]);

        DB::table('dictionaries')->insert([
            'name' => 'DeepL DE',
            'database_table_name' => 'API',
            'language' => 'german',
            'color' => '#92B9E2',
            'imported' => false,
            'enabled' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionaries');
    }
}