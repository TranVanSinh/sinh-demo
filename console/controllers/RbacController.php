<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

       // add "Admin" permission
        $per_ad = $auth->createPermission('loginBackend');
        $per_ad->description = 'allow user have permission admin log in backend';
        $auth->add($per_ad);
        
       //Create role 'guest'
       $guest = $auth->createRole('guest');
       $auth->add($guest);

       //Create role 'authenticated'
       $authen = $auth->createRole('authenticated');
       $auth->add($authen);

       //Create role 'admin'
       $admin=$auth->createRole('admin');
       $auth->add($admin);
       $auth->addChild($admin, $per_ad);

       $auth->assign($authen, 2);
       $auth->assign($admin, 1);
    }
}
?>

  
