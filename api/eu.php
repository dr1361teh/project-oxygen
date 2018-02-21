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
        //Initialize the variables
        $result = [];
        //Load the file
        if ($xml = simplexml_load_file($xml)) {
            foreach ($xml->member as $member) {
                if ($member->cid == $cid) {
                    //Sets the data
                    $result = (array) $member;
                    apiData($result);
                    break;
                }
            }
            debug('XML VATSIM Europe API with FRA was loaded successfully');
            xlog('XML API was loaded');
        } else {
            //Couldn't load XML
            throw new \Exception('The website was unable to load the XML file, please try again later.');
            xlog('Unable to load API XML file, cannot continue...');
        }
    
    } catch (Exception $e) {
        die($e->getMessage());
    }    
}

function apiData($data){
    //Sets the API data
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $atcr = $data['humanized-atc-rating'];
    $pilotr = $data['humanized-pilot-rating'];
}

?>