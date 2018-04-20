<?php

namespace Controllers {
    class BaseController {
        public static $db;
        public static function beforeRoute() {
            self::$db = new \DB\Jig('app/jig/', \DB\Jig::FORMAT_JSON);  
        }

        public static function getMapper($uid) {
            $mapper = new \DB\Jig\Mapper(self::$db, $uid);
            return $mapper->load();
        }

        public static function getJson($uid) {
            return json_encode(self::$db->read($uid));
        }
    }
}