<?php

namespace app\controllers;

use app\models\Post;

class MainController extends AppController
{

    public function indexAction()
    {
        if ($_GET['id'] = 'date'){
            $posts = \R::findAll('posts', "ORDER BY date");
        }else{
            $posts = \R::findAll('posts', "ORDER BY name");
        }

        $this->setMeta('Главная страница', 'Описание', 'Ключевики');
        $this->set(compact('posts'));
    }

    public function signupAction()
    {
        if (!empty($_POST)){
            $post = new Post();
            $data = $_POST;
            $img = $_FILES['img']['name'];
            $data += ['img' => "$img"];
            $post->load($data);
            $post->save('posts');
            move_uploaded_file($_FILES["img"]["tmp_name"],
                'img/' . $_FILES["img"]["name"]);
            $_SESSION['success'] = 'Отзыв Добавлен';
            redirect();
        }
    }
}