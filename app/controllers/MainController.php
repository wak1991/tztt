<?php

namespace app\controllers;

use app\models\Post;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::findAll('posts');
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');
        $this->set(compact('posts'));
    }

    public function signupAction()
    {
        if (!empty($_POST)){
            $post = new Post();
            $data = $_POST;
            $post->load($data);
            $post->save('posts');
            $_SESSION['success'] = 'Отзыв Добавлен';
            redirect();
        }
    }
}