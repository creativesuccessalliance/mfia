<?php
// 3 payment plan
if ($plan == '3pay') {

    //set payment schedule
    $second_payment = new DateTime();
    $second_payment->modify("+30 day");
    $third_payment = new DateTime();
    $third_payment->modify("+60 day");

//infusionsoft price inputs
    $payment_plan = <<<EOD
    <input type="radio" class="radio" name="PurchaseType" value="B" checked> <a href="#what-you-get" data-toggle="modal" data-target="#what-you-get-ahr"><strong class="text-danger">Home Study Course & Live Event</a></strong> <strong>- $515.00 charged today, then again on {$second_payment->format("M j")} and {$third_payment->format("M j")}.</strong>
    <br><em class="small">Includes <strong>FREE</strong> UPS Ground Shipping!</em>
    <input id="ProductId" name="ProductId" value="1459" type="hidden" />
    <input id="PayTotal_B" name="PayTotal_B" value="1545.0" type="hidden" />
    <input id="PlanCount_B" name="PlanCount_B" value="3" type="hidden" />
EOD;
    
    //order button
    $order_btn = 'themes/mf/img/btn-order-now-1545.gif';

}

//default to 1 payment
else {

    $payment_plan = <<<EOD
    <input type="radio" class="radio" name="PurchaseType" value="A" checked> <a href="#what-you-get" data-toggle="modal" data-target="#what-you-get-ahr"><strong class="text-danger">Home Study Course & Live Event</a></strong> <strong>- only $1,495</strong>
    <br><em class="small">Includes <strong>FREE</strong> UPS Ground Shipping!</em>
    <input id="ProductId" name="ProductId" value="1459" type="hidden" />
    <input value="1495.0" id="PayTotal_A" type="hidden" name="PayTotal_A" />
    <input value="1" id="PlanCount_A" type="hidden" name="PlanCount_A" />
EOD;
    
    $order_btn = 'themes/mf/img/btn-order-now-1495.gif';
}
?>

<?php include('themes/mf/header.php');?>

<div class="container form">
    <div class="row">
        <div class="col-md-7">
            <a href="#productModal" data-toggle="modal" data-target="#what-you-get-ahr"><img src="themes/mf/img/ahr/productbundle.png" class="img-responsive img-center" style="margin-top: 20px"></a>
            <p class="alert alert-warning timer-container"><i class="fa fa-exclamation-triangle"></i> You have <span id="timer">15:00</span> to lock in this special offer.</p>
            <form id="orderForm" name="orderForm" role="form" action="https://m160.infusionsoft.com/AddForms/processFormSecure.jsp" method="post" data-parsley-validate>
                <input id="infusion_xid" name="infusion_xid" value="062cb4b3541d094903b7ced0704c4a08" type="hidden" />
                <input id="infusion_type" name="infusion_type" value="CustomFormSale" type="hidden" />
                <input id="infusion_name" name="infusion_name" value="[GCP] Apartment House Riches Webinar" type="hidden" />
                <input type="hidden" name="CAttempt" id="CAttempt" />
                <input id="Contact0_csalsid" type="hidden" name="Contact0_csalsid" value="<?php echo $_COOKIE['CSAlsid'];?>" />
                <input type="hidden" name="Contact0LeadSourceId" value="<?php echo $lsid;?>">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Step 1: Contact Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="Contact0FirstName">First Name</label>
                                <input id="Contact0FirstName" name="Contact0FirstName" type="text" value="<?php echo $_GET['inf_field_FirstName'];?>" class="form-control" placeholder="First Name" data-parsley-trigger="change" required>
                            </div>
                            <div class="form-group">
                                <label for="Contact0LastName">Last Name</label>
                                <input id="Contact0LastName" name="Contact0LastName" type="text" value="<?php echo $_GET['inf_field_LastName'];?>" class="form-control" placeholder="Last Name" data-parsley-trigger="change" required>
                            </div>
                            <div class="form-group">
                                <label for="Contact0Email">Email</label>
                                <input id="Contact0Email" name="Contact0Email" type="email" value="<?php echo $_GET['inf_field_Email'];?>" class="form-control" placeholder="Email" data-parsley-trigger="change" required>
                            </div>
                            <div class="form-group">
                                <label for="Contact0Phone1">Phone</label>
                                <input id="Contact0Phone1" name="Contact0Phone1" type="tel" value="<?php echo $_GET['inf_field_Phone1'];?>" class="form-control" placeholder="Phone" data-parsley-trigger="change" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary" style="margin-top: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Step 2: Billing Address</h3></div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="Contact0StreetAddress1">Street Address 1</label>
                                <input id="Contact0StreetAddress1" name="Contact0StreetAddress1" type="text" class="form-control" placeholder="Street Address 1" data-parsley-trigger="change" required>
                            </div>
                            <div class="form-group">
                                <label for="Contact0StreetAddress2">Street Address 2</label>
                                <input id="Contact0StreetAddress2" name="Contact0StreetAddress2" type="text" class="form-control" placeholder="Street Address 2" data-parsley-trigger="change" data-parsley-required="false">
                            </div>
                            <div class="form-group">
                                <label for="Contact0City">City</label>
                                <input id="Contact0City" name="Contact0City" type="text" class="form-control" placeholder="City" data-parsley-trigger="change" required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="Contact0State">State/Province</label>
                                        <input id="Contact0State" name="Contact0State" type="text" class="form-control" maxlength="2" placeholder="e.g. MA" data-parsley-trigger="change" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="Contact0PostalCode">Postal Code</label>
                                        <input id="Contact0PostalCode" name="Contact0PostalCode" type="text" class="form-control" placeholder="Postal Code" data-parsley-trigger="change" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Contact0Country">Country</label>
                                <select id="Contact0Country" name="Contact0Country" class="form-control" data-parsley-trigger="change" data-parsley-errors-messages-disabled required>
                                    <option value="">Please select a country...</option>
                                    <option value="United States">United States</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="&Aring;land Islands">Åland Islands</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="C&ocirc;te D'Ivoire">Côte D'Ivoire</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Republic of Macedonia">Republic of Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="R&eacute;union">Réunion</option>
                                    <option value="St. Barth&eacute;lemy">St. Barthélemy</option>
                                    <option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option>
                                    <option value="St. Kitts And Nevis">St. Kitts And Nevis</option>
                                    <option value="St. Lucia">St. Lucia</option>
                                    <option value="St. Martin">St. Martin</option>
                                    <option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option>
                                    <option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Step 3: Shipping Address</h3></div>
                    <div id="billing-panel" class="panel-body" style="padding-bottom: 0">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <p>Is your shipping address the same?
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="radio-billing" id="radio-yes" value="yes" checked> Yes
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="radio-billing" id="radio-no" value="no"> No
                                            </label>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="billing-address" class="col-md-10">
                            <div class="form-group">
                                <label for="Contact0Address2Street1">Street Address 1</label>
                                <input name="Contact0Address2Street1" type="text" id="Contact0Address2Street1" size="35" class="form-control" placeholder="Street Address 1" data-parsley-trigger="change" data-parsley-required="false">
                            </div>
                            <div class="form-group">
                                <label for="Contact0Address2Street2">Street Address 2</label>
                                <input name="Contact0Address2Street2" type="text" id="Contact0Address2Street2" size="35" class="form-control" placeholder="Street Address 2" data-parsley-trigger="change" data-parsley-required="false">
                            </div>
                            <div class="form-group">
                                <label for="Contact0City2">City</label>
                                <input name="Contact0City2" type="text" id="Contact0City" value='' id="Contact0City2" size="25" class="form-control" placeholder="City" data-parsley-trigger="change" data-parsley-required="false">
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="Contact0State2">State/Province</label>
                                        <input id="Contact0State2" name="Contact0State2" type="text" class="form-control" maxlength="2" placeholder="e.g. MA" data-parsley-trigger="change" data-parsley-required="false">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="Contact0PostalCode2">Postal Code</label>
                                        <input id="Contact0PostalCode2" name="Contact0PostalCode2" type="text" class="form-control" placeholder="Postal Code" data-parsley-trigger="change" data-parsley-required="false">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Contact0Country2">Country</label>
                                <select id="Contact0Country2" name="Contact0Country2" class="form-control" data-parsley-trigger="change" data-parsley-required="false">
                                    <option value="">Please select a country...</option>
                                    <option value="United States">United States</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="&Aring;land Islands">Åland Islands</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="C&ocirc;te D'Ivoire">Côte D'Ivoire</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Republic of Macedonia">Republic of Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="R&eacute;union">Réunion</option>
                                    <option value="St. Barth&eacute;lemy">St. Barthélemy</option>
                                    <option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option>
                                    <option value="St. Kitts And Nevis">St. Kitts And Nevis</option>
                                    <option value="St. Lucia">St. Lucia</option>
                                    <option value="St. Martin">St. Martin</option>
                                    <option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option>
                                    <option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Step 4: Choose Event Date/Location</h3>
                    </div>
                    <div class="panel-body">
                        <span id="eventdate-error"></span>
                        <div class="radio">
                            <label>
                                <input value="04/2015 Philadelphia" type="radio" name="Contact0_EventDateLocation" data-parsley-multiple="eventdate" data-parsley-error-message="Please choose an event below." data-parsley-errors-container="#eventdate-error" required> <strong><em>April 24 – 26, 2015</em></strong> – Philadelphia, PA
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input value="05/2015 San Francisco" type="radio" name="Contact0_EventDateLocation" data-parsley-multiple="eventdate"> <strong><em>May 15 – 17, 2015</em></strong> – San Francisco, CA
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input value="06/2015 Chicago" type="radio" name="Contact0_EventDateLocation" data-parsley-multiple="eventdate"> <strong><em>June 12 – 14, 2015</em></strong> – Chicago, IL
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input value="07/2015 Boston" type="radio" name="Contact0_EventDateLocation" data-parsley-multiple="eventdate"> <strong><em>July 17 – 19, 2015</em></strong> – Boston, MA
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input value="TBD" type="radio" name="Contact0_EventDateLocation" data-parsley-multiple="eventdate"> <strong><em>I'll choose my event at a later time...</em></strong>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Step 5: Payment Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-warning">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="themes/mf/img/security-lock.png" alt="Security is Our Top Concern" class="img-responsive img-center">
                                </div>
                                <div class="col-md-9">
                                    <p><strong>Security is Our Top Priority!</strong></p>
                                    <p class="small">This website utilizes some of the most advanced techniques to protect your information and personal data including technical, administrative and even physical safeguards against unauthorized access, misuse and improper disclosure.</p>
                                </div>
                            </div>
                        </div>
                        <div id="cc-type" class="form-group">
                            <label for="CreditCard0CardType">Card Type
                                <a href="#cc-type" data-select="Visa"><img src="themes/mf/img/cc-visa.png" alt="Visa"></a>
                                <a href="#cc-type" data-select="Master Card"><img src="themes/mf/img/cc-mastercard.png" alt="Master Card"></a>
                                <a href="#cc-type" data-select="American Express"><img src="themes/mf/img/cc-amex.png" alt="American Express"></a>
                                <a href="#cc-type" data-select="Discover"><img src="themes/mf/img/cc-discover.png" alt="Discover"></a>
                            </label>
                            <select id="CreditCard0CardType" name="CreditCard0CardType" class="form-control" data-parsley-trigger="change" data-parsley-errors-messages-disabled required>
                                <option value="">Please select a card type...</option>
                                <option value="Visa">Visa</option>
                                <option value="Master Card">Master Card</option>
                                <option value="American Express">American Express</option>
                                <option value="Discover">Discover</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="CreditCard0CardNumber">Card Number</label>
                            <input id="CreditCard0CardNumber" name="CreditCard0CardNumber" type="text" maxlength="16" autocomplete="off" class="form-control" placeholder="Credit Card Number" data-parsley-trigger="change" data-parsley-type="digits" data-parsley-error-message="Please enter a valid credit card." required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-5">
                                    <label for="CreditCard0ExpirationMonth">Expiration Month</label>
                                    <select id="CreditCard0ExpirationMonth" name="CreditCard0ExpirationMonth" class="form-control" data-parsley-trigger="change" data-parsley-errors-messages-disabled required>
                                        <option value="">Select a month...</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col-xs-5">
                                    <label for="CreditCard0ExpirationYear">Expiration Year</label>
                                    <select id="CreditCard0ExpirationYear" name="CreditCard0ExpirationYear" class="form-control" data-parsley-trigger="change" data-parsley-errors-messages-disabled required>
                                        <option value="">Select a year...</option>
                                        <?php
                                            $year = date("Y");
                                            $final_year = $year + 16;
                                            for ($i = $year; $i <= $final_year; $i++) {
                                        ?>
                                        <option value="<?php  echo $i; ?>"><?php  echo $i; ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <!-- (c) 2005, 2014. Authorize.Net is a registered trademark of CyberSource Corporation -->
                                    <div class="AuthorizeNetSeal" style="width: auto !important">
                                        <script type="text/javascript" language="javascript">
                                        var ANS_customer_id = "284c81ba-0dc8-4fe2-8ee6-361c5f007413";
                                        </script>
                                        <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="CreditCard0VerificationCode">CVC</label>
                                    <input id="CreditCard0VerificationCode" name="CreditCard0VerificationCode" type="text" class="form-control" placeholder="CVC" data-parsley-trigger="change" required>
                                    <a href="#cvc" data-toggle="modal" data-target="#cvc"><small>What is this?</small></a>
                                </div>
                            </div>
                        </div>
                        <div class="radio" style="margin-bottom: 0; line-height: 1">
                            <label>
                                <?php echo $payment_plan ?>
                            </label>
                        </div>
                        <!-- order button -->
                        <p class="text-center">
                            <input id="Order" name="Order" value="Order Now" type="image" src="<?php echo $order_btn ?>" class="img-center" style="margin-top: 15px">
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <!-- begin sidebar -->
        <div class="col-md-5">
            <p><img src="themes/mf/img/ahr/logo.png" class="img-responsive" style="margin-top: 20px;"></p>
            <p>The complete system is an <strong>information-packed 143-page manual</strong>, with <strong>10 audio CDs</strong>. Together, they explain exactly how I went from owning nothing but a rusty snowplow, and working 60 hours a week in my day job, to <strong>creating $9,700 in monthly spendable cash flow</strong> in twelve months.</p>
            <p>This <strong>step-by-step guide</strong> makes it "connect-the-dots" simple for you to do the same. <strong>You won't make the same mistakes I did.</strong> You keep <strong>more money in your pocket,</strong> because you'll go into each deal knowing exactl where the hidden profits (& pitfalls) are.</p>
            <hr>
            <h3>Just a few of the things you will learn...</h3>
            <ul class="check-mark-list">
                <li>How <strong>apartments make you wealthy safer and faster</strong> (single-family is OK, but why not enjoy single-family profits on steroids!)</li>
                <li>My <strong>4 experience-tested, absolute keys to successful apartment house ownership.</strong> Do these, and you'll never look back!</li>
                <li>How to <strong>accurately determine what stage of the market cycle you're in at any given time.</strong> Knowing this will allow you to adjust your buying and selling strategy. You won't just increase your profits...<strong>you'll turbo-charge them!</strong></li>
            </ul>
            <hr>
            <!-- testimonials -->
            <h3>It could be you...</h3>
            <div class="testimonial"><img src="https://usrealestateassociation.com/wp-content/uploads/2014/04/profile-kissee.png" alt="profile-kissee" class="img-left" /><i class="fa fa-quote-left fa-lg"></i> Hi Dave! We just wanted to say thank you so very much for providing us with your experience and leadership. Your training has provided us with the tools we needed to negotiate, perform, finance, and close. We closed on a 16 unit property recently are closing on another 20 unit apartment next month. When some of us start out, the fact that we can own an apartment is daunting, if not impossible. But with all the education you supply us, the way to take action, and especially the “hope” you give us, we felt we could do this; Shari and I want to thank you so much for everything you do. <i class="fa fa-quote-right fa-lg"></i>
            </div>
            <div class="author-wrapper">
                <div class="arrow"></div>
                <div class="testimonial-name">Jeff & Shari Kissee - Denver, CO</div>
            </div>
            <div class="testimonial"><img src="https://usrealestateassociation.com/wp-content/uploads/2014/04/profile-stephen-scott.png" alt="profile-stephen-scott" class="img-left" /><i class="fa fa-quote-left fa-lg"></i> Hey guys I want to write you about some good news. We were able to retire my Dad from the funeral business, permanently! This past November my Dad and I purchased a 108 unit multi family property in Dallas. My Dad has been in the funeral business for years. He was burned out talking to people about death all the time. He was able to leave his job this past January and now he's free as a bird! For myself, I was living in a hotel broke as a Texas joke just 2 years ago selling insurance. I am free too, thanks to you two. Thank you so much for everything you do! We now own over 350 commercial units and are growing each and every day. God Bless you! <i class="fa fa-quote-right fa-lg"></i>
            </div>
            <div class="author-wrapper">
                <div class="arrow"></div>
                <div class="testimonial-name">Stephen Scott - Dallas, TX</div>
            </div>
            <div class="testimonial"><img src="https://usrealestateassociation.com/wp-content/uploads/2014/04/profile-thomas-ricks.png" alt="profile-thomas-ricks" class="img-left" /><i class="fa fa-quote-left fa-lg"></i> Dear Dave, many, many thanks for the training you have offered. The content was excellent and the networking opportunities phenomenal. <i class="fa fa-quote-right fa-lg"></i>
            </div>
            <div class="author-wrapper">
                <div class="arrow"></div>
                <div class="testimonial-name">Thomas W. Ricks, Ph.D. - Front Royal, VA</div>
            </div>
            <!--
            <div class="testimonial"><img src="https://usrealestateassociation.com/wp-content/uploads/2014/04/profile-greg-johnston.png" alt="profile-greg-johnston" class="img-left" /><i class="fa fa-quote-left fa-lg"></i> Never once was there any doubt in our mind that we would not be able to do this. The training was very encouraging and kept us on the right track. Our coach guided us step by step but at the proper time had us start looking for other deals to keep the machine constantly running. Before we closed on our first deal we also had a 110 unit apartment complex and a 500 unit storage facility under contract. As we are moving along with those we are looking at several other properties as well. <i class="fa fa-quote-right fa-lg"></i>
            </div>
            <div class="author-wrapper">
            <div class="arrow"></div>
            <div class="testimonial-name">Greg & Tim Johnston - Allen Park, MI</div>
            </div>-->
            <div class="testimonial"><img src="https://usrealestateassociation.com/wp-content/uploads/2014/04/profile-michael-flaherty.png" alt="profile-michael-flaherty" class="img-left" /><i class="fa fa-quote-left fa-lg"></i> Dear Dave, I just wanted to share my experience with you since it has now been more than 12 months since I first started your training. I appreciate the opportunity and have enjoyed helping others learn and achieve some of the same successes I have been so blessed with. <i class="fa fa-quote-right fa-lg"></i>
            </div>
            <div class="author-wrapper">
                <div class="arrow"></div>
                <div class="testimonial-name">Mike Flaherty - Redondo Beach, CA</div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <h3>Need Help? Contact Us!</h3>
            <h4 style="color: #999; margin-top: -10px; font-style: italic;">Our loyalty team is available to take your call.</h4>
            <p>
                US: <i class="fa fa-phone"></i> <strong>1-800-559-8590</strong> Intl: <i class="fa fa-phone"></i><strong> 1-781-982-5700</strong>
            </p>
            <p>Mon-Thu: 8:00am - 7:00pm EST
                <br> Fri: 8:00am - 4:00pm EST</p>
            <p>Our MFIA loyalty team looks forward to helping you with your inquiry. We respond to email messages in the order that they are received, and we will respond to your email as quickly as possible.</p>
            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:support@multifamilyinvestors.org">support@multifamilyinvestors.org</a>
                <hr>
                <h3>Rest Assured 100% Satisfaction Guaranteed</h3>
                <p>If you are not completely convinced that my <strong>Apartment House Riches & Live Event</strong> is worth its value, you may claim a full refund, no questions asked.</p>
                <p class="text-center">
                    <a href="#gurantee" data-toggle="modal" data-target="#gurantee"><img src="themes/mf/img/seal-guarantee.png" width="200" height="192" alt="Our Guarantee" class="img-responsive center-block spin"></a>
                </p>
                <hr>
                <h3><i class="fa fa-lock fa-lg"></i> Security and Privacy</h3>
                <p>All personal information you submit is encrypted and secure.</p>
                <p>We will not share or trade online information that you provide us (including e-mail addresses).</p>
                <p><span id="ss_img_wrapper_115-55_image_en"><a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html" target="_blank" title="SSL Certificates"><img alt="Wildcard SSL Certificates" border=0 id="ss_img" src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif" title="SSL Certificate"></a></span>
                    <script type="text/javascript" src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
                    <a name="trustlink" href="http://secure.trust-guard.com/business/8454" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;"><img name="trustseal" alt="Business Seals" style="border: 0;" src="//dw26xg4lubooo.cloudfront.net/seals/newbiz/8454-lg.gif" /></a>
                    <a name="trustlink" href="http://secure.trust-guard.com/privacy/8454" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;"><img name="trustseal" alt="Privacy Seals" style="border: 0;" src="//dw26xg4lubooo.cloudfront.net/seals/newpriv/8454-lg.gif" /></a>
                </p>
        </div>
    </div>
</div>


<!-- Three Pay Modal -->
    <div id="three-pay-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: repeating-linear-gradient(
              45deg,
              #A33332,
              #A33332 20px,
              #8C0000 20px,
              #8C0000 40px
            );; padding: 10px">
                    <button type="button" class="close mynewclassclose" data-dismiss="modal" aria-hidden="true">
                        <img src="../img/close-btn.png" height="38" width="38" />
                    </button>
                    <h1 class="modal-title text-center" style="color: #fff; font-size: 36px; text-shadow: 1px 1px 1px #000;">WAIT! Before you go...</h1>
                </div>
                <div class="modal-body">
                    <h2 class="text-center" style="margin-top: 0;">What if I was willing to let you split the program into <span class="red">3 payments of $515?</span></h2>
                <p class="text-center">Click the button below to get my complete <strong>Apartment House Riches</strong> home study course & <strong>Live Event!</strong> You will be on your way to <strong>fast success</strong> in no time!</p>
                    <img src="../img/funnel/ahr-bundle.png" class="img-responsive center-block">
                   <p>
                    <a href="gcp-webinar.php?plan=3pay"><img src="themes/mf/img/exit-pop/btn-3payments.gif" class="img-responsive img-center"></a></p>
                </div>
            </div>
        </div>
    </div>

<?php include('themes/mf/footer.php');?>

<!-- only display exit-pop on $1495 page -->
<?php if($plan != '3pay') : ?>
    <script>
    ouibounce(document.getElementById('three-pay-modal'), {
        aggressive: true,
        delay: 250,
        callback: function() {
            $('#three-pay-modal').modal('show');
        }
    });
    </script>
<?php endif; ?>

<!-- Adds .img-responsive class to Authorize.net logo -->
<script>
    $( "div.AuthorizeNetSeal a img" ).last().addClass( "img-responsive" );
</script>

<!--Show or hide the guests section of the confirmation form-->
<script>
$(document).ready(function() {
    $("#billing-address").hide();
    $('#radio-no').on("click", function() {
        if ($(this).is(":checked")) {
            $('#billing-address').show("slow");
            $('#billing-panel').animate({
                paddingBottom: "0"
            });
        } else {
            $('#billing-address').hide("slow");
            $('#billing-panel').animate({
                paddingBottom: "15px"
            });
        }
    });
    $('#radio-yes').on("click", function() {
        if ($(this).is(":checked")) {
            $('#billing-address').hide("slow");
            $('#billing-panel').animate({
                paddingBottom: "0"
            });
        } else {
            $('#billing-address').show("slow");
            $('#billing-panel').animate({
                paddingBottom: "15px"
            });
        }
    });
});
</script>
