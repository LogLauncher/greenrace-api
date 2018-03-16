<?php
namespace Controllers {
    class UIDController {
        public static function index() {
            echo json_encode(json_decode('{"message": "Index UID"}'));
        }

        public static function show() {
            echo json_encode(json_decode('{"message": "Show UID"}'));
        }
    } 
}