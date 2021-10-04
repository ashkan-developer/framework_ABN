<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class User extends Model
{

    use HasSoftDelete;

    protected $table = "";
    protected $fillable = [];
    protected $deletedAt = '';

}