<?php
  class Pages extends Controller {
    public function __construct(){
     
    }

    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
       $data=[
        'title'=>'welcome',
        'description' => 'this is a test description for our wenn site'
       ];
    	 $this->view('pages/index',$data);
      
    }

    public function about(){
      $data=[
        'title'=>'about',
        'description' => 'this is a test description for our wenn site'
        
       ];
      $this->view('pages/about',$data);
    }
  }