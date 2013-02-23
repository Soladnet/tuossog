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
            $str = "Select uc.username1 as id,firstname, lastname,location,gender From user_personal_info, usercontacts as uc Where (username1 = user_personal_info.id AND username2 = $this->id) OR (username2 = user_personal_info.id AND username1 = $this->id) AND status ='$status' LIMIT $start,$limit";
            if ($result = $mysql->query($str)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $arrFetch['friends'][] = $row;
                    }
                    $arrFetch['status'] = TRUE;
                } else {
                    $arrFetch['status'] = FALSE;
                }
            } else {
                $arrFetch['status'] = FALSE;
            }
        }
        return $arrFetch;
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
            } else {
                $arrFetch['status'] = FALSE;
            }
        }
        return $arrFetch;
    }

    /**
     * 
     * @return Array This method counts the number of friends this user has. Array is with key 'count'
     * 
     * 
     */
//    public function getFriendCount() {
//        $mysql = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
//        $count = 0;
//        if ($mysql->connect_errno > 0) {
//            throw new Exception("Connection to server failed!");
//        } else {
//            $sql = "SELECT count(if(" . $this->id . "<>username1,username1,username2)) as count FROM usercontacts WHERE (username1=" . $this->id . " OR username2=" . $this->id . ") AND status='Y'";
//            if ($result = $mysql->query($sql)) {
//                if ($result->num_rows > 0) {
//                    $arr = $result->fetch_assoc();
//                    $count = $arr['count'];
//                }
//                $result->free();
//            }
//        }
//        $mysql->close();
//        return $count;
//    }

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
