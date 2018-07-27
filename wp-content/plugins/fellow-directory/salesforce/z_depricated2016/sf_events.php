<?php

// disable WSDL caching
ini_set('soap.wsdl_cache_enabled', '0');
// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.com password
define('SOAP_CLIENT_BASEDIR', __DIR__ . '/soapclient');
require_once(SOAP_CLIENT_BASEDIR . '/SforceEnterpriseClient.php');
require_once(__DIR__ . '/sf_utils.php');

function get_salesforce_events($id = null, $limit = null)
{
    require(__DIR__ . '/userAuth.php');
    try {
        $mySforceConnection = new SforceEnterpriseClient();
        $mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR . '/enterprise.wsdl.xml');
        $mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);

        $yesterday = date('Y-m-d', time() - 86400);

        // GRA - Clean up the inputs
        $clean_id = get_clean_alphanum($id);
        $clean_limit = get_clean_integer($limit, 1000);

        if ($clean_id) {
            $query = "SELECT Id,Call_In_Number__c,All_Day_Event__c,Allow_Online_Registration__c,DLOG_Description__c,DLOG_EventName__c,DLOG_Event_Code__c,DLOG_Location_Map__c,Start_Date__c,Start_Hour__c,Start_Minute__c,Where__c,Email_Reminder_Subject__c,DLOG_URL__c,End_Date__c,End_Hour__c,End_Minute__c FROM DLOG_Event__c WHERE Id='$clean_id'";
        } elseif ($clean_limit) {
            $query = "SELECT Id,DLOG_Description__c,DLOG_EventName__c,Start_Hour__c,Start_Minute__c,Where__c,DLOG_URL__c,End_Date__c,End_Hour__c,End_Minute__c,Start_Date__c FROM DLOG_Event__c WHERE End_Date__c > $yesterday ORDER BY Start_Date__c DESC LIMIT $clean_limit";
        } else {
            $query = "SELECT Id,DLOG_Description__c,DLOG_EventName__c,Start_Date__c,Start_Hour__c,Start_Minute__c,Where__c,DLOG_URL__c,End_Date__c,End_Hour__c,End_Minute__c FROM DLOG_Event__c WHERE End_Date__c > $yesterday ORDER BY Start_Date__c DESC";
        }

        $response = $mySforceConnection->query($query);

        $mySforceConnection->logout();

        return array("error" => null, "result" => $response->records);
    } catch (Exception $e) {
        if ($mylogin) {
            $mySforceConnection->logout();
        }
        return array("error" => $e->getMessage(), "result" => null);
    }
}
