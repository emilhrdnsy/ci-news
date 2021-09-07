<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
  protected $table = 'article';
  protected $useTimestamps = true;
  protected $allowedFields = ['title', 'slug', 'content', 'draft', 'created_at'];
}
