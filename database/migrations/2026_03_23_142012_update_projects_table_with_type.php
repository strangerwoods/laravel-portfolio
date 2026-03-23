<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::table('projects', function (Blueprint $table) {
			if (Schema::hasColumn('projects', 'type')) {
				$table->dropColumn('type');
			}

			$table->foreignId('type_id')->default(1)->constrained();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('projects', function (Blueprint $table) {
			$table->dropForeign(['type_id']);
			$table->dropColumn('type_id');
			$table->string('type')->nullable();
		});
	}
};
