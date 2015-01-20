<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 */

	public function up() {
		Schema::create('posts', function ($table) {
			$table->increments('id');
			$table->string('title', 150);
			$table->text('body');
			$table->string('preview', 300);
			$table->string('author', 100);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */

	public function down() {
		Schema::drop();
	}

}
