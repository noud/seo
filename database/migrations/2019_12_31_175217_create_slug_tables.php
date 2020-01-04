<?php

use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlugTables extends Migration
{
    private $models = [
        'BlogPosting',
        'JobPosting',
    ];
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->models as $model) {
            $className = "App\\Models\\".$model;
            $tableName = (new $className())->getTable();
            // add slug
            Schema::table($tableName, function (Blueprint $table) {
                $table->string('slug')->nullable()->after('updated_at');
            });
            // fill slug
            $tupels = $className::all();
            foreach ($tupels as $tupel) {
                $tupel->slug = $tupel->generateSlug();
                $tupel->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach ($this->models as $model) {
            $tableName = (new $className())->getTable();
            // drop slug
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }
    }
}
