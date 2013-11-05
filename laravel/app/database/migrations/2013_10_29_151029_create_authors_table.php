<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('authors', function($table){ // creating the table authors
               
                $table->increments('id'); // create auto incrament num row called ID
                $table->string('name'); // creating a varchar row called 'name'
                $table->text('bio');
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
		Schema::drop('authors');
	}

}