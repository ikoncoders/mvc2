<?php 
namespace app\controllers;

use app\core\Request;
use app\core\Response;
use app\models\Contact;
use app\core\Controller;
use app\core\Application;

class SiteController extends Controller
{ 
    public function home()
    { 
        $params = ['name'=>'ikoncoders'];
        return $this->render('home',$params);
    }
     

	  public function contact(Request $request, Response $response)
    {  
        $contact = new Contact();
        if($request->isPost()){
            $contact->loadData($request->getContent());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success','Thanks for Contacting Us');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact',['model' => $contact]);
    }

   
}