<?php

// include the SDK
require_once ("../../third-party/infusion/isdk.php");

// build the application object
$app = new iSDK;

//prepare email to be sent
$to  = 'todd@creativesuccessalliance.com' . ', ';
$to .= 'debbie@creativesuccessalliance.com' . ', ';
$to .= 'patemery@creativesuccessalliance.com';
$subject = 'Sweeps Facebook Guest Registration';
$message = "=== Primary Contact Information ===" . "\r\n\n" .
           "First Name: " . $_POST['PrimaryFirstName'] . "\r\n" .
           "Last Name: " . $_POST['PrimaryLastName'] . "\r\n" .
           "Email: " . $_POST['PrimaryEmail'] . "\r\n\n" .
           "=== Guest Information ===" . "\r\n\n" .
           "First Name: " . $_POST['GuestFirstName'] . "\r\n" .
           "Last Name: " . $_POST['GuestLastName'] . "\r\n" .
           "Email: " . $_POST['GuestEmail'] . "\r\n\n" .
           "=== Event Information ===" . "\r\n\n" .
           "Event Date: " . $_POST['EventDate'] . "\r\n" .
           "Session Time: " . $_POST['SessionTime'] . "\r\n\n" .

$headers = 'From: support@creativesuccessalliance.com' . "\r\n" .
    'Reply-To: support@creativesuccessalliance.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// connect to the API
if ($app->cfgCon("contactform")) {

  // tag(s) to be applied on the primary contact
  $tag1 = 12112; // Sweeps -> Bringing A Guest

  // grab the posted primary contact fields
  $contact = array(
    'Email' => $_POST['PrimaryEmail'],
    '_Guest' => $_POST['GuestFirstName'],
    '_GuestLastName' => $_POST['GuestLastName']
  );

  // grab the posted guest contact fields
  $guest = array(
    'Email' => $_POST['GuestEmail'],
    'FirstName' => $_POST['GuestFirstName'],
    'LastName' => $_POST['GuestLastName'],
    'LeadSourceId' => $_POST['LeadSourceId'],
    '_csalsid' => $_POST['inf_custom_csalsid'],
 	  '_MarketingSource' => $_POST['MarketingSource'],
	  '_SessionDay' => $_POST['SessionDay'],
  	'_SessionTime' => $_POST['SessionTime'],
    '_RegTime' => $_POST['RegTime'],
	  '_EventDate0' => $_POST['EventDate'],
	  '_EventHotelName' => $_POST['EventHotelName'],
	  '_EventHotelAddress' => $_POST['EventHotelAddress'],
	  '_EventHotelCity' => $_POST['EventHotelCity'],
    '_EventHotelState' => $_POST['EventHotelState'],
    '_EventHotelZip' => $_POST['EventHotelZip'],
    '_VenuePicture' => $_POST['VenuePicture']
  );

  // set thank you page URL - only need seesion day/time to trigger other variables
  $returnURL = 'http://multifamilyinvestors.org/philadelphia/thanks-guest.php?GuestFirstName=' . $_POST['GuestFirstName'] . '&GuestLastName=' . $_POST['GuestLastName'] . '&SessionDay=' . $_POST['SessionDay'] . '&SessionTime=' . $_POST['SessionTime'] . '&RegTime=' . $_POST['RegTime'];

  // check to make sure primary email does not equal guest email
  if ($_POST['PrimaryEmail'] != $_POST['GuestEmail']) {

    // duplicate check on primary email if it exists
    if (!empty($contact['Email'])) {

      // check for existing contact;
      $returnFields = array('Id');
      $dups = $app->findByEmail($contact['Email'], $returnFields);
      
      if (!empty($dups)) {
        
        // update primary contact record
        $app->updateCon($dups[0]['Id'], $contact);
        
        // add tag(s) to primary contact record
        $app->grpAssign($dups[0]['Id'], $tag1);
      }
      else {

        // add new primary contact record
        $newCon = $app->addCon($contact);

        // add tag(s) to primary contact record
        $app->grpAssign($newCon, $tag1);
      }
    }
    else {

      // display error getting primary email address
      die('There was an error loading your email address.');
    }

    // dup check on guest email if it exists
    if (!empty($guest['Email'])) {

      // check for existing contact;
      $guest_returnFields = array('Id');
      $guest_dups = $app->findByEmail($guest['Email'], $guest_returnFields);
      if (!empty($guest_dups)) {

        // update guest contact record
        $app->updateCon($guest_dups[0]['Id'], $guest);

        // call the achieveGoal method
        $app->achieveGoal('m160', 'FacebookGuestRegistration', $guest_dups[0]['Id']);
      }
      else {

        // add new guest contact record
        $guestCon = $app->addCon($guest);

        // call the achieveGoal method
        $app->achieveGoal('m160', 'FacebookGuestRegistration', $guestCon);
      }

      // send to thank you page
      header('location: ' . $returnURL);

      //send notification email with contact and guest information
      mail($to, $subject, $message, $headers);
    }
    else {

      // display error if guest email is missing
      die('You must provide the guest email address.');
    }
  }
  else {

    // display error if primary email is the same as the guest email
    die('The guest email address can not be the same as your email address!');
  }
}
else {
  echo "Connection Error";
}

?>