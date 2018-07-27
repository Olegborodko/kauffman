<?php

// disable WSDL caching
ini_set('soap.wsdl_cache_enabled', '0');
// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.com password
define('SOAP_CLIENT_BASEDIR', __DIR__ . '/soapclient');
require_once(SOAP_CLIENT_BASEDIR . '/SforceEnterpriseClient.php');
require_once(__DIR__ . '/sf_utils.php');

function get_salesforce_fellows($fellow = null, $email = null)
{
    require(__DIR__ . '/userAuth.php');
    try {
        $mySforceConnection = new SforceEnterpriseClient();
        $mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR . '/enterprise.wsdl.xml');
        $mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);

        // GRA - Clean up the inputs
        $clean_fellow = get_clean_alphanum($fellow);
        $clean_email = get_clean_email($email);

        if ($clean_email && !$clean_fellow) {
            // LFP comment: If the person is logged in and looking at their own profile, get all the data
            $query = "SELECT Id,FirstName,LastName,Email,Bio_Fellowship__c,Bio_Professional__c,Bio_Education_Personal__c,Picture_URL__c,Region__c,Fellowship__c,AccountId,Company_Name__c,Company_Name_Draft__c,Category__c,KFP_Class__c,Phone,MobilePhone,Fax,Secondary_Email__c,MailingCity,MailingCountry,MailingPostalCode,MailingState,MailingStreet,HomePhone,Home_City__c,Home_Country__c,Home_Page_or_Blog__c,Home_Phone__c,Home_State__c,Home_Street__c,Home_Zip__c FROM Contact WHERE Email='$clean_email'";
        } elseif (!$clean_email && $clean_fellow) {
            // LFP comment: Otherwise just get their bio information
			// LFP added company name and job title to info below
            $query = "SELECT Id,Name,FirstName,Email,Company_Name__c,Title,Bio_Fellowship__c,Bio_Professional__c,Bio_Education_Personal__c,Picture_URL__c FROM Contact WHERE Name='$clean_fellow'";
        } else {
            // GRA - Query if *neither* email or fellow is given or if *both* are
            $query = "SELECT Id,Name,LastName,Region__c,Fellowship__c,AccountId,Company_Name__c,Category__c,KFP_Class__c,MailingCountry,MailingState,MailingCity,Bio_Fellowship__c,Bio_Professional__c,Bio_Education_Personal__c FROM Contact WHERE Category__c='Fellow' ORDER BY LastName";
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
