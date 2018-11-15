<?php

namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::findAll('posts');
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');
        $this->set(compact('posts'));
    }
}