<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateEvents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('events');
        $table->addColumn('type', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('date', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
