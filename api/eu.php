<?php

// VATEU API Requests

function getAPI($cid){
    //Access the VATEUD API
    try {
        //Check if CID is empty
        if (empty($_SESSION['cid'])) {
            //CID not defined
            throw new \Exception('CID is not defined');
        }
        //Initialize variables
        $result = [];
        //Load the file
        if ($xml = simplexml_load_file($xml)) {
            foreach ($xml->member as $member) {
                if ($member->cid == $cid) {
                    //Set the data
                    $result = (array) $member;
                    apiData($result);
                    break;
                }
            }
        } else {
            //Couldn't load XML
            throw new \Exception('The website was unable to load the XML file, please try again later.');
        }
    
    } catch (Exception $e) {
        die($e->getMessage());
    }    
}

?>