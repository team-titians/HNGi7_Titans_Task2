<?php
/**
 * @author mwabo
 * @package
 */
class IntroduceMe {
	
	/**
     * @param String $fullName the name of the intern
     * @param String $hngID the HNG ID of the intern
     * @param String $email the email address of the intern
     * @param String $languageName  - default PHP
     * @return void
     *
     */
	public function __construct($fullName, $hngID, $email, $languageName = "PHP"){
		
		echo "Hello World, this is ".$fullName.
        " with HNGi7 ID ".$hngID.
        " and email ".$email.
		" using ".$languageName.
		" for stage 2 task";
	}
}
//Let's greet the community
$helloFromTeamTitans = new IntroduceMe("Marcellin Wabo", "HNG-03103", "marcellin.wabo@gmail.com");
