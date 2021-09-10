<?php

namespace App\Controllers\NewsAdmin;

use \App\Controllers\BaseController;
use \App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsAdmin extends BaseController
{
  protected $newsModel;
  public function __construct()
  {
    $this->newsModel = new NewsModel();
  }

  public function index()
  {

    $newses = $this->newsModel->findAll();

    $data = [
      'newses'  => $newses
    ];

    $data['meta'] = [
      'title'   => 'News',
      'header'  => 'News'
    ];
    return view('admin/admin_list_news', $data);
  }

  // --------------------------------------------------------------------------------------------------------

  public function preview($id)
  {
    $news = $this->newsModel->where('id', $id)->first();

    $data = [
      'news'  => $news
    ];
    // $data['news'] = $news->where('id', $id)->first();

    $data['meta'] = [
      'title'   => 'Preview Berita',
      'header'  => 'Preview Berita'
    ];

    if (!$data['news']) {
      throw PageNotFoundException::forPageNotFound('Berita Tidak Ada');
    }

    return view('pages/news_detail', $data);
  }

  //---------------------------------------------------------------------------------------------------------

  public function create()
  {

    // lakukan validasi
    // $validation =  \Config\Services::validation();
    // $validation->setRules(['title' => 'required']);
    // $isDataValid = $validation->withRequest($this->request)->run();

    // if ($isDataValid) {

    //   $news->insert([
    //     "title"   => $this->request->getPost('title'),
    //     "content" => $this->request->getPost('content'),
    //     "status"  => $this->request->getPost('status'),
    //     "slug"    => url_title($this->request->getPost('title'), '-', TRUE)
    //   ]);
    //   return redirect('admin/news');
    // }

    $data = [
      'validation' => \Config\Services::validation()
    ];




    // jika data valid, simpan ke d atabase

    // tampilkan form create
    return view('admin/admin_create_news', $data);
  }

  //---------------------------------------------------------------------------------------------------------

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'title' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'news {field} must be filled.'
        ]
      ]
    ])) {
      $validation = \Config\Services::validation();
      // dd($validation);
      return redirect()->to('/admin/news/new')->withInput()->with('validation', $validation);
    }

    $slug = url_title($this->request->getVar('title'), '-', TRUE);
    $this->newsModel->save([
      "title"   => $this->request->getVar('title'),
      "slug"   => $slug,
      "content" => $this->request->getVar('content'),
      "status"  => $this->request->getVar('status')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

    return redirect()->to('admin/news');
  }

  //---------------------------------------------------------------------------------------------------------

  public function edit($id)
  {
    // ambil artikel yang akan diedit
    // $news = new NewsModel();
    // $data['news'] = $news->where('id', $id)->first();

    // lakukan validasi data artikel
    // $validation =  \Config\Services::validation();
    // $validation->setRules([
    //   'id'    => 'required',
    //   'title' => 'required'
    // ]);
    // $isDataValid = $validation->withRequest($this->request)->run();

    $news = $this->newsModel->where('id', $id)->first();

    $data = [
      'news'  => $news
    ];

    // jika data vlid, maka simpan ke database
    // if ($isDataValid) {
    //   $news->update($id, [
    //     "title"   => $this->request->getPost('title'),
    //     "content" => $this->request->getPost('content'),
    //     "status"  => $this->request->getPost('status')
    //   ]);
    //   return redirect('admin/news');
    // }

    // tampilkan form edit
    return view('admin/admin_edit_news', $data);
  }

  //--------------------------------------------------------------------------

  public function delete($id)
  {
    $this->newsModel->delete($id);

    // redirect()->to('');
    return redirect('admin/news');
    // header("Location:" . base_url('admin/news'));
  }
}
