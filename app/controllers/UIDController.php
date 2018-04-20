<?php
namespace Controllers {
    class UIDController extends BaseController {
        public static function index() {
            $uid = str_replace('.','',uniqid(null, true));
            $userProfile = parent::getMapper($uid);
            $userProfile->vehicles = array();
            $userProfile->steps = array();
            $userProfile->options = (object)[];
            $userProfile->options->avoid_highways = false;
            $userProfile->options->automatic_speed = true;
            $userProfile->options->speed = null;
            $userProfile->options->driving_style = false;
            $userProfile->save();
            echo '{"uid": "',$uid,'" }';
        }

        public static function show($f3) {
            $uid = $f3->get("PARAMS.UID"); 
            $object = parent::getJson($uid);   
            echo $object;
        }
    }
}