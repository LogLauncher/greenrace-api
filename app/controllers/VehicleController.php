<?php
namespace Controllers {
    class VehicleController {
        public static function index() {
            // echo '[{"firstname":"Jack","lastname":"Thumb","age":25},{"firstname":"Struan","lastname":"Forsyth","age":21}]';
            $response = \Web::instance()->request('http://www.jurassictest.ch/GR/api/vehicles', array('method' => 'GET'));
            echo $response['body'];
        }

        public static function show($f3) {
            $id = $f3->get('PARAMS.id');
            $response = \Web::instance()->request('http://www.jurassictest.ch/GR/api/vehicles', array('method' => 'GET'));
            $data = json_decode($response['body']);
            foreach ($data as $key => $value) {
                if ($value->id == $id) {
                    echo json_encode($value);
                    break;
                }
            }
        }

        public static function setVehicle() {
            echo json_encode(json_decode('{"message": "Set Vehicle"}'));
        }

        public static function removeMultiVehicles() {
            echo json_encode(json_decode('{"message": "Remove Multi Vehicles"}'));
        }

        public static function removeVehicle() {
            echo json_encode(json_decode('{"message": "Remove Vehicle"}'));
        }
    }
}
