<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $user = [];

    public function __construct($user = [])
    {
        $this->user = $user;
    }

    public function contem($user)
    {
        return in_array($user, $this->user);
    }
}
