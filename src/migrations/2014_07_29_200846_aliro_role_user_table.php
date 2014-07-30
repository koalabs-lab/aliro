<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AliroRoleUserTable extends Migration {

	/**
	 * The table names for the migration
	 *
	 * @var string
	 */
	protected $table;
	protected $users_table;
	protected $roles_table;

	public function __construct()
	{
		$this->table = Config::get('aliro::users.pivot_table');
		$this->users_table = Config::get('aliro::users.table');
		$this->roles_table = 'roles';
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
			$table->increments('id');
			$table->integer('role_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();

			$table->foreign('role_id')->references('id')->on($this->roles_table)->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on($this->users_table)->onDelete('cascade');

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
		Schema::drop('role_user');
	}

}
