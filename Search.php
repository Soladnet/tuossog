<?php

require_once 'Config.php';

class Search {

    var $term;
    var $result;

    public function __construct() {
        
    }

    public function search($term, $start, $limit, $opt = "both") {
        $response = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $arr = explode(' ', $term);
            if ($opt == "people" || $opt == "both") {
                $searchCombination = "";
                if (count($arr) == 1) {
                    $searchCombination = "`firstname` LIKE '%$arr[0]%' OR `lastname` LIKE '%$arr[0]%' OR email = '$arr[0]'";
                } else if (count($arr) > 1) {
                    $merg = "";
                    for ($i = 1; $i < count($arr); $i++) {
                        if ($i > 1) {
                            $merg.=" ";
                        }
                        $merg.=$arr[$i];
                    }
                    $arr = array($arr[0], $merg);
                    //first combination
                    $searchCombination = "((`firstname` = '$arr[0]' OR `firstname` = '$arr[1]') AND (`lastname` = '$arr[1]' OR `lastname` = '$arr[0]') OR email = '$term')";
                }
                $sql = "SELECT id,firstname,lastname,location,gender FROM `user_personal_info` WHERE $searchCombination Limit $start,$limit";
                if ($result = $mysql->query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $response['people'][] = $row;
                        }
                        $response['status'] = true;
                    } else {
                        $response['status'] = false;
                    }
                    $result->free();
                } else {
                    $response['status'] = false;
                }
            }else{
                $response['status'] = false;
            }
            if ($opt == "community" || $opt == "both") {
                $sqlCommunity = "SELECT `id`, `name`, `category`, `description` FROM `community` WHERE `name` LIKE '%$term%' Limit $start,$limit";
                if ($result = $mysql->query($sqlCommunity)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $response['community'][] = $row;
                        }
                        $response['status'] = true;
                    } else {
                        if (!$response['status'])
                            $response['status'] = false;
                    }
                    $result->free();
                } else {
                    if (!$response['status'])
                        $response['status'] = false;
                }
            }else{
                if (!$response['status'])
                        $response['status'] = false;
            }
        }
        $mysql->close();
        return $response;
    }

}

?>
