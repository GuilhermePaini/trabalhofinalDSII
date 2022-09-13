<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        //    cria objeto do model
        $model = model(NewsModel::class);

        //    chama getNews
        $news = $model->getNews();

        //    cria array com os dados para mostrar na tela
        $data = [
            "news" => $news
        ];
        // print_r($data); die();

        return view('header') .
            view('home', $data).
            view('footer');
    }

    public function view($slug = false)
    {
        $model = model(NewsModel::class);

        $news = $model->getNews($slug);

        $data = [
            "news" => $news
        ];

        return view('view', $data);
    }

    public function createNews()
    {

        $model = model(NewsModel::class);

        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            // 'slug' => $this->request->getPost('slug'),
            'body' => $this->request->getPost('body'),
        ];

        $model->save($data);

        return redirect()->to('/');
    }
}
