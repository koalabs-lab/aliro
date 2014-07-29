<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AliroUsersTable extends Migration {

	/**
	 * The table name for the migration
	 *
	 * @var string
	 */
	protected $table;

	public function __construct()
	{
		$this->table = Config::get('aliro::users.table');
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->table, function($table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('email');
			$table->boolean('activated')->default(0);
			$table->string('firstname')->nullable();
			$table->string('lastname')->nullable();
			$table->timestamps();

			$table->unique('email');
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
