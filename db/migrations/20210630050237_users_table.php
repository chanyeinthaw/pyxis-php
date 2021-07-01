<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersTable extends AbstractMigration
{
    // Phinx migration docs
    public function up() {
        $table = $this->table('users');
        $table->addColumn('name', 'string');        
        $table->create();
    }

    public function down() {
        $this->table('users')->drop();
    }
}
