<?php
namespace Admin\Controller;
use Think\Controller;
class LayoutController extends Controller {
    public function topNav(){
        $this->display();
    }
    public function boxed(){
        $this->display();
    }
    public function fixed(){
        $this->display();
    }
}