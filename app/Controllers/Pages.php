<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Lgridsaffan'
    ];
    return view('pages/home', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About Me'
    ];
    return view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'Contact',
      'alamat' => [
        [
          'tipe' => 'rumah',
          'alamat' => 'Jl. Citarum no. 33',
          'kota' => 'Probolinggo'
        ],
        [
          'tipe' => 'kantor',
          'alamat' => 'Jl. Suyoso no. 45',
          'kota' => 'Probolinggo'
        ]
      ]

    ];
    return view('pages/contact', $data);
  }
}
