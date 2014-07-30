<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AliroRolesTable extends Migration {

	/**
	 * The table name for the migration
	 *
	 * @var string
	 */
	protected $table;

	public function __construct()
	{
		$this->table = Config::get('aliro::roles.table');
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
			$table->increments('id');
			$table->string('name')->unique();
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
		Schema::drop($this->table);
	}

}