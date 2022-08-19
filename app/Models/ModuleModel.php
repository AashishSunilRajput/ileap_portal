<?php namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table = 'module_master';
    protected $primaryKey = 'module_id';
    protected $allowedFields = ['module_name','club_id','module_type'];
}