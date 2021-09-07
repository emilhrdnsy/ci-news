<?php

namespace App\Controllers\News;

use App\Controllers\BaseController;

class News extends BaseController
{
  public function index()
  {
    $data['meta'] = [
      'title' => 'Portal Berita Codeigniter 4',
      'header' => 'Portal Berita Codeigniter 4',
    ];

    return view('pages/news', $data);
  }

  //----------------------------------------------------

}
