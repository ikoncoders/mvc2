<?php 

namespace app\controllers;

use app\models\User;
use app\core\Request;
use app\models\Login;
use app\core\Response;
use app\core\Controller;
use app\core\Application;
use app\middlewares\AuthMiddleware;


class AuthController extends Controller
{
   public function __construct()
   {
    $this->registerMiddleware(new AuthMiddleware(['profile']));
    // $this->registerMiddleware(new AuthMiddleware());
   }
   
    public function login(Request $request, Response $response)
    {   
        $login = new Login();
        if($request->isPost()){
            $login->loadData($request->getContent());
            if($login->validate() && $login->login()){
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('guest');
        return $this->render('login', ['model'=>$login]);
    }

   
    public function register(Request $request)
    {   
        $user = new User();
        if($request->isPost()){            
            $user->loadData($request->getContent());
        
                if($user->validate() && $user->save()){ 
                    Application::$app->session->setFlash('success','User registered Successfully');
                    Application::$app->response->redirect('/');
                }
               
                return $this->render('register',['model'=> $user]);
        }
        $this->setLayout('guest');
        return $this->render('register',['model'=> $user]);
        
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    } 

    public function profile()
    {  
        
        return $this->render('profile');
    }
}