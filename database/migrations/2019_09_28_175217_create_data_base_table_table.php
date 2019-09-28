<?php

use App\Models\DataBaseTable;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBaseTableTable extends Migration
{
    /**
     * https://github.com/zedisdog/laravel-schema-extend
     * 
     * look for extras in
     * https://github.com/rafis/schema-extended
     */
    private $dataBaseTableComments = [
        [
            'table' => 'entry_point',
            'comment' => 'An entry point, within some Web-based protocol.',
        ],
        [
            'table' => 'organization',
            'comment' => 'An organization such as a school, NGO, corporation, club, etc.',
        ],    
        [
            'table' => 'person',
            'comment' => 'A person (alive, dead, undead, or fictional).',
        ],
        [
            'table' => 'search_action',
            'comment' => 'The act of searching for an object.',
        ],    
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_base_table', function (Blueprint $table) {
            $table->bigIncrements('id')->unique()->index();
            $table->string('name');
            $table->text('comment');
            $table->timestamps();
        });
        foreach ($this->dataBaseTableComments as $key => $dataBaseTableComment) {
            DataBaseTable::create([$dataBaseTableComment['table'], $dataBaseTableComment['comment']]);
            Schema::update($this->dataBaseTableComment['table'], function (Blueprint $table) {
                $table->comment = $this->dataBaseTableComments[$key]['comment'];
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_base_table');
    }
}
