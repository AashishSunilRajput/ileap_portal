<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_master';
    protected $primaryKey = 'admin_id';
    protected $allowedFields = ['admin_name','admin_email','admin_password'];
}