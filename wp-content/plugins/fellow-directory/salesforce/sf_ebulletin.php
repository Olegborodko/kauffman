<?php

// disable WSDL caching
ini_set('soap.wsdl_cache_enabled', '0');
// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.com password
define('SOAP_CLIENT_BASEDIR', __DIR__ . '/soapclient');
require_once(SOAP_CLIENT_BASEDIR . '/SforceEnterpriseClient.php');
require_once(__DIR__ . '/sf_utils.php');

function get_salesforce_news($id = null, $category = null, $limit = null)
{
    require(__DIR__ . '/userAuth.php');
    try {
        $mySforceConnection = new SforceEnterpriseClient();
        $mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR . '/enterprise.wsdl.xml');
        $mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);

        // GRA - Clean up the inputs
        $clean_id = get_clean_alphanum($id);
        $clean_category = get_clean_alphanum($category);
        $clean_limit = get_clean_integer($limit, 1000);

        if ($clean_id && !$clean_category) {
            $query = "SELECT Id,Body__c,Category__c,Title__c,StartDate__c,Sub_Title__c FROM Content__c WHERE Id='$clean_id'";
        } elseif ($clean_limit && !$clean_category) {
            $query = "SELECT Id,Body__c,Category__c,Title__c,StartDate__c,Sub_Title__c FROM Content__c ORDER BY StartDate__c DESC LIMIT $clean_limit";
        // LFP added Category__c = ebulletin to each SELECT below, since ebulletin has its own page now
        } elseif (!$clean_limit && $clean_category) {
            $query = "SELECT Id,Body__c,Category__c,Title__c,StartDate__c,Sub_Title__c FROM Content__c WHERE Category__c = '$clean_category' AND Category__c = 'eBulletin' ORDER BY StartDate__c DESC";
        } elseif ($clean_limit && $clean_category) {
            $query = "SELECT Id,Body__c,Category__c,Title__c,StartDate__c,Sub_Title__c FROM Content__c WHERE Category__c = '$clean_category' AND Category__c = 'eBulletin' ORDER BY StartDate__c DESC LIMIT $clean_limit";
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
