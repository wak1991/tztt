<?php

namespace app\controllers\admin;


class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::findAll('posts');
        $this->setMeta('Админка', 'Описание админка', 'Ключевики админка');
        $this->set(compact('posts'));
    }

    public function deleteAction()
    {
        $id = $this->getRequestId();
        $post = \R::load('posts', $id);
        \R::trash($post);
        $_SESSION['success'] = 'Отзыв удалён';
        redirect(ADMIN);
    }

}