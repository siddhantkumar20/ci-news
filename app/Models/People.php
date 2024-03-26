<?php

namespace App\Models;

use CodeIgniter\Model;

class People extends Model
{
    protected $table            = 'people';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields    = [
        'name','email','address', 'phone', 'password'
    ];
}
