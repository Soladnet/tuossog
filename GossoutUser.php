<?php

require_once 'Config.php';

class GossoutUser {

    var $id, $fname, $lname, $fullname, $location, $gender, $url, $tel, $email, $dob;

    /**
     * @author Soladnet Software
     * This class defined a Gossout user with the current supported properties and behaviour. All methods defined in this class that requires server connection implements their connection script
     * @param int $id
     */
    public function GossoutUser($id) {
        $this->id = $id;
    }

    /**
     * @return int The id of $this user is returned
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return String The first name of $this user is returned
     */
    public function getFirstname() {
        return $this->fname;
    }

    /**
     * @return String The last name of $this user is returned
     */
    public function getLastname() {
        return $this->lname;
    }

    /**
     * @return String The fullname of $this user is returned by calling getLastName() . " " . getFirstname(). " "
     */
    public function getFullname() {
        return $this->lname . " " . $this->fname . " ";
    }

    /**
     * @return String The location of $this user is returned
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @return String The gender of $this user is returned
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * @return String The url of $this user is returned
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @return String The Phone number of $this user is returned
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * @return String The email of $this user is returned
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @return String The date of birth of $this user is returned
     */
    public function getDOB() {
        return $this->dob;
    }

    /**
     * Get the profile of the current user if a valid user id was specified
     * @return Array An array containing $this user's profile information would be returned
     * @throws Exception is thrown when the connection to the server fails
     */
    function getProfile() {
        $arr = array();
        $response = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            // Make the variable a sql statement if the visitor is a registered and logged in user else make the variable hold the vlaue geust
            $sql = "SELECT * FROM `user_personal_info` WHERE id = " . $this->id;

            //the condition will return true. if the id is not zero, then run query and enter block else enter block
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    $arr = $result->fetch_assoc();
                    $response['user'] = $arr;
                    $this->fname = $arr['firstname'];
                    $this->lname = $arr['lastname'];
                    $this->gender = $arr['gender'];
                    $this->location = $arr['location'];
                    $this->url = $arr['url'];
                    $this->tel = $arr['phone'];
                    $this->email = $arr['email'];
                    $this->dob = $arr['dob'];
                    $response['status'] = true;
                } else {
                    $response['status'] = false;
                }
                $result->free();
            } else {
                $response['status'] = false;
            }
        }
        $mysql->close();
        return $response;
    }

    /**
     * 
     * @param int $start This specifies where the query starts from for pagination
     * @param int $limit This specifies the end of the result for pagination
     * @param String $status Either 'Y' or 'N' defualt is 'Y'
     * @return Array This method fetches this user's friends with fetch limit of 20
     * @throws Exception is thrown when the connection to the server fails
     */
    public function getFriends($start, $limit, $status = "Y") {
        $arrFetch = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        //$count = 0;
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $str = "Select if(uc.username1=$this->id,uc.username2,uc.username1) as id,firstname, lastname,location,gender From user_personal_info, usercontacts as uc Where (username1 = user_personal_info.id AND username2 = $this->id) OR (username2 = user_personal_info.id AND username1 = $this->id) AND status ='$status' LIMIT $start,$limit";
            if ($result = $mysql->query($str)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arrFetch['friends'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                $arrFetch['status'] = FALSE;
            }
        }
        $mysql->close();
        return $arrFetch;
    }

    public function suggestFriend() {
        $arrfetch = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        //$count = 0;
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $my = $this->getFriends(0, 1000);
            $arr = array();
            if ($my['status']) {
                foreach ($my['friends'] as $friend) {
                    $user = new GossoutUser($friend['id']);
                    $userFriend = $user->getFriends(0, 1000);
                    if ($userFriend['status']) {
                        foreach ($userFriend['friends'] as $userFrnd) {
                            $arr[$userFrnd['id']] = $userFrnd;
                        }
                    }
                }
                $arrfetch['status'] = TRUE;
            } else {
                $arrfetch['status'] = FALSE;
            }
            include_once './Community.php';
            $com = new Community();
            $com->setUser($this->id);
            $myCom = $com->userComm(0, 1000);
            if ($myCom['status']) {
                foreach ($myCom['community_list'] as $userComm) {
                    $com->setCommunityId($userComm['id']);
                    $comMem = $com->getMembers(0, 1000);
                    foreach ($comMem['com_mem'] as $mem) {
                        $arr[$mem['id']] = $mem;
                    }
                }
                $arrfetch['status'] = TRUE;
            } else {
                if (!$arrfetch['status']) {
                    $arrfetch['status'] = FALSE;
                }
            }
            if ($arrfetch['status']) {
                unset($arr[$this->id]);
                foreach ($my['friends'] as $friend) {
                    if (array_key_exists($friend['id'], $arr)) {
                        unset($arr[$friend['id']]);
                    }
                }
                $arrfetch['suggest'] = array_values($arr);
                shuffle($arrfetch['suggest']);
            }
        }

        return $arrfetch;
    }

    /**
     * 
     * @param int $start This specifies where the query starts from for pagination
     * @param int $limit This specifies the end of the result for pagination
     * @param String $status
     * @return Array
     * @throws Exception is thrown when the connection to the server fails
     */
    public function getMessages($start, $limit, $status) {
        $arrFetch = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $sql = "SELECT pm.`id`, pm.`sender_id`,u.firstname,u.lastname, pm.`message`, pm.`time`, pm.`status` FROM `privatemessae` as pm JOIN user_personal_info as u ON pm.sender_id=u.id WHERE pm.`receiver_id` = $this->id $status order by pm.id desc LIMIT $start,$limit";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arrFetch['message'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                $arrFetch['status'] = FALSE;
            }
        }
        $mysql->close();
        return $arrFetch;
    }

    /**
     * Fetches user’s gossbag combining post,comment, and tweak and wink
     * @return Array
     * @throws Exception is thrown when the connection to the server fails
     */
    public function getGossbag() {
        $arrFetch = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            //$sql = "SELECT p.`id`, p.`post`, p.`community_id`, p.`sender_id`,u.firstname,u.lastname, p.`time`, p.`status` FROM post as p JOIN `community_subscribers` as cs ON p.community_id=cs.community_id JOIN user_personal_info as u ON p.sender_id=u.id WHERE cs.user=$this->id AND p.sender_id<>$this->id order by p.time desc";
            $sql = "SELECT p.`id`, p.`post`, p.`community_id`, p.`sender_id`,u.firstname,u.lastname, p.`time`, p.`status` FROM post as p JOIN `community_subscribers` as cs ON p.community_id=cs.community_id JOIN user_personal_info as u ON p.sender_id=u.id JOIN usercontacts as uc ON (p.sender_id=uc.username1 AND uc.username2=$this->id) OR (p.sender_id=uc.username2 AND uc.username1=$this->id) AND uc.status='Y' WHERE cs.user=$this->id AND p.sender_id<>$this->id order by p.time desc";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $row['type'] = "post";
                        $arrFetch['bag'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                $arrFetch['status'] = FALSE;
            }

            $sql = "SELECT c.`id`, c.`comment`, c.`post_id`, c.`sender_id`,u.firstname,u.lastname, c.`time` FROM comments as c JOIN `post` as p ON c.post_id=p.id JOIN community_subscribers as cs ON cs.community_id=p.community_id JOIN user_personal_info as u ON c.sender_id=u.id JOIN usercontacts as uc ON (p.sender_id=uc.username1 AND uc.username2=$this->id) OR (p.sender_id=uc.username2 AND uc.username1=$this->id ) AND uc.status='Y' WHERE cs.user=$this->id AND c.sender_id<>$this->id order by c.time desc";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $row['type'] = "comment";
                        $arrFetch['bag'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    if (!$arrFetch['status'])
                        $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                if (!$arrFetch['status'])
                    $arrFetch['status'] = FALSE;
            }

            $sql = "SELECT t.`id`, t.`sender_id`,u.firstname,u.lastname, t.`type`, t.`time`, t.`status` FROM `tweakwink` as t JOIN user_personal_info as u ON t.sender_id=u.id  WHERE t.`receiver_id` =$this->id order by t.time desc";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $row['type'] = "TW";
                        $arrFetch['bag'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    if (!$arrFetch['status'])
                        $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                if (!$arrFetch['status'])
                    $arrFetch['status'] = FALSE;
            }
        }
        return $arrFetch;
    }

    public function getTimeline() {
        $arrFetch = array();
        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysql->connect_errno > 0) {
            throw new Exception("Connection to server failed!");
        } else {
            $sql = "SELECT p.`id`, p.`post`, p.`community_id`, p.`sender_id`,u.firstname,u.lastname, p.`time`, p.`status` FROM post as p JOIN `community_subscribers` as cs ON p.community_id=cs.community_id JOIN user_personal_info as u ON p.sender_id=u.id JOIN usercontacts as uc ON (p.sender_id=uc.username1 AND uc.username2=$this->id) OR (p.sender_id=uc.username2 AND uc.username1=$this->id) AND uc.status='Y' WHERE cs.user=$this->id AND p.sender_id<>$this->id order by p.time desc";
            if ($result = $mysql->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arrFetch['message'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    $arrFetch['status'] = FALSE;
                }
                $result->free();
            } else {
                $arrFetch['status'] = FALSE;
            }
        }
        $mysql->close();
        return $arrFetch;
    }

    /**
     * 
     * @param String $date The string date format from the database in the format yyyy-mm-dd
     * @param boolean $withYear specify whether the year should be displayed or not. DEAFULT value is 'FALSE'
     * @return String This returns the formated string in the form  13 January 2014
     */
    private function dateToString($date, $withYear = false) {
        $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $arr = explode('-', $date);
        if ($withYear) {
            $str = $arr[2] . " " . $month[$arr[1] - 1] . ", " . $arr[0];
        } else {
            $str = $arr[2] . " " . $month[$arr[1] - 1];
        }

        return $str;
    }

}

?>
