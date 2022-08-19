<?php namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table = 'session_master';
    protected $primaryKey = 'session_id';
    protected $allowedFields = ['session_title'];
}