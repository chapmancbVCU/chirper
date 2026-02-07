<?php
namespace Database\Migrations;

use Core\DB;
use Core\Lib\Database\Schema;
use Core\Lib\Database\Blueprint;
use Core\Lib\Database\Migration;

/**
 * Migration class for the chirps table.
 */
class Migration1770423993 extends Migration {
    /**
     * Performs a migration for a new table.
     *
     * @return void
     */
    public function up(): void {
        Schema::create('chirps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->index('user_id');
            $table->timestamps();
            $table->string('message', 255);
        });

        $db = DB::getInstance();
        $fields = [
            'id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'message' => 'My first chirp'
        ];
        $db->insert('chirps', $fields);
    }

    /**
     * Undo a migration task.
     *
     * @return void
     */
    public function down(): void {
        Schema::dropIfExists('chirps');
    }
}