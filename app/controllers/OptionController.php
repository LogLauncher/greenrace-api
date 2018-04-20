<?php
namespace Controllers {
    class OptionController {
        public static function index() {
            echo json_encode(json_decode('{"message": "Index Options"}'));
        }

        public static function setOptions() {
            echo json_encode(json_decode('{"message": "Set Options"}'));
        }

        public static function resetOptions() {
            echo json_encode(json_decode('{"message": "Reset Option"}'));
        }
    } 
}