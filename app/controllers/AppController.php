<?php
/**
 * Created by PhpStorm.
 * User: WAK
 * Date: 04.11.2018
 * Time: 19:47
 */

namespace app\controllers;


use app\models\AppModel;
use ishop\App;
use ishop\base\Controller;
use ishop\Cache;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}