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

    var $uid;
    var $id;

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
    public function userComm($start, $limit) {
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        $arr = array();
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $sql = "SELECT cs.`community_id` as id,c.`name`,c.description, cs.`emailNotif`, cs.`datejoined` FROM `community_subscribers` as cs JOIN community as c ON cs.community_id=c.id WHERE cs.`user`=$this->uid order by c.name asc LIMIT $start,$limit";
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

    /**
     * 
     * @param int start start position for pagination purpose
     * @param int limit limit of result fetch
     * @return Array An array with keys <strong>status</strong> and <strong>com_mem</strong> is returned. <strong>com_mem</strong> contains array of community members with the following keys: id, firstname, lastname, location, and gender while <strong>status</strong> holds the success status of the result i.e FALSE or TRUE
     * @throws Exception 
     */
    public function getMembers($start, $limit) {
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        $arr = array();
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $sql = "SELECT cs.user as id,p.firstname, p.lastname,p.location,p.gender FROM community_subscribers AS cs JOIN user_personal_info as p ON p.id=cs.`user` WHERE cs.community_id=$this->id order by p.firstname LIMIT $start,$limit";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arr['com_mem'][] = $row;
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

    /**
     * 
     * @param int newUid This id identifies the user to query
     */
    public function setUser($newUid) {
        $this->uid = $newUid;
    }

    /**
     * 
     * @return int The current user defined for this community object
     */
    public function getUser() {
        return $this->uid;
    }

    /**
     * 
     * @param int newId switch the current community id to newId
     */
    public function setCommunityId($newId) {
        $this->id = $newId;
    }

    public function suggest() {
        $response = array();
        $arr = array();
        include_once './GossoutUser.php';
        $user = new GossoutUser($this->getUser());
        $userF = $user->getFriends(0, 1000);
        if ($userF['status']) {
            $com = new Community();
            foreach ($userF['friends'] as $friend) {
                $com->setUser($friend['id']);
                $userComm = $com->userComm(0, 1000);
                foreach ($userComm['community_list'] as $mem) {
                    $arr[$mem['id']] = $mem;
                }
            }
            if (count($arr) > 0) {
                $response['status'] = TRUE;
            } else {
                $response['status'] = FALSE;
            }
        } else {
            $response['status'] = FALSE;
        }
        if ($response['status']) {
            $myComm = $this->userComm(0, 1000);
            foreach ($myComm['community_list'] as $item) {
                if (array_key_exists($item['id'], $arr)) {
                    unset($arr[$item['id']]);
                }
            }
            $response['suggest'] = array_values($arr);
            shuffle($response['suggest']);
        }
        return $response;
    }

    public function updateDescription($commId) {
        throw new Exception("Method not supported");
    }

    public function updateName($commName) {
        throw new Exception("Method not supported");
    }

    public function addMember($commId) {
        throw new Exception("Method not supported");
    }

    public function leave($commId) {
        throw new Exception("Method not supported");
    }

}

?>
