<?php

// include the SDK
require_once ("../src/isdk.php");

// build the application object
$app = new iSDK;

// prepare notification email
//$to = 'jeremy@creativesuccessalliance.com';
//$subject = 'Wealth Building Event - Facebook - Guest';
//$message = "=== Wealth Building Event - Facebook - Guest ===" . "\r\n\n" . "First Name: " . $_POST['ContactFirstName'] . "\r\n" . "Last Name: " . $_POST['ContactLastName'] . "\r\n" . "Email: " . $_POST['ContactEmail'] . "\r\n" . "Phone: " . $_POST['ContactPhone'] . "\r\n\n" . "Street Address: " . $_POST['ContactStreetAddress1'] . "\r\n" . "Street Address 2: " . $_POST['ContactStreetAddress2'] . "\r\n" . "City: " . $_POST['ContactCity'] . "\r\n" . "State: " . $_POST['ContactState'] . "\r\n" . "Postal Code: " . $_POST['ContactPostalCode'] . "\r\n" . "Country: " . $_POST['ContactCountry'] . "\r\n\n" . "Hotel: " . $_POST['ContactHotel'] . "\r\n\n" . "=== GUEST INFORMATION ===" . "\r\n\n" . "Guest Type: " . $_POST['GuestType'] . "\r\n" . "First Name: " . $_POST['GuestFirstName'] . "\r\n" . "Last Name: " . $_POST['GuestLastName'] . "\r\n" . "Email: " . $_POST['GuestEmail'] . "\r\n\n" . "Phone: " . $_POST['GuestPhone'] . "\r\n\n" . "Street Address: " . $_POST['GuestStreetAddress1'] . "\r\n" . "Street Address 2: " . $_POST['GuestStreetAddress2'] . "\r\n" . "City: " . $_POST['GuestCity'] . "\r\n" . "State: " . $_POST['GuestState'] . "\r\n" . "Postal Code: " . $_POST['GuestPostalCode'] . "\r\n" . "Country: " . $_POST['GuestCountry'] . "\r\n\n" . "Note: The guest contact information has already been added in Infusionsoft";
//$headers = 'From: support@creativesuccessalliance.com' . "\r\n" . 'Reply-To: support@creativesuccessalliance.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

// connect to the API
if ($app->cfgCon("contactform")) {

  // tag(s) to be applied on the primary contact
  $tag1 = 12022; // FL Sweeps January 2015 - Bringing A Guest

  // tag(s) to be applied on the guest contact
  $tag2 = 11974; // FL Sweeps January 2015 - Registered Guest
  $tag3 = 12002; // FL Sweeps January 2015 - Facebook Guest

  // grab the posted primary contact fields
  $contact = array(
    'Email' => $_POST['ContactEmail'],
    '_Guest' => $_POST['GuestFirstName'],
    '_GuestLastName' => $_POST['GuestLastName']
  );

  // grab the posted guest contact fields
  $guest = array(
    'Email' => $_POST['GuestEmail'],
    'FirstName' => $_POST['GuestFirstName'],
    'LastName' => $_POST['GuestLastName'],
    '_SessionDay' => $_POST['SessionDay'],
    '_SessionTime' => $_POST['SessionTime'],
    'LeadSourceId' => $_POST['LeadSourceId'],
    '_csalsid' => $_POST['csalsid'],
 	'_MarketingSource' => $_POST['MarketingSource'],
	'_SessionDay' => $_POST['inf_custom_SessionDay'],
	'_SessionTime' => $_POST['inf_custom_SessionTime'],
	'_EventDate0' => $_POST['inf_custom_EventDate0'],
	'_EventHotelName' => $_POST['inf_custom_EventHotelName'],
	'_EventHotelAddress' => $_POST['inf_custom_EventHotelAddress'],
	'_EventHotelCity' => $_POST['inf_custom_EventHotelCity'],
	'_googleMap' => $_POST['googleMap'],
	'_googleEmbed' => $_POST['googleEmbed']
  );

  // set thank you page URL
  $returnURL = 'http://multifamilyinvestors.org/thanks-guest.php?guestfirstname=' . $_POST['GuestFirstName'] . '&guestlastname=' . $_POST['GuestLastName'] . '&sessiontime=' . $_POST['SessionTime'] . '&inf_custom_EventHotelName=' . $_POST['inf_custom_EventHotelName'] . '&inf_custom_EventHotelAddress=' . $_POST['inf_custom_EventHotelAddress'] . '&inf_custom_EventHotelCity=' . $_POST['inf_custom_EventHotelCity'] . '&inf_custom_SessionDay=' . $_POST['inf_custom_SessionDay'];

  // send notification email
  mail($to, $subject, $message, $headers);

  // check to make sure primary email does not equal guest email
  if ($_POST['ContactEmail'] != $_POST['GuestEmail']) {

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

        // add tag(s) to guest contact record
        $app->grpAssign($guest_dups[0]['Id'], $tag2);
        $app->grpAssign($guest_dups[0]['Id'], $tag3);
      }
      else {

        // add new guest contact record
        $guestCon = $app->addCon($guest);

        // add tag(s) to guest contact record
        $app->grpAssign($guestCon, $tag2);
        $app->grpAssign($guestCon, $tag3);
      }

      // send to thank you page
      header('location: ' . $returnURL);
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