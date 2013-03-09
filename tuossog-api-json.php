<?php

if (isset($_GET['param'])) {
    if ($_GET['param'] == "user") {
        include_once './GossoutUser.php';
        if (isset($_GET['uid'])) {
            if (is_numeric($_GET['uid'])) {
                $user = new GossoutUser($_GET['uid']);
                $profile = $user->getProfile();
                if ($profile['status']) {
                    header('Content-type: application/json');
                    echo json_encode($profile['user']);
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "friends") {
        include_once './GossoutUser.php';
        if (isset($_GET['uid'])) {
            if (is_numeric($_GET['uid'])) {
                $user = new GossoutUser($_GET['uid']);
                $start = 0;
                $limit = 10;
                $status = "Y";
                if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                    $start = $_GET['start'];
                }
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }
                if (isset($_GET['status'])) {
                    $status = $_GET['status'] == "N" ? "N" : "Y";
                }

                $friends = $user->getFriends($start, $limit, $status);
                if ($friends['status']) {
                    header('Content-type: application/json');
                    echo json_encode($friends['friends']);
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "community") {
        include_once './Community.php';
        if (isset($_GET['uid'])) {
            if (is_numeric($_GET['uid'])) {
                $comm = new Community();
                $comm->setUser($_GET['uid']);
                $start = 0;
                $limit = 10;

                if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                    $start = $_GET['start'];
                }
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }

                $user_comm = $comm->userComm($start, $limit);
                if ($user_comm['status']) {
                    header('Content-type: application/json');
                    echo json_encode($user_comm['community_list']);
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else if (isset($_GET['m']) && is_numeric($_GET['m'])) {
            $comm = new Community();
            $comm->setUser($_GET['m']);

            $start = 0;
            $limit = 20;

            if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                $start = $_GET['start'];
            }
            if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                $limit = $_GET['limit'];
            }

            $com_mem = $comm->getMembers($start, $limit);
            if ($com_mem['status']) {
                header('Content-type: application/json');
                echo json_encode($com_mem['com_mem']);
            } else {
                displayError(404, "Not Found");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "messages") {
        include_once './GossoutUser.php';
        if (isset($_GET['uid'])) {
            if (is_numeric($_GET['uid'])) {
                $msg = new GossoutUser($_GET['uid']);
                $start = 0;
                $limit = 10;
                $status = "";
                if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                    $start = $_GET['start'];
                }
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }
                if (isset($_GET['status'])) {
                    $status = $_GET['status'] == "" ? "" : "AND status='" . clean($_GET['status']) . "'";
                }

                $user_msg = $msg->getMessages($start, $limit, $status);
                if ($user_msg['status']) {
                    header('Content-type: application/json');
                    echo json_encode($user_msg['message']);
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "gossbag") {
        include_once './GossoutUser.php';
        if (isset($_GET['uid'])) {
            if (is_numeric($_GET['uid'])) {
                $bag = new GossoutUser($_GET['uid']);
                $start = 0;
                $limit = 10;
                if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                    $start = $_GET['start'];
                }
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }

                $user_bag = $bag->getGossbag();
                if ($user_bag['status']) {
                    include_once("./sortArray_$.php");
                    $SMA = new SortMultiArray($user_bag['bag'], "time", 1);
                    $SortedArray = $SMA->GetSortedArray($start, $limit);
                    header('Content-type: application/json');
                    echo json_encode($SortedArray);
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "search") {
        include_once './Search.php';
        $search = new Search();
        if (isset($_GET['a'])) {
            $start = 0;
            $limit = 10;
            $opt = "both";
            $term = clean($_GET['a']);
            if (isset($_GET['start']) && is_numeric($_GET['start'])) {
                $start = $_GET['start'];
            }
            if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                $limit = $_GET['limit'];
            }
            if (isset($_GET['opt'])) {
                $opt = $_GET['opt'];
            }

            $response = $search->search($term, $start, $limit, $opt);
            if ($response['status']) {
                header('Content-type: application/json');
                echo json_encode($response);
            } else {
                displayError(404, "Not Found");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "sugfriend") {
        if (isset($_GET['uid'])) {
            include_once './GossoutUser.php';
            $limit = 3;
            if (is_numeric($_GET['uid'])) {
                $user = new GossoutUser($_GET['uid']);
                $sug = $user->suggestFriend();
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }
                if ($sug['status']) {
                    header('Content-type: application/json');
                    echo json_encode(array_slice($sug['suggest'], (count($sug['suggest']) - $limit)));
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else if ($_GET['param'] == "sugcomm") {
        if (isset($_GET['uid'])) {
            include_once './Community.php';
            $limit = 3;
            if (is_numeric($_GET['uid'])) {
                $com = new Community();
                $com->setUser($_GET['uid']);
                $sug = $com->suggest();
                if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
                    $limit = $_GET['limit'];
                }
                if ($sug['status']) {
                    header('Content-type: application/json');
                    echo json_encode(array_slice($sug['suggest'], (count($sug['suggest']) - $limit)));
                } else {
                    displayError(404, "Not Found");
                }
            } else {
                displayError(400, "The request cannot be fulfilled due to bad syntax");
            }
        } else {
            displayError(400, "The request cannot be fulfilled due to bad syntax");
        }
    } else {
        displayError(406, "The request is not acceptable");
    }
} else {
    displayError(400, "The request cannot be fulfilled due to bad syntax");
}

function displayError($code, $meesage) {
    $response_arr = array();
    $response_arr['error']['code'] = $code;
    $response_arr['error']['message'] = $meesage;
    header('Content-type: application/json');
    echo json_encode($response_arr);
}

function clean($value) {
    // If magic quotes not turned on add slashes.
    if (!get_magic_quotes_gpc()) {
        // Adds the slashes.
        $value = addslashes($value);
    }
    // Strip any tags from the value.
    $value = strip_tags($value);
    // Return the value out of the function.
    return $value;
}

?>