<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AliroCredentialsTable extends Migration {

	/**
	 * The table name for the migration
	 *
	 * @var string
	 */
	protected $table;

	public function __construct()
	{
		$this->table = 'credentials';
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->table, function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->string('password');

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->unique('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop($this->table);
	}

}
