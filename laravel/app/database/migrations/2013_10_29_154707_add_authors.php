<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(

			"name"=>'Chris Moirano',
			'bio'=>'Chris is Cool',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')

			));
		DB::table('authors')->insert(array(

			"name"=>'Justin Kazemi',
			'bio'=>'Justin is cool',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')

			));

		DB::table('authors')->insert(array(

			"name"=>'Oliver Pugh',
			'bio'=>'sd is cool',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')

			));
		DB::table('authors')->insert(array(

			"name"=>'A Aaronson',
			'bio'=>'A.Aaronson is cool',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')

			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name', '=', 'Chris Moirano')->delete();	
		DB::table('authors')->where('name', '=', 'Justin Kazemi')->delete();
		DB::table('authors')->where('name', '=', 'A Aaronson')->delete();		
	}

}