<?php
    class NetworkController extends BaseController {
            
        //return whole resource
        public function index()
        {
            $networks = Network::all();
            return View::make("app.index")->with("networks",$networks);
        }    

        //return form for creating new content
        public function create_form()
        {
            return View::make("app.create");
        }

        //return form for editing content
        public function edit_form()
        {
            return View::make("app.edit");
        }

        //edit content
        public function edit()
        {
            $input = Input::all();
            $network = new Network;
            $network->_id = "52733912a3e4852b01b7acd9";
            $network->uid = $input["uid"];
            $network["networks"] = [
                [
                    "nid" => $input["home_network_id"],
                    "n_name" => $input["home_network_name"],
                    "n_ip" => $input["home_network_ip_address"],
                    "n_status" => $input["home_network_status"]
                ],
                [
                    "nid" => $input["work_network_id"],
                    "n_name" => $input["work_network_name"],
                    "n_ip" => $input["work_network_ip_address"],
                    "n_status" => $input["work_network_status"]
                ],
            
            ];
            $network["hostnames"] = [
                [
                    "hostname1" => $input["hostname1"],
                    "block1" => $input["block1"]
                ],
                [
                    "hostname2" => $input["hostname2"],
                    "block2" => $input["block2"]
                ],
                [
                    "hostname3" => $input["hostname3"],
                    "block3" => $input["block3"]
                ]
            ];
            $network->save();
            return Redirect::to("/");
        }

        //save dataset to db
        public function save()
        {
            $input = Input::all();
            $network = new Network;
            $network->_id = "52733912a3e4852b01b7acd9";
            $network->uid = $input["uid"];
            $network["networks"] = [
                [
                    "nid" => $input["home_network_id"],
                    "n_name" => $input["home_network_name"],
                    "n_ip" => $input["home_network_ip_address"],
                    "status" => $input["home_network_status"]
                ],
                [
                    "nid" => $input["work_network_id"],
                    "n_name" => $input["work_network_name"],
                    "n_ip" => $input["work_network_ip_address"],
                    "n_status" => $input["work_network_status"]
                ]            
            ];
            $network["hostnames"] = [
                [
                    "hostname1" => $input["hostname1"],
                    "block1" => $input["block1"]
                ],
                [
                    "hostname2" => $input["hostname2"],
                    "block2" => $input["block2"]
                ],
                [
                    "hostname3" => $input["hostname3"],
                    "block3" => $input["block3"]
                ]
            ];
            $network->save();
            return $network->all();            
        }

        //delete document  with given id from collection
        public function destroy()
        {
            $input = Input::all();
            $network = Network::first($input["_id"]);
            $network->delete();
            return Redirect::to("/");
        }
    }
