<?php
namespace Page;

class Credentials
{
    // include url of current page
    public static $URL = '/';
    public static $EMAIL = 'automation-test@mailinator.com';
    public static $PASSWORD = 'Test1234';
    public static $FIRSTNAME = 'Automation';
    public static $LASTNAME = 'Tsv';
    public static $ADMIN = 'tsv_automation';
    public static $PHONE = '+380994276105';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
