<?php

namespace App\Controllers\News;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
  public function index()
  {
    // buat object model $news
    $news = new NewsModel();

    /*
      siapkan data untuk dikirim ke view dengan nama $newses
      dan isi datanya dengan news yang sudah terbit
    */
    $data['newses'] = $news->where('status', 'published')->findAll();

    $data['meta'] = [
      'title'   => 'News',
      'header'  => 'News'
    ];

    return view('pages/news', $data);
  }

  //----------------------------------------------------

  public function viewNews($slug)
  {
    $news = new NewsModel();
    $data['news'] = $news->where([
      'slug'    => $slug,
      'status'  => 'published'
    ])->first();

    $data['meta'] = [
      'title'   => 'Detail Berita',
      'header'  => 'Detail Berita'
    ];

    // tampilkan 404 error jika data tidak ditemukan
    if (!$data['news']) {
      throw PageNotFoundException::forPageNotFound();
    }

    return view('pages/news_detail', $data);
  }
}
