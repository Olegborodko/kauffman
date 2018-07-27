<?php

// disable WSDL caching
ini_set('soap.wsdl_cache_enabled', '0');
// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.com password
define('SOAP_CLIENT_BASEDIR', __DIR__ . '/soapclient');
require_once(SOAP_CLIENT_BASEDIR . '/SforceEnterpriseClient.php');
require_once(__DIR__ . '/sf_utils.php');

function get_salesforce_finalists($fellow = null)
{
    require(__DIR__ . '/userAuth.php');
    try {
        $mySforceConnection = new SforceEnterpriseClient();
        $mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR . '/enterprise.wsdl.xml');
        $mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);

        // GRA - Clean up the input
        $clean_fellow = get_clean_alphanum($fellow);

        if ($clean_fellow) {
            $query = "SELECT Id,Name,FirstName,Email,Bio_Fellowship__c,Bio_Professional__c,Bio_Education_Personal__c,Picture_URL__c FROM Contact WHERE Name='$clean_fellow'";
        } else {
			// LFP updated line below to replace Company_Name__c with Industry_Focus__c
            $query = "SELECT Id,LastName,Name,Region__c,AccountId,Industry_Focus__c,Category__c,Title,KFP_Class__c,Bio_Fellowship__c,Bio_Professional__c,Bio_Education_Personal__c FROM Contact WHERE Title LIKE 'Finalist 20%' ORDER BY LastName";
        }

        $response = $mySforceConnection->query($query);
        $records = $response->records;
        $done = false;
        while (!$done) {
            if ($response->done != true) {
                $response = $mySforceConnection->queryMore($response->queryLocator);
                $records = array_merge($records, $response->records);
            } else {
                $done = true;
            }
        }

        $mySforceConnection->logout();

        return array("error" => null, "result" => $records);
    } catch (Exception $e) {
        if ($mylogin) {
            $mySforceConnection->logout();
        }
        return array("error" => $e->getMessage(), "result" => null);
    }
}
