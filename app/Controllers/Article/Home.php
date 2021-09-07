<?php

namespace App\Controllers\Article;

use \App\Controllers\BaseController;
use \App\Models\ArticleModel;

class Home extends BaseController
{
  protected $articleModel;
  public function __construct()
  {
    $this->articleModel = new ArticleModel();
  }

  public function index()
  {
    $article = $this->articleModel->findAll();

    $data = [
      'article' => $article,
      'title' => 'Article List'
    ];

    $data['meta'] = [
      'title' => 'Article List',
      'header' => 'Article List'
    ];

    if (count($data['article']) > 0) {
      return view('articles/list_article', $data);
    } else {
      return view('articles/empty_article.php');
    }
  }

  public function show($id)
  {
    // @TODO: get article from model

    $data = [
      'article' => $this->articleModel->where(['id' => $id])->first()
    ];

    $data['meta'] = [
      'title' => 'Read Article',
      'header' => 'Page to Read Article'
    ];

    return view('articles/show_article.php', $data);
  }

  public function empty()
  {
    $data['meta'] = [
      'title' => 'Article List',
      'header' => 'No One Article'
    ];

    return view('articles/empty_article.php', $data);
  }

  public function contact()
  {
    $data['meta'] = [
      'title' => 'Contact Us',
      'header' => 'Contact Us'
    ];

    return view('articles/contact', $data);
  }
}
