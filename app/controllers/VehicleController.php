<?php
namespace Controllers {
    class VehicleController extends BaseController {
        public static function index() {
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

        public static function setVehicle($f3) {
            $uid = $f3->get('PARAMS.UID');
            $vehicleID = (int)$f3->get('PARAMS.id');
            $mapper = parent::getMapper($uid);
            $vehicles = $mapper->vehicles;
            if (!in_array($vehicleID, $vehicles)){
                array_push($vehicles, $vehicleID);
                $mapper->vehicles = $vehicles;    
                $mapper->save();
            }
        }

        public static function removeMultiVehicles($f3) {
            $uid = $f3->get('PARAMS.UID');
            $mapper = parent::getMapper($uid);
            $mapper->vehicles = array();
            $mapper->save();
        }

        public static function removeVehicle($f3) {
            $uid = $f3->get('PARAMS.UID');
            $vehicleID = (int)$f3->get('PARAMS.id');
            $mapper = parent::getMapper($uid);
            $vehicles = $mapper->vehicles;
            $key = array_search($vehicleID, $vehicles);
            if ($key !== false) {
                unset($vehicles[$key]);
                $mapper->vehicles = $vehicles;    
                $mapper->save();
            }
        }
    }
}
