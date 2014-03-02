<?php

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components=array( 'Auth','Session');
    
    
    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authenticate = array('Form');
      //  $this->Auth->actionPath = 'controllers';
        $this->Auth->allow('streetChooser','numChooser','showSchools');
        
      //  $this->Auth->allow('login');
        
        $this->Auth->loginAction = array('controller' => 'addresses', 'action' => 'streetChooser');
        $this->Auth->logoutRedirect = array('controller' => 'addresses', 'action' => 'streetChooser');
        $this->Auth->loginredirect = array('controller' => 'addresses', 'action' => 'streetChooser');
        $this->Auth->redirect = array('controller' => 'addresses', 'action' => 'index');
       
}
    
    
}
