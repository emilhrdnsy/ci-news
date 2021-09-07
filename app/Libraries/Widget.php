<?php

namespace App\Libraries;

class Widget
{
  public function recentPost($param)
  {
    return view('widget/recent_post', $param);
  }
}
