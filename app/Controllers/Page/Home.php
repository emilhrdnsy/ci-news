<?php

namespace App\Controllers\Page;

use App\Controllers\BaseController;
use App\Models\FeedbackModel;

class Home extends BaseController
{

	protected $feedbackModel;
	public function __construct()
	{
		$this->feedbackModel = new FeedbackModel();
	}

	// ============================================================================================================

	public function index()
	{
		$data['meta'] = [
			'title' => 'Portal Berita Codeigniter 4',
			'header' => 'Portal Berita Codeigniter 4'
		];

		return view('pages/home', $data);
	}

	// ============================================================================================================

	public function about()
	{
		$data['meta'] = [
			'title' => 'About Berita Codeigniter 4',
			'header' => 'About Us'
		];

		return view('pages/about', $data);
	}

	// ============================================================================================================

	public function contact()
	{
		$data['meta']  = [
			'title' => 'Contact Us',
			'header' => 'Contact Us'
		];

		return view('pages/contact', $data);
	}

	// ============================================================================================================

	public function save_contact()
	{
		// $slug = url_title($this->request->getVar('title'), '-', true);
		$this->feedbackModel->save([
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'message' => $this->request->getVar('message')
		]);

		// session()->setFlashData('message', 'New Comic have been added.');

		return redirect()->to('pages/contact_thanks');
	}

	// ============================================================================================================

	public function contact_thanks()
	{
		$data['meta'] = [
			'title' => 'Contact Thanks',
			'header' => 'Thank You'
		];

		return view('pages/contact_thanks', $data);
	}

	// ============================================================================================================

	public function faqs()
	{
		$data['meta'] = [
			'title' => 'FAQs',
			'header' => 'FAQs'
		];

		$data['data_faqs'] = [
			[
				'question' => 'Apa itu Codeigniter?',
				'answer' => 'Codeigniter adalah framework untuk membuat web'
			],
			[
				'question' => 'Siapa yang membuat Codeiginter?',
				'answer' => 'CI awalnya dibuat oleh Ellislab'
			],
			[
				'question' => 'Codeigniter versi berapakah yang digunakan pada tutorial ini?',
				'answer' => 'Codeigniter versi 4.0.4'
			]
		];

		// load view dengan data
		echo view("pages/faqs", $data);
	}

	// ============================================================================================================


}
