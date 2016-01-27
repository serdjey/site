<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {

    public function action_index() {

        $this->action_login();
    }
    
     public function action_login() {
       $rheitapps = RheitAppsUser::factory();
       $this->response->body($rheitapps->login($_POST));
    }
    
    public function action_logout() {
        $rheitapps = RheitAppsUser::factory();
        $rheitapps->logout("/");
    }

    public function action_register() {

         $rheitapps = RheitAppsUser::factory();
         $this->response->body($rheitapps->register($_POST));

    }
    
    public function action_restoreemail() {
     
         $rheitapps = RheitAppsUser::factory();
         $this->response->body($rheitapps->restoreemail($_POST));
    }
    
     public function action_restorereg() {
     
         $rheitapps = RheitAppsUser::factory();
         $this->response->body($rheitapps->restorereg($_POST));
    }

}
