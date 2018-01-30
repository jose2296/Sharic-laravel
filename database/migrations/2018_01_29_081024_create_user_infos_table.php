<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('user_infos', function (Blueprint $table) {
			$table->increments('user_id')->unsigned();
			$table->string('info')->default(' ');
			$table->string('topSongs')->default(' ');
			$table->string('avatar')->default('http://lorempixel.com/300/300/people/?' . random_int(1, 1000));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('unse_rinfos', function (Blueprint $table) {

			$table->dropColumn('user_id');
			$table->dropColumn('topSongs');
			$table->dropColumn('avatar');
			$table->dropColumn('info');

		});
	}
}
