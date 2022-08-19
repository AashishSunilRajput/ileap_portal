<?php namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['member_firstname','member_lastname','parent_email','member_dob','member_address','member_age','member_center','member_allergy','member_password','status'];
}
