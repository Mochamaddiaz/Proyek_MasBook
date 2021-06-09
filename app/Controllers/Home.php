<?php

namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Beranda',
			'css' => 'halUtama.css'
		];
		return view('halamanUtama', $data);
	}

	public function event()
	{
		$data = [
			'title' => 'Event',
			'css' => 'halEvent.css'
		];
		return view('halamanEvent', $data);
	}

	public function tes()
	{
		$data = [
			'title' => 'tes',
			'css' => 'halRiwayatEvent.css'
		];
		return view('halamanRiwayatEvent', $data);
	}
}
