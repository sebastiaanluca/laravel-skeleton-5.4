<?php

use Illuminate\Database\Schema\Blueprint;
use SebastiaanLuca\Migrations\TransactionalMigration;

class CreateUsersTable extends TransactionalMigration
{
    /**
     * Execute the migration.
     */
    protected function migrateUp()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     */
    protected function migrateDown()
    {
        $this->drop('users');
    }
}
