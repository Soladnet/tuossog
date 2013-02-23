<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Config.php';

/**
 * Description of Community
 *
 * @author user
 */
class Community {
    public function __construct() {
        
    }
    function create() {
        throw new Exception("Method not supported");
    }

    /**
     * @param int $userId This is the user's unique ID
     * @param int $start This specifies where the query starts from for pagination
     * @param int $limit This specifies the end of the result for pagination
     * @return Array An associative array is returned with the information for the user's community
     * 
     */
    function userComm($userId,$start,$limit) {
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        $arr = array();
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $sql = "SELECT cs.`community_id` as id,c.`name`,c.description, cs.`emailNotif`, cs.`datejoined` FROM `community_subscribers` as cs JOIN community as c ON cs.community_id=c.id WHERE cs.`user`=" . $userId . " order by c.name asc LIMIT $start,$limit";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arr['community_list'][] = $row;
                    }
                    $arr['status'] = true;
                } else {
                    $arr['status'] = false;
                }
                $result->free();
            } else {
                $arr['status'] = false;
            }
        }
        $mysql->close();
        return $arr;
    }

    function suggest($userId) {
        throw new Exception("Method not supported");
    }

    function updateDescription($commId) {
        throw new Exception("Method not supported");
    }

    function updateName($commName) {
        throw new Exception("Method not supported");
    }

    function addMember($commId, $userId) {
        throw new Exception("Method not supported");
    }

    function leave($commId, $userId) {
        throw new Exception("Method not supported");
    }

}

?>
