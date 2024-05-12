<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        
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

       

        body {
        background: var(--background);
        color: var(--foreground);
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
        #box {
            width: 500px;
            height: 800px;
            padding: 8px 8px 8px 8px;
            background: linear-gradient(180deg, rgb(123, 187, 255) 0%, rgb(233, 246, 254) 100%);
            border-color: #201F1E;
            border-width: 1px;
            border-style: solid;
            border-radius: 80px ;
            margin-left:500px;
            

        } 
        h1{
            color: #201F1E;
            font-family: 'ADLaM Display',sans-serif;
            font-weight: bold;
            font-size: 20px;
        }
        input[type=text] {
            width: 480px;
            height: 45px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 13px 13px 13px 13px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: left;
        }
        .text_1{
            width: 480px;
            height: 45px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 13px 13px 13px 13px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: left;
        }
        .sumbit{
            width: 200px;
            height: 60px;
            padding: 8px 8px 8px 8px;
            background: #037AFF;
            color: #FFFFFF;
            border-color: #006CE5;
            border-width: 1px;
            border-style: solid;
            border-radius: 20px;
            font-family: "ADLaM Display";
            font-weight:30;
            font-size: 36px;
            text-align:center;
            margin-top:-30px;
        }
        .headertext {
            color: #ffffff;
            font-family: "ADLaM Display";
            font-weight: 200;
            font-size: 24px;
            text-decoration: none;
            text-align: right;
            margin-left: 10px;
            margin-right: 20px;
        }
        
        .gender{
            width: 240px;
            height: 45px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: left;
        }
        input[type=date]{
            width: 220px;
            height: 40px;
            padding: 4px 8px 4px 8px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: left;
        }
        input[type=tel]{
            width: 235px;
            height: 45px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 11px 11px 11px 11px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-align: left;
        }

        


    </style>
</head>
<body>
<div class="header">
    <img style="width: 170px; height: 100px;margin-right: 1400px;" src="logo.png" alt="">
    <div>
        <a href="homepagebeforelogin.php"class="headertext">Home</a>
    </div>
</div>



<br><br><div id="box">

    <h1 style="margin-left:160px; font-size:40px;">Register</h1>
    <form method="post">
            Create Username<br>
            <input type="text" name="user_name" required><br><br>

            Email<br>
            <input type="text" name="user_email" required><br><br>

            Create Password <br>
            <input type="password" name="user_password" class="text_1" required><br><br>

            Confirm Password <br>
            <input type="password" name="confirmpassword" class="text_1" required><br><br>

            Date of Birth <br>
            <input type="date" name="user_dob" required><br><br>

            <div id="gender" style="float:right; margin-top:-80px;">Gender<br>
                <select id="gender" name="user_gender" class= "gender" required>
                    <option value="">Please select</option> 
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <br><div style="margin-top:-20px;">Phone <br>
                <input type="tel" maxlength="12" name="user_phone">
            </div>

            <div style="float:right; margin-top:-65px;"> Country <br>
                <select id="country" name="user_country" style="width: 240px;height: 44px;padding: 4px 8px 4px 8px;border-radius: 10px 10px 10px 10px;font-family: 'ADLaM Display';text-align: left;" required>
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
                </select>
            </div>
            <br><br><div style="margin-top:-20px;">Occupation <br>
                <input type="text" name="user_occupation" required><br><br>
            </div>

            <div id="payment"  >Payment (Optional) <br>
                <select name="user_payment">
                    <option value="">Please select</option>
                    <option value="online banking">online banking</option>
                    <option value="e-wallet">e-wallet</option>
                    <option value="other">other</option>
                </select>
            </div>

            <br><br>

            <input type="submit" name="submitBtn" value="Submit" class ="sumbit" style= "margin-left:150px;margin-bottom:100px;"> 
        </form>
</div>
   

<?php
if (isset($_POST['submitBtn'])) {
    include("conn.php");
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $user_password = mysqli_real_escape_string($con, $_POST['user_password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    if ($user_password == $confirmpassword) {
        $sql = "SELECT * FROM user WHERE user_name = '$user_name'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Error: User name already exists!');window.location.href='register.php';</script>";
        } else {
            $sql = "INSERT INTO user (user_name,user_password,user_email,user_dob,user_gender,user_phone,user_country,user_occupation,user_payment) VALUES 
            ('$_POST[user_name]','$_POST[user_password]','$_POST[user_email]','$_POST[user_dob]','$_POST[user_gender]','$_POST[user_phone]','$_POST[user_country]','$_POST[user_occupation]','$_POST[user_payment]')";

            if (!mysqli_query($con, $sql)) {
                die('Error: ' . mysqli_error($con));
            } else {
                echo "<script>alert('Registration successful!');window.location.href='login.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Error: Passwords do not match!');window.location.href='register.php';</script>";
        exit;
    }
}
?>


</body>
</html>