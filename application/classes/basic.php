<?php defined('SYSPATH') or die('No direct script access.');

class Basic extends Controller_Template {
    
        public $template = 'v_basic';
        
        protected $auth;
        protected $user;
        protected $session;

	public function before() {
            parent::before();
            
            $this->auth = Auth::instance();
            $this->user = $this->auth->get_user();
            $this->session = Session::instance();
            
            //Описание страницы
            $this->template->site_description = 'Морской бой';
            $this->template->title = NULL;
            
            //Подключаем стили и скрипты
            $this->template->style = array('media/css/basic.css');
            $this->template->scripts = array('');
            
            //Подключаем блоки
            $this->template->left_bloks = NULL;
            $this->template->center_blocks = NULL;
            $this->template->right_blocks = NULL;
        }

} 
