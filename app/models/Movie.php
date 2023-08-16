<?php
declare(strict_types=1);

namespace App\Model;

class Movie
{
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
}