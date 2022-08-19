<?php namespace App\Models;

use CodeIgniter\Model;

class MembersnewModel extends Model
{
    protected $table = 'members_master';
    protected $primaryKey = 'member_id';
    protected $allowedFields = ['member_first_name','member_last_name','member_date_of_birth','grade','home_phone_number','cell_phone_number','email_for_parent','email_for_child','address','gender','food_allergies','special_needs_required','family_members_in_the_program','how_they_heard_about_us','referral'];
}
