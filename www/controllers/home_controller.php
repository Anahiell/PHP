<?php

include_once "controller_base.php";


class HomeController extends BaseController {
   
    public function do_get(){
        $this->view_data['title'].='Home Page';
       $this->goto_view();
    }

}