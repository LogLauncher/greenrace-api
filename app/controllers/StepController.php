<?php
namespace Controllers {
    class StepController {
        public static function index() {
            echo json_encode(json_decode('{"message": "Index Step"}'));
        }

        public static function setStep() {
            echo json_encode(json_decode('{"message": "Set Step"}'));
        }

        public static function removeMultiSteps() {
            echo json_encode(json_decode('{"message": "Remove Multi Step"}'));
        }

        public static function removeStep() {
            echo json_encode(json_decode('{"message": "Remove Step"}'));
        }
    } 
}