<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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

	/**
	 * @access public
	 * @var array
	 */
	public $helpers = array('Html');

	/**
	 * Example Layout
	 *
	 * @access public
	 * @var string
	 */
	public $layout = 'example';

	/**
	 * Set the javascriptModule value
	 *
	 * @access public
	 * @return void
	 */
	public function beforeFilter() {
		if (!$this->javascriptModule){
			$this->javascriptModule = Inflector::underscore($this->name);
		}
	}

	/**
	 * Set the javascriptModule in the view
	 *
	 * @access public
	 * @return void
	 */
	public function beforeRender(){
		$this->set(array('javascriptModule' => $this->javascriptModule));
	}
}