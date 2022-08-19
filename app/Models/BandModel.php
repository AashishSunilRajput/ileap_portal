<?php namespace App\Models;

use CodeIgniter\Model;

class BandModel extends Model
{
    protected $table = 'band_master';
    protected $primaryKey = 'band_id';
    protected $allowedFields = ['band_name','band_color','band_type'];
}