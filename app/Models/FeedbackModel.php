<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
  protected $table = 'feedback';
  protected $useTimestamps = true;
  protected $allowedFields = ['name', 'email', 'message'];
}
