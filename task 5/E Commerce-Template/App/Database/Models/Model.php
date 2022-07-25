<?php
// ثابتة ف بورثها
namespace App\Database\Models;

use App\Database\Config\Connection;

class Model extends Connection
{
    const TABLE = '';
    public function all()
    {
        $query = "SELECT * FROM" . static::TABLE;
    }
    public function find(int $id)
    {
        $query = "SELECT * FROM" . static::TABLE;
    }
}
