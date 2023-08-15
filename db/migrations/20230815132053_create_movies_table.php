<?php

use Phinx\Migration\AbstractMigration;

class CreateMoviesTable extends AbstractMigration
{
    public function change()
    {
        $movies = $this->table('movies');
        $movies->addColumn('name', 'text')
            ->addColumn('year', 'text')
            ->addColumn('director', 'text')
            ->addColumn('summary', 'text')
            ->create();
    }
}