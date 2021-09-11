<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
  protected $table            = 'news';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $allowedFields    = ['title', 'author', 'content', 'status', 'slug'];

  public function getNews($slug = false)
  {
    if ($slug == FALSE) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
