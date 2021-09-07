<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Feedback extends BaseController
{
  public function index()
  {
    return view('admin/feedback');
  }
}
