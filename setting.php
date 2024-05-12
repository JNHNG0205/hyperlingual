<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage profile page</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="script.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        .button {
            width: 300px;
            height: 70px;
            background: #0683fd;
            color: #ffffff;
            border-color: #0683fd;
            border-width: 1px;
            border-style: solid;
            border-radius: 30px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: center;
            margin-left: -90px;
        }

        .dropdown{
            position: relative;
            display: inline-block;
        }

        .dropdown-content{
            display:none;
            position:absolute;
            background-color: #f9f9f9;
            min-width:160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;

        }

        .dropdown-content a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: "ADLaM Display";
        }

        .dropdown-content a:hover{
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content{
            display:block;
        }
        
        .box {
            width: 1924px;
            height: 100px;
            padding: 8px 8px 8px 8px;
            background: #0683FD;
            border-color: #FFFFFF;
            border-width: 1px;
            border-style: solid;
        }
        .headertext {
            color: #ffffff;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-decoration: none;
            text-align: right;
            margin-left: 20px;
            margin-right: 10px;
            }
            
        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: auto;
            height: 100px;
            background: #0683fd;
            border-color: #0683fd;
            border-width: 1px;
            border-style: solid;
            }
        .face-icon-1 {
            width: 150px;
            height: 159px;
            background: #000000;
        }
        .manage-profile {
            width: 675px;
            height: 80px;
            color: #232323;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 48px;
            text-align: left;
        }
        .settings {
            width: 247px;
            height: 137px;
            color: #232323;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 60px;
            text-align: left;
        }
        .build-circle-icon-1 {
            width: 183px;
            height: 179px;
            background: #000000;
        }
        .contrast-icon-1 {
            width: 151px;
            height: 153px;
            background: #000000;
        }
        .toggle-dark-mode {
            width: 673px;
            height: 56px;
            color: #232323;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 48px;
            text-align: left;
        }
        .logout {
            width: 673px;
            height: 62px;
            color: #232323;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 48px;
            text-align: left;
        }
        .start-icon-1 {
            width: 132px;
            height: 132px;
            background: #000000;
        }
        .icon{
            margin-left:100px;
            margin-top: 20px;
        }
        .icontext{
            margin-left:210px;
        }
        .blank{
            width: 486px;
            height: 56px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 19px 19px 19px 19px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 30px;
            text-align: left;
        }

        
        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        :root {
            --clr-light: #97d5ea;/*the backgroung color*/
            --clr-dark: #4b61a3;/*the color of the word*/
            --clr-primary: #d0d781;
            --clr-accent: #0864c7;
        --foreground: var(--clr-dark);
        --background: var(--clr-light);
        }

        .darkmode {
            --clr-light:  #74cac6;/*the color of the word*/
            --clr-dark: #546fb9;/*the backgrounf color*/
            --clr-primary: #6d7420;
            --clr-accent: #55ccea;
            --foreground: var(--clr-light);
            --background: var(--clr-dark);
        }


        body {
        background: var(--background);
        color: var(--foreground);
        }
        /*"topic"text*/
        h1 {
        font-family: "ADLaM Display";
        }

        .btn-group {
        display: relative;
        }

        .btn {
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 5px;
        position: relative;
        display: inline-block;
        line-height: 1;
        }

        .btn + .btn {
        margin-left: 1em;
        }


        .btn-accent {
        background: var(--clr-accent);
        color: var(--foreground);
        }

        .btn::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border: var(--foreground) 2px solid;
        left: -4px;
        top: 4px;
        border-radius: inherit;
        z-index: -1;
        }

        .intro > * {
        grid-column: 2 / 3;
        }
        /*the button*/
        .dark-mode-toggle {
        position: absolute;
        z-index: 100;
        top: 1em;
        right: 1em;
        color: var(--foreground);
        border: 0px solid currentColor;
        padding: 4px;
        background: transparent;
        cursor: pointer;
        border-radius: 5px;
        width: 30px;
        height: 20px;
        margin-top:50px;
        margin-right:10px;
        }


    </style>
</head>
<body>
    <div class="header">
        <img style="width: 170px; height: 100px; margin-right:40px;" src="logo.png" alt="">
        <div>
            <a href="homepage.php" style="margin-left: 685px;" class="headertext">Home</a>  
            <div class="dropdown">
                <a href="" class="headertext">About Us</a>
                <div class="dropdown-content">
                    <a href="aboutus.php">Mission & Approach</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="contactus.php">Contact Us</a>
                </div>
            </div>
    
            <a href="course.php" class="headertext">Courses</a>
            <div class="dropdown">
                <a href="" class="headertext">Settings</a>
                <div class="dropdown-content">
                    <a href="setting.php">Manage Profile</a>
                    <a href="#">Toggle DarkMode<button id="dark-mode-toggle" class="dark-mode-toggle" aria-label="toggle dark mode" onclick="darkMode()">
                    <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496" style="opacity:50% "><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
                    </button></a>
                </div>
            </div>
            <a href="logout.php" class="headertext">Logout</a>
        </div>
    </div>
    <?php
        include("conn.php");

        if(isset($_SESSION['mySession'])){

            $sql="SELECT*FROM user WHERE user_id=".$_SESSION['mySession'];
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
    ?>
  
    <img src="pagelogo-removebg-preview" style="width: 147px;height: 147px;" alt="">
    <h1 style="margin-top:-15px; margin-left:100px;font-family:'ADLaM Display';">Manage Profile</h1><br>
        <form method="post" action="updateass.php">
        <img src="change-username.png" class="icon" style="width: 74px;height: 83px;"alt="">
        <p class="icontext" style="margin-top:-60px; font-family:'ADLaM Display';font-size:25px; ">Change Username<input name="user_name" placeholder="New Username" class="blank" style="margin-left:500px;" value="<?php echo $row['user_name'] ?>"></p>
        <br>
        <img src="change-email.png" class="icon" style="width: 82px;height: 92px;"alt="">
        <p class="icontext" style="margin-top:-18px; font-family:'ADLaM Display';font-size:25px; ">Change Email<input name="user_email" placeholder="New Email" class="blank"style="margin-left:550px;"value="<?php echo $row['user_email'] ?>"></p>
        <br>
        <img src="change-phone.png" class="icon" style="width: 82px;height: 92px;"alt="">
        <p class="icontext" style="margin-top:-24px; font-family:'ADLaM Display';font-size:25px; ">Change Phone Number<input name="user_phone" placeholder="New Phone Number" class="blank"style="margin-left:710px;"value="<?php echo $row['user_phone'] ?>"></p>
        <br>
        <img src="change-dob.png" class="icon" style="width: 82px;height: 92px;"alt="">
        <p class="icontext" style="margin-top:-24px; font-family:'ADLaM Display';font-size:25px; ">Change Date of Birth<input name="user_dob" type="date" class="blank"style="margin-left:460px;"value="<?php echo $row['user_dob'] ?>"></p>
        <br>
        <img src="change-country.png" class="icon" style="width: 82px;height: 92px;"alt="">
        <p class="icontext" style="margin-top:-36px; font-family:'ADLaM Display';font-size:25px; ">Change Country
        <select id="country" name="user_country" class="blank"style="margin-left:510px;"value="<?php echo $row['user_country'] ?>">
                <option value="">Select</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
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
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
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
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
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
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
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
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
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
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
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
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
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
            </select></p>
        <br>
        <img src="change-occupation.png" class="icon" style="width: 82px;height: 92px;"alt="">
        <p class="icontext" style="margin-top:-42px; font-family:'ADLaM Display';font-size:25px; ">Change Occupation<input name="user_occupation" class="blank" placeholder="New Occupation" style="margin-left:480px;"value="<?php echo $row['user_occupation'] ?>"></p>
        <br>
        <img src="changegender-removebg-preview" class="icon" style="width: 82px;height: 92px;"alt=""
        ><p class="icontext" style="margin-top:-48px; font-family:'ADLaM Display';font-size:25px; ">Change Gender<input name="user_gender" class="blank" placeholder="New Gender" style="margin-left:530px;"value="<?php echo $row['user_gender'] ?>"></p>
        <br>
        <img src="change-payment.png"class="icon" style="width: 82px;height: 92px;"alt="">    
        <p class="icontext" style="margin-top:-54px; font-family:'ADLaM Display';font-size:25px; ">Change Payment Method
        <select id="payment method" class="blank" name="user_payment"style="margin-left:710px;"value="<?php echo $row['user_payment'] ?>">
                <option value="">Select</option>
                <option value="bank">Bank</option>
                <option value="tng">Touch' n Go</option></p>
        <div class="btn-group"> 
            <input type="submit" name="saveBtn" value="Save" class="btn-accent" style="width: 100px;
                height: 100px;
                padding: 8px 8px 8px 8px;
                color:#202831;
                border-color: #006CE5;
                border-width: 1px;
                border-style: solid;
                border-radius: 39px 39px 39px 39px;
                font-family: 'ADLaM Display';
                font-weight: 400;
                font-size: 20px;
                line-height: 1.3;
                text-align: center;
                margin-top: 50px;
                margin-left: 380px;">
            <input type="reset" name="Reset" class="btn-accent" style="width: 100px;
                height: 100px;
                padding: 8px 8px 8px 8px;
                color:#202831;
                border-color: #006CE5;
                border-width: 1px;
                border-style: solid;
                border-radius: 39px 39px 39px 39px;
                font-family: 'ADLaM Display';
                font-weight: 400;
                font-size: 20px;
                line-height: 1.3;
                text-align: center;
                margin-top: 15px;
                margin-left: 110px;">
        </div>
    </form>
    <h1 style="margin-top:-15px; margin-left:100px;font-family:'ADLaM Display';">Manage Security</h1><br>
    <img src="change-password.png" class="icon" style=" margin-top:20px; margin-right:100px;width: 100px;height: 83px;"alt="">
        <button class="button"><a href="sendOTP.php">Change Password</a></button>
                <?php
        }
        ?>
   
</body>
</html>
