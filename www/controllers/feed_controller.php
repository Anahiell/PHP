<?php

include_once "controller_base.php";


class FeedController extends BaseController {
   
    public function do_get(){
        $this->view_data['title'].='Feed Page';
       $this->goto_view();
    }

}