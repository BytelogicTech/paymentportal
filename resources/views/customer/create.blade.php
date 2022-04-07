@include('header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{url('customer/store')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
<hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">First Name/Company Name *</label>
                                            <input type="text" placeholder="Enter First Name" class="form-control" name="first_name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Last Name</label>
                                            <input type="text" placeholder="Enter Last Name" class="form-control" name="last_name"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Email *</label>
                                            <input type="email" placeholder="Enter Email" class="form-control" name="email" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Phone *</label>
                                            <input type="text" placeholder="Enter Phone" class="form-control" name="phone" required/>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Address</label>
                                            <textarea placeholder="Address" class="form-control" name="address"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country*</label>
                                            <select class="form-control select2" style="width: 100%;" name="country" required>
                                                <option value="" selected disabled>Please Select One</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
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
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
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
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Date of Birth</label>
                                            <input type="date" placeholder="Select Date of Birth" class="form-control" name="date_of_birth"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">ID Number</label>
                                            <input type="text" placeholder="Enter ID Number" class="form-control" name="id_number"/>
                                        </div>
                                    </div>
                                </div>

<hr>
                                <h4>Bank Account Details for Payout</h4>
                                <p>Only mandatory for customer payouts/withdrawals
                                </p>

                                <div id="bank_accounts_details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Beneficiary Name *</label>
                                            <input type="text" placeholder="Enter Beneficiary Name" class="form-control" name="beneficiary_name[]" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Beneficiary Nickname *</label>
                                            <input type="text" placeholder="Enter Beneficiary Nick Name" class="form-control" name="beneficiary_nickname[]" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Enter Beneficiary Address *</label>
                                            <input type="text" placeholder="Enter Beneficiary Name" class="form-control" name="beneficiary_address[]" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Beneficiary Country *</label>
                                            <select class="form-control select2" style="width: 100%;" name="beneficiary_country[]" required>
                                                <option value="" selected disabled>Please Select One</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
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
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
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
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Name *</label>
                                            <input type="text" placeholder="Enter Bank Name" class="form-control" name="bank_name[]" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Branch *</label>
                                            <input type="text" placeholder="Enter Bank Branch" class="form-control" name="bank_branch[]" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Address *</label>
                                            <input type="text" placeholder="Bank Address" class="form-control" name="bank_address[]" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Country *</label>
                                            <select class="select2 form-control" style="width: 100%;" name="bank_country[]" required>
                                                <option value="" selected disabled>Please Select One</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
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
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
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
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank SWIFT *</label>
                                            <input type="text" placeholder="Enter Bank SWIFT" class="form-control" name="bank_swift[]" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Account Number/IBAN *</label>
                                            <input type="text" placeholder="Enter Account Number" class="form-control" name="account_number[]" required />
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Currency *</label>
                                            <select class="form-control select2" style="width: 100%;" name="currency[]" required>
                                                <option value="" selected disabled>Please Select One</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="GBP">GBP</option>
                                                <option value="DZD">DZD</option>
                                                <option value="AED">AED</option>
                                                <option value="ARP">ARP</option>
                                                <option value="AUD">AUD</option>
                                                <option value="ATS">ATS</option>
                                                <option value="BSD">BSD</option>
                                                <option value="BBD">BBD</option>
                                                <option value="BEF">BEF</option>
                                                <option value="BMD">BMD</option>
                                                <option value="BRR">BRR</option>
                                                <option value="BGN">BGN</option>
                                                <option value="CAD">CAD</option>
                                                <option value="CLP">CLP</option>
                                                <option value="CNY">CNY</option>
                                                <option value="CYP">CYP</option>
                                                <option value="CSK">CSK</option>
                                                <option value="DKK">DKK</option>
                                                <option value="NLG">NLG</option>
                                                <option value="XCD">XCD</option>
                                                <option value="EGP">EGP</option>
                                                <option value="FJD">FJD</option>
                                                <option value="FIM">FIM</option>
                                                <option value="FRF">FRF</option>
                                                <option value="DEM">DEM</option>
                                                <option value="XAU">XAU</option>
                                                <option value="GRD">GRD</option>
                                                <option value="HKD">HKD</option>
                                                <option value="HUF">HUF</option>
                                                <option value="ISK">ISK</option>
                                                <option value="INR">INR</option>
                                                <option value="IDR">IDR</option>
                                                <option value="IEP">IEP</option>
                                                <option value="ILS">ILS</option>
                                                <option value="ITL">ITL</option>
                                                <option value="JMD">JMD</option>
                                                <option value="JPY">JPY</option>
                                                <option value="JOD">JOD</option>
                                                <option value="KRW">KRW</option>
                                                <option value="LBP">LBP</option>
                                                <option value="LUF">LUF</option>
                                                <option value="MYR">MYR</option>
                                                <option value="MXP">MXP</option>
                                                <option value="NLG">NLG</option>
                                                <option value="NZD">NZD</option>
                                                <option value="NOK">NOK</option>
                                                <option value="PKR">PKR</option>
                                                <option value="XPD">XPD</option>
                                                <option value="PHP">PHP</option>
                                                <option value="XPT">XPT</option>
                                                <option value="PLZ">PLZ</option>
                                                <option value="PTE">PTE</option>
                                                <option value="ROL">ROL</option>
                                                <option value="RUR">RUR</option>
                                                <option value="SAR">SAR</option>
                                                <option value="XAG">XAG</option>
                                                <option value="SGD">SGD</option>
                                                <option value="SKK">SKK</option>
                                                <option value="ZAR">ZAR</option>
                                                <option value="KRW">KRW</option>
                                                <option value="ESP">ESP</option>
                                                <option value="XDR">XDR</option>
                                                <option value="SDD">SDD</option>
                                                <option value="SEK">SEK</option>
                                                <option value="CHF">CHF</option>
                                                <option value="TWD">TWD</option>
                                                <option value="THB">THB</option>
                                                <option value="TTD">TTD</option>
                                                <option value="TRL">TRL</option>
                                                <option value="VEB">VEB</option>
                                                <option value="ZMK">ZMK</option>
                                                <option value="EUR">EUR</option>
                                                <option value="XCD">XCD</option>
                                                <option value="XDR">XDR</option>
                                                <option value="XAG">XAG</option>
                                                <option value="XAU">XAU</option>
                                                <option value="XPD">XPD</option>
                                                <option value="XPT">XPT</option>
                                                <option value="BTC">BTC</option>
                                                <option value="BTC/EUR">BTC/EUR</option>
                                                <option value="BTC/USD">BTC/USD</option>
                                                <option value="USDT">USDT</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks *</label>
                                            <input type="text" placeholder="Remarks/ABA Code/Sort Code/Routing Number/IFSc Code" class="form-control" name="remarks[]" required/>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Name (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Name" class="form-control" name="intermediary_bank_name[]"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Address (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Address" class="form-control" name="intermediary_bank_address[]"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank SWIFT (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank SWIFT" class="form-control" name="intermediary_bank_swift[]"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Details Remarks (Optional)</label>
                                            <input type="text" placeholder="Enter Remark" class="form-control" name="intermediary_bank_details_remarks[]"/>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="text-center">
                                    <a href="javascript:void(0);" name="add" id="add_accounts_bank" class="btn btn-success"><i class="fa fa-plus"></i> Additional Payout Account</a>

                                </div>
                                <hr>

                                <h4>Documents
                                </h4>
                                <p>Photo ID, Bank Statement and Address Proof of the customers are mandatory for all payout requests.</p>

                                <div id="document_div">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Document Type *</label>
                                            <select class="form-control select2" style="width: 100%;" name="document_type[]" required>
                                            <option value="" selected disabled>Please Select One</option>
                                                <option value="photo_id">Photo ID</option>
                                                <option value="bank_statement">Bank Statement</option>
                                                <option value="utility_bill">utility Bill</option>
                                                <option value="other">Other</option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="upload_file">Upload File *</label>
                                            <input type="file" placeholder="Choose File" class="form-control" name="upload_file[]" required />
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" name="add" id="add_document" class="btn btn-success"><i class="fa fa-plus"></i> Add Document</a>

                                </div>
                                <hr>

                                @if(Auth::user()->role=="Admin")

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Parent Merchant *</label>
                                            <select class="select2 form-control" name="merchant_fk_id" required>
                                                <option value="" selected disabled>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                                              @endforeach
                                            </select>
                                    </div>
                                </div>
                                @endif
                               

                        

                                <!-- Bootstrap Switch -->
                                <center>
                                    <p>Status</p>
                                    <input type="checkbox" checked data-toggle="switch" data-handle-width="100" data-on-text="Activated" data-off-text="Deactivated" name="status">

                                </center>

                                <!-- /.card -->
                                <br />
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>



                        </form>
                    </div>
                </div>
                <!-- /.card -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@include('footer')
<script>
    $(function() {
        $('.select2').select2()
    });
</script>

<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>

<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {
        var i = 1;
        $('#add_document').click(function() {
            i++;
            $('#document_div').append('  <div class="row" id="row' + i + '">' +
                '<div class="col-md-5">' +
                '<div class="form-group">' +
                '<label>Document Type *</label>' +
                '<select class="form-control select2" style="width: 100%;" name="document_type[]" required>' +
                '<option value="" selected disabled>Please Select One</option>' +
                '<option value="photo_id">Photo ID</option>' +
                '<option value="bank_statement">Bank Statement</option>' +
                ' <option value="Utility_bill">utility Bill</option>' +
                ' <option value="other">Other</option>' +
                '</select>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-5">' +
                '<div class="form-group">' +
                '<label for="upload_file">Upload File *</label>' +
                '<input type="file" placeholder="Upload File" class="form-control" name="upload_file[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<label> Remove </label>' +
                '<a href="javascript:void(0);" name="remove" id="' + i + '" class="btn btn-danger btn-remove form-control remove_btn"><i class="fa fa-minus"></i></a>' +
                '</div>' +
                '</div> ');

            $('.btn-remove').click(function() {
                var btnid = $(this).attr('id');
                $('#row' + btnid).remove();
            });

        });

    });
</script>
<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>



<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {
        var i = 1;
        $('#add_accounts_bank').click(function() {
            i++;
            $('#bank_accounts_details').append('  <div class="row" id="bank_account_details' + i + '">' +
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Beneficiary Name</label>'+
                                '<input type="text" placeholder="Enter Beneficiary Name" class="form-control" name="beneficiary_name[]"/>'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Beneficiary Nickname</label>'+
                                '<input type="text" placeholder="Enter Beneficiary Nick Name" class="form-control" name="beneficiary_nickname[]"/>'+
                                '</div>'+
                                '</div>'+

                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Enter Beneficiary Address *</label>'+
                                '<input type="text" placeholder="Enter Beneficiary Name" class="form-control" name="beneficiary_address[]" required />'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label>Beneficiary Country</label>'+
                                '<select class="form-control select2" style="width: 100%;" name="beneficiary_country[]">'+
                                '<option value="" selected disabled>Please Select One</option>'+
                                '<option value="Afganistan">Afghanistan</option>'+
                                '<option value="Albania">Albania</option>'+
                                '<option value="Algeria">Algeria</option>'+
                                '<option value="American Samoa">American Samoa</option>'+
                                '<option value="Andorra">Andorra</option>'+
                                '<option value="Angola">Angola</option>'+
                                '<option value="Anguilla">Anguilla</option>'+
                                '<option value="Antigua & Barbuda">Antigua & Barbuda</option>'+
                                '<option value="Argentina">Argentina</option>'+
                                '<option value="Armenia">Armenia</option>'+
                                '<option value="Aruba">Aruba</option>'+
                                '<option value="Australia">Australia</option>'+
                                '<option value="Austria">Austria</option>'+
                                '<option value="Azerbaijan">Azerbaijan</option>'+
                                '<option value="Bahamas">Bahamas</option>'+
                                '<option value="Bahrain">Bahrain</option>'+
                                '<option value="Bangladesh">Bangladesh</option>'+
                                '<option value="Barbados">Barbados</option>'+
                                '<option value="Belarus">Belarus</option>'+
                                '<option value="Belgium">Belgium</option>'+
                                '<option value="Belize">Belize</option>'+
                                '<option value="Benin">Benin</option>'+
                                '<option value="Bermuda">Bermuda</option>'+
                                '<option value="Bhutan">Bhutan</option>'+
                                '<option value="Bolivia">Bolivia</option>'+
                                '<option value="Bonaire">Bonaire</option>'+
                                '<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>'+
                                '<option value="Botswana">Botswana</option>'+
                                '<option value="Brazil">Brazil</option>'+
                                '<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>'+
                                '<option value="Brunei">Brunei</option>'+
                                '<option value="Bulgaria">Bulgaria</option>'+
                                '<option value="Burkina Faso">Burkina Faso</option>'+
                                '<option value="Burundi">Burundi</option>'+
                                '<option value="Cambodia">Cambodia</option>'+
                                '<option value="Cameroon">Cameroon</option>'+
                                '<option value="Canada">Canada</option>'+
                                '<option value="Canary Islands">Canary Islands</option>'+
                                '<option value="Cape Verde">Cape Verde</option>'+
                                '<option value="Cayman Islands">Cayman Islands</option>'+
                                '<option value="Central African Republic">Central African Republic</option>'+
                                '<option value="Chad">Chad</option>'+
                                '<option value="Channel Islands">Channel Islands</option>'+
                                '<option value="Chile">Chile</option>'+
                                '<option value="China">China</option>'+
                                '<option value="Christmas Island">Christmas Island</option>'+
                                '<option value="Cocos Island">Cocos Island</option>'+
                                '<option value="Colombia">Colombia</option>'+
                                '<option value="Comoros">Comoros</option>'+
                                '<option value="Congo">Congo</option>'+
                                '<option value="Cook Islands">Cook Islands</option>'+
                                '<option value="Costa Rica">Costa Rica</option>'+
                                '<option value="Cote DIvoire">Cote DIvoire</option>'+
                                '<option value="Croatia">Croatia</option>'+
                                '<option value="Cuba">Cuba</option>'+
                                '<option value="Curaco">Curacao</option>'+
                                '<option value="Cyprus">Cyprus</option>'+
                                '<option value="Czech Republic">Czech Republic</option>'+
                                '<option value="Denmark">Denmark</option>'+
                                '<option value="Djibouti">Djibouti</option>'+
                                '<option value="Dominica">Dominica</option>'+
                                '<option value="Dominican Republic">Dominican Republic</option>'+
                                '<option value="East Timor">East Timor</option>'+
                                '<option value="Ecuador">Ecuador</option>'+
                                '<option value="Egypt">Egypt</option>'+
                                '<option value="El Salvador">El Salvador</option>'+
                                '<option value="Equatorial Guinea">Equatorial Guinea</option>'+
                                '<option value="Eritrea">Eritrea</option>'+
                                '<option value="Estonia">Estonia</option>'+
                                '<option value="Ethiopia">Ethiopia</option>'+
                                '<option value="Falkland Islands">Falkland Islands</option>'+
                                '<option value="Faroe Islands">Faroe Islands</option>'+
                                '<option value="Fiji">Fiji</option>'+
                                '<option value="Finland">Finland</option>'+
                                '<option value="France">France</option>'+
                                '<option value="French Guiana">French Guiana</option>'+
                                '<option value="French Polynesia">French Polynesia</option>'+
                                '<option value="French Southern Ter">French Southern Ter</option>'+
                                '<option value="Gabon">Gabon</option>'+
                                '<option value="Gambia">Gambia</option>'+
                                '<option value="Georgia">Georgia</option>'+
                                '<option value="Germany">Germany</option>'+
                                '<option value="Ghana">Ghana</option>'+
                                '<option value="Gibraltar">Gibraltar</option>'+
                                '<option value="Great Britain">Great Britain</option>'+
                                '<option value="Greece">Greece</option>'+
                                '<option value="Greenland">Greenland</option>'+
                                '<option value="Grenada">Grenada</option>'+
                                '<option value="Guadeloupe">Guadeloupe</option>'+
                                '<option value="Guam">Guam</option>'+
                                '<option value="Guatemala">Guatemala</option>'+
                                '<option value="Guinea">Guinea</option>'+
                                '<option value="Guyana">Guyana</option>'+
                                '<option value="Haiti">Haiti</option>'+
                                '<option value="Hawaii">Hawaii</option>'+
                                '<option value="Honduras">Honduras</option>'+
                                '<option value="Hong Kong">Hong Kong</option>'+
                                '<option value="Hungary">Hungary</option>'+
                                '<option value="Iceland">Iceland</option>'+
                                '<option value="Indonesia">Indonesia</option>'+
                                '<option value="India">India</option>'+
                                '<option value="Iran">Iran</option>'+
                                '<option value="Iraq">Iraq</option>'+
                                '<option value="Ireland">Ireland</option>'+
                                '<option value="Isle of Man">Isle of Man</option>'+
                                '<option value="Israel">Israel</option>'+
                                '<option value="Italy">Italy</option>'+
                                '<option value="Jamaica">Jamaica</option>'+
                                '<option value="Japan">Japan</option>'+
                                '<option value="Jordan">Jordan</option>'+
                                '<option value="Kazakhstan">Kazakhstan</option>'+
                                '<option value="Kenya">Kenya</option>'+
                                '<option value="Kiribati">Kiribati</option>'+
                                '<option value="Korea North">Korea North</option>'+
                                '<option value="Korea Sout">Korea South</option>'+
                                '<option value="Kuwait">Kuwait</option>'+
                                '<option value="Kyrgyzstan">Kyrgyzstan</option>'+
                                '<option value="Laos">Laos</option>'+
                                '<option value="Latvia">Latvia</option>'+
                                '<option value="Lebanon">Lebanon</option>'+
                                '<option value="Lesotho">Lesotho</option>'+
                                '<option value="Liberia">Liberia</option>'+
                                '<option value="Libya">Libya</option>'+
                               '<option value="Liechtenstein">Liechtenstein</option>'+
                              '<option value="Lithuania">Lithuania</option>'+
                                '<option value="Luxembourg">Luxembourg</option>'+
                                '<option value="Macau">Macau</option>'+
                                '<option value="Macedonia">Macedonia</option>'+
                                '<option value="Madagascar">Madagascar</option>'+
                                '<option value="Malaysia">Malaysia</option>'+
                                '<option value="Malawi">Malawi</option>'+
                                '<option value="Maldives">Maldives</option>'+
                                '<option value="Mali">Mali</option>'+
                                '<option value="Malta">Malta</option>'+
                                '<option value="Marshall Islands">Marshall Islands</option>'+
                                '<option value="Martinique">Martinique</option>'+
                                '<option value="Mauritania">Mauritania</option>'+
                                '<option value="Mauritius">Mauritius</option>'+
                                '<option value="Mayotte">Mayotte</option>'+
                                '<option value="Mexico">Mexico</option>'+
                                '<option value="Midway Islands">Midway Islands</option>'+
                                '<option value="Moldova">Moldova</option>'+
                                '<option value="Monaco">Monaco</option>'+
                               '<option value="Mongolia">Mongolia</option>'+
                                '<option value="Montserrat">Montserrat</option>'+
                                '<option value="Morocco">Morocco</option>'+
                                '<option value="Mozambique">Mozambique</option>'+
                                '<option value="Myanmar">Myanmar</option>'+
                                '<option value="Nambia">Nambia</option>'+
                                '<option value="Nauru">Nauru</option>'+
                                '<option value="Nepal">Nepal</option>'+
                                '<option value="Netherland Antilles">Netherland Antilles</option>'+
                                '<option value="Netherlands">Netherlands (Holland, Europe)</option>'+
                                '<option value="Nevis">Nevis</option>'+
                                '<option value="New Caledonia">New Caledonia</option>'+
                                '<option value="New Zealand">New Zealand</option>'+
                                '<option value="Nicaragua">Nicaragua</option>'+
                                '<option value="Niger">Niger</option>'+
                                '<option value="Nigeria">Nigeria</option>'+
                                '<option value="Niue">Niue</option>'+
                                '<option value="Norfolk Island">Norfolk Island</option>'+
                                '<option value="Norway">Norway</option>'+
                                '<option value="Oman">Oman</option>'+
                                '<option value="Pakistan">Pakistan</option>'+
                                '<option value="Palau Island">Palau Island</option>'+
                                '<option value="Palestine">Palestine</option>'+
                                '<option value="Panama">Panama</option>'+
                                '<option value="Papua New Guinea">Papua New Guinea</option>'+
                                '<option value="Paraguay">Paraguay</option>'+
                                '<option value="Peru">Peru</option>'+
                                '<option value="Phillipines">Philippines</option>'+
                                '<option value="Pitcairn Island">Pitcairn Island</option>'+
                                '<option value="Poland">Poland</option>'+
                                '<option value="Portugal">Portugal</option>'+
                                '<option value="Puerto Rico">Puerto Rico</option>'+
                                '<option value="Qatar">Qatar</option>'+
                                '<option value="Republic of Montenegro">Republic of Montenegro</option>'+
                                '<option value="Republic of Serbia">Republic of Serbia</option>'+
                                '<option value="Reunion">Reunion</option>'+
                                '<option value="Romania">Romania</option>'+
                                '<option value="Russia">Russia</option>'+
                                '<option value="Rwanda">Rwanda</option>'+
                                '<option value="St Barthelemy">St Barthelemy</option>'+
                                '<option value="St Eustatius">St Eustatius</option>'+
                                '<option value="St Helena">St Helena</option>'+
                                '<option value="St Kitts-Nevis">St Kitts-Nevis</option>'+
                                '<option value="St Lucia">St Lucia</option>'+
                                '<option value="St Maarten">St Maarten</option>'+
                                '<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>'+
                                '<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>'+
                                '<option value="Saipan">Saipan</option>'+
                                '<option value="Samoa">Samoa</option>'+
                                '<option value="Samoa American">Samoa American</option>'+
                                '<option value="San Marino">San Marino</option>'+
                                '<option value="Sao Tome & Principe">Sao Tome & Principe</option>'+
                                '<option value="Saudi Arabia">Saudi Arabia</option>'+
                                '<option value="Senegal">Senegal</option>'+
                                '<option value="Seychelles">Seychelles</option>'+
                                '<option value="Sierra Leone">Sierra Leone</option>'+
                                '<option value="Singapore">Singapore</option>'+
                                '<option value="Slovakia">Slovakia</option>'+
                                '<option value="Slovenia">Slovenia</option>'+
                                '<option value="Solomon Islands">Solomon Islands</option>'+
                                '<option value="Somalia">Somalia</option>'+
                                '<option value="South Africa">South Africa</option>'+
                                '<option value="Spain">Spain</option>'+
                                '<option value="Sri Lanka">Sri Lanka</option>'+
                                '<option value="Sudan">Sudan</option>'+
                                '<option value="Suriname">Suriname</option>'+
                                '<option value="Swaziland">Swaziland</option>'+
                                '<option value="Sweden">Sweden</option>'+
                                '<option value="Switzerland">Switzerland</option>'+
                                '<option value="Syria">Syria</option>'+
                                '<option value="Tahiti">Tahiti</option>'+
                                '<option value="Taiwan">Taiwan</option>'+
                                '<option value="Tajikistan">Tajikistan</option>'+
                                '<option value="Tanzania">Tanzania</option>'+
                                '<option value="Thailand">Thailand</option>'+
                                '<option value="Togo">Togo</option>'+
                                '<option value="Tokelau">Tokelau</option>'+
                                '<option value="Tonga">Tonga</option>'+
                                '<option value="Trinidad & Tobago">Trinidad & Tobago</option>'+
                                '<option value="Tunisia">Tunisia</option>'+
                                '<option value="Turkey">Turkey</option>'+
                                '<option value="Turkmenistan">Turkmenistan</option>'+
                                '<option value="Turks & Caicos Is">Turks & Caicos Is</option>'+
                                '<option value="Tuvalu">Tuvalu</option>'+
                                '<option value="Uganda">Uganda</option>'+
                                '<option value="United Kingdom">United Kingdom</option>'+
                                '<option value="Ukraine">Ukraine</option>'+
                                '<option value="United Arab Erimates">United Arab Emirates</option>'+
                                '<option value="United States of America">United States of America</option>'+
                                '<option value="Uraguay">Uruguay</option>'+
                                '<option value="Uzbekistan">Uzbekistan</option>'+
                                '<option value="Vanuatu">Vanuatu</option>'+
                                '<option value="Vatican City State">Vatican City State</option>'+
                                '<option value="Venezuela">Venezuela</option>'+
                                '<option value="Vietnam">Vietnam</option>'+
                                '<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>'+
                                '<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>'+
                                '<option value="Wake Island">Wake Island</option>'+
                                '<option value="Wallis & Futana Is">Wallis & Futana Is</option>'+
                                '<option value="Yemen">Yemen</option>'+
                                '<option value="Zaire">Zaire</option>'+
                                '<option value="Zambia">Zambia</option>'+
                                '<option value="Zimbabwe">Zimbabwe</option>'+
                                '</select>'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Bank Name</label>'+
                                '<input type="text" placeholder="Enter Bank Name" class="form-control" name="bank_name[]"/>'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Bank Branch</label>'+
                                '<input type="text" placeholder="Enter Bank Branch" class="form-control" name="bank_branch[]"/>'+
                                '</div>'+
                                '</div>'+

                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Bank Address</label>'+
                                '<input type="text" placeholder="Bank Address" class="form-control" name="bank_address[]"/>'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label>Bank Country</label>'+
                                '<select class="select2 form-control" style="width: 100%;" name="bank_country[]">'+
                                '<option value="" selected disabled>Please Select One</option>'+
                                '<option value="Afganistan">Afghanistan</option>'+
                                '<option value="Albania">Albania</option>'+
                                '<option value="Algeria">Algeria</option>'+
                                '<option value="American Samoa">American Samoa</option>'+
                                '<option value="Andorra">Andorra</option>'+
                                '<option value="Angola">Angola</option>'+
                                '<option value="Anguilla">Anguilla</option>'+
                                '<option value="Antigua & Barbuda">Antigua & Barbuda</option>'+
                                '<option value="Argentina">Argentina</option>'+
                                '<option value="Armenia">Armenia</option>'+
                                '<option value="Aruba">Aruba</option>'+
                                '<option value="Australia">Australia</option>'+
                                '<option value="Austria">Austria</option>'+
                                '<option value="Azerbaijan">Azerbaijan</option>'+
                                '<option value="Bahamas">Bahamas</option>'+
                                '<option value="Bahrain">Bahrain</option>'+
                                '<option value="Bangladesh">Bangladesh</option>'+
                                '<option value="Barbados">Barbados</option>'+
                                '<option value="Belarus">Belarus</option>'+
                                '<option value="Belgium">Belgium</option>'+
                                '<option value="Belize">Belize</option>'+
                                '<option value="Benin">Benin</option>'+
                                '<option value="Bermuda">Bermuda</option>'+
                                '<option value="Bhutan">Bhutan</option>'+
                                '<option value="Bolivia">Bolivia</option>'+
                                '<option value="Bonaire">Bonaire</option>'+
                                '<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>'+
                                '<option value="Botswana">Botswana</option>'+
                                '<option value="Brazil">Brazil</option>'+
                                '<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>'+
                                '<option value="Brunei">Brunei</option>'+
                                '<option value="Bulgaria">Bulgaria</option>'+
                                '<option value="Burkina Faso">Burkina Faso</option>'+
                                '<option value="Burundi">Burundi</option>'+
                                '<option value="Cambodia">Cambodia</option>'+
                                '<option value="Cameroon">Cameroon</option>'+
                                '<option value="Canada">Canada</option>'+
                                '<option value="Canary Islands">Canary Islands</option>'+
                                '<option value="Cape Verde">Cape Verde</option>'+
                                '<option value="Cayman Islands">Cayman Islands</option>'+
                                '<option value="Central African Republic">Central African Republic</option>'+
                                '<option value="Chad">Chad</option>'+
                                '<option value="Channel Islands">Channel Islands</option>'+
                                '<option value="Chile">Chile</option>'+
                                '<option value="China">China</option>'+
                                '<option value="Christmas Island">Christmas Island</option>'+
                                '<option value="Cocos Island">Cocos Island</option>'+
                                '<option value="Colombia">Colombia</option>'+
                                '<option value="Comoros">Comoros</option>'+
                                '<option value="Congo">Congo</option>'+
                                '<option value="Cook Islands">Cook Islands</option>'+
                                '<option value="Costa Rica">Costa Rica</option>'+
                                '<option value="Cote DIvoire">Cote DIvoire</option>'+
                                '<option value="Croatia">Croatia</option>'+
                                '<option value="Cuba">Cuba</option>'+
                                '<option value="Curaco">Curacao</option>'+
                                '<option value="Cyprus">Cyprus</option>'+
                                '<option value="Czech Republic">Czech Republic</option>'+
                                '<option value="Denmark">Denmark</option>'+
                                '<option value="Djibouti">Djibouti</option>'+
                                '<option value="Dominica">Dominica</option>'+
                                '<option value="Dominican Republic">Dominican Republic</option>'+
                                '<option value="East Timor">East Timor</option>'+
                                '<option value="Ecuador">Ecuador</option>'+
                                '<option value="Egypt">Egypt</option>'+
                                '<option value="El Salvador">El Salvador</option>'+
                                '<option value="Equatorial Guinea">Equatorial Guinea</option>'+
                                '<option value="Eritrea">Eritrea</option>'+
                                '<option value="Estonia">Estonia</option>'+
                                '<option value="Ethiopia">Ethiopia</option>'+
                                '<option value="Falkland Islands">Falkland Islands</option>'+
                                '<option value="Faroe Islands">Faroe Islands</option>'+
                                '<option value="Fiji">Fiji</option>'+
                                '<option value="Finland">Finland</option>'+
                                '<option value="France">France</option>'+
                                '<option value="French Guiana">French Guiana</option>'+
                                '<option value="French Polynesia">French Polynesia</option>'+
                                '<option value="French Southern Ter">French Southern Ter</option>'+
                                '<option value="Gabon">Gabon</option>'+
                                '<option value="Gambia">Gambia</option>'+
                                '<option value="Georgia">Georgia</option>'+
                                '<option value="Germany">Germany</option>'+
                                '<option value="Ghana">Ghana</option>'+
                                '<option value="Gibraltar">Gibraltar</option>'+
                                '<option value="Great Britain">Great Britain</option>'+
                                '<option value="Greece">Greece</option>'+
                                '<option value="Greenland">Greenland</option>'+
                                '<option value="Grenada">Grenada</option>'+
                                '<option value="Guadeloupe">Guadeloupe</option>'+
                                '<option value="Guam">Guam</option>'+
                                '<option value="Guatemala">Guatemala</option>'+
                                '<option value="Guinea">Guinea</option>'+
                                '<option value="Guyana">Guyana</option>'+
                                '<option value="Haiti">Haiti</option>'+
                                '<option value="Hawaii">Hawaii</option>'+
                                '<option value="Honduras">Honduras</option>'+
                                '<option value="Hong Kong">Hong Kong</option>'+
                                '<option value="Hungary">Hungary</option>'+
                                '<option value="Iceland">Iceland</option>'+
                                '<option value="Indonesia">Indonesia</option>'+
                                '<option value="India">India</option>'+
                                '<option value="Iran">Iran</option>'+
                                '<option value="Iraq">Iraq</option>'+
                                '<option value="Ireland">Ireland</option>'+
                                '<option value="Isle of Man">Isle of Man</option>'+
                                '<option value="Israel">Israel</option>'+
                                '<option value="Italy">Italy</option>'+
                                '<option value="Jamaica">Jamaica</option>'+
                                '<option value="Japan">Japan</option>'+
                                '<option value="Jordan">Jordan</option>'+
                                '<option value="Kazakhstan">Kazakhstan</option>'+
                                '<option value="Kenya">Kenya</option>'+
                                '<option value="Kiribati">Kiribati</option>'+
                                '<option value="Korea North">Korea North</option>'+
                                '<option value="Korea Sout">Korea South</option>'+
                                '<option value="Kuwait">Kuwait</option>'+
                                '<option value="Kyrgyzstan">Kyrgyzstan</option>'+
                                '<option value="Laos">Laos</option>'+
                                '<option value="Latvia">Latvia</option>'+
                                '<option value="Lebanon">Lebanon</option>'+
                                '<option value="Lesotho">Lesotho</option>'+
                                '<option value="Liberia">Liberia</option>'+
                                '<option value="Libya">Libya</option>'+
                               '<option value="Liechtenstein">Liechtenstein</option>'+
                              '<option value="Lithuania">Lithuania</option>'+
                                '<option value="Luxembourg">Luxembourg</option>'+
                                '<option value="Macau">Macau</option>'+
                                '<option value="Macedonia">Macedonia</option>'+
                                '<option value="Madagascar">Madagascar</option>'+
                                '<option value="Malaysia">Malaysia</option>'+
                                '<option value="Malawi">Malawi</option>'+
                                '<option value="Maldives">Maldives</option>'+
                                '<option value="Mali">Mali</option>'+
                                '<option value="Malta">Malta</option>'+
                                '<option value="Marshall Islands">Marshall Islands</option>'+
                                '<option value="Martinique">Martinique</option>'+
                                '<option value="Mauritania">Mauritania</option>'+
                                '<option value="Mauritius">Mauritius</option>'+
                                '<option value="Mayotte">Mayotte</option>'+
                                '<option value="Mexico">Mexico</option>'+
                                '<option value="Midway Islands">Midway Islands</option>'+
                                '<option value="Moldova">Moldova</option>'+
                                '<option value="Monaco">Monaco</option>'+
                               '<option value="Mongolia">Mongolia</option>'+
                                '<option value="Montserrat">Montserrat</option>'+
                                '<option value="Morocco">Morocco</option>'+
                                '<option value="Mozambique">Mozambique</option>'+
                                '<option value="Myanmar">Myanmar</option>'+
                                '<option value="Nambia">Nambia</option>'+
                                '<option value="Nauru">Nauru</option>'+
                                '<option value="Nepal">Nepal</option>'+
                                '<option value="Netherland Antilles">Netherland Antilles</option>'+
                                '<option value="Netherlands">Netherlands (Holland, Europe)</option>'+
                                '<option value="Nevis">Nevis</option>'+
                                '<option value="New Caledonia">New Caledonia</option>'+
                                '<option value="New Zealand">New Zealand</option>'+
                                '<option value="Nicaragua">Nicaragua</option>'+
                                '<option value="Niger">Niger</option>'+
                                '<option value="Nigeria">Nigeria</option>'+
                                '<option value="Niue">Niue</option>'+
                                '<option value="Norfolk Island">Norfolk Island</option>'+
                                '<option value="Norway">Norway</option>'+
                                '<option value="Oman">Oman</option>'+
                                '<option value="Pakistan">Pakistan</option>'+
                                '<option value="Palau Island">Palau Island</option>'+
                                '<option value="Palestine">Palestine</option>'+
                                '<option value="Panama">Panama</option>'+
                                '<option value="Papua New Guinea">Papua New Guinea</option>'+
                                '<option value="Paraguay">Paraguay</option>'+
                                '<option value="Peru">Peru</option>'+
                                '<option value="Phillipines">Philippines</option>'+
                                '<option value="Pitcairn Island">Pitcairn Island</option>'+
                                '<option value="Poland">Poland</option>'+
                                '<option value="Portugal">Portugal</option>'+
                                '<option value="Puerto Rico">Puerto Rico</option>'+
                                '<option value="Qatar">Qatar</option>'+
                                '<option value="Republic of Montenegro">Republic of Montenegro</option>'+
                                '<option value="Republic of Serbia">Republic of Serbia</option>'+
                                '<option value="Reunion">Reunion</option>'+
                                '<option value="Romania">Romania</option>'+
                                '<option value="Russia">Russia</option>'+
                                '<option value="Rwanda">Rwanda</option>'+
                                '<option value="St Barthelemy">St Barthelemy</option>'+
                                '<option value="St Eustatius">St Eustatius</option>'+
                                '<option value="St Helena">St Helena</option>'+
                                '<option value="St Kitts-Nevis">St Kitts-Nevis</option>'+
                                '<option value="St Lucia">St Lucia</option>'+
                                '<option value="St Maarten">St Maarten</option>'+
                                '<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>'+
                                '<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>'+
                                '<option value="Saipan">Saipan</option>'+
                                '<option value="Samoa">Samoa</option>'+
                                '<option value="Samoa American">Samoa American</option>'+
                                '<option value="San Marino">San Marino</option>'+
                                '<option value="Sao Tome & Principe">Sao Tome & Principe</option>'+
                                '<option value="Saudi Arabia">Saudi Arabia</option>'+
                                '<option value="Senegal">Senegal</option>'+
                                '<option value="Seychelles">Seychelles</option>'+
                                '<option value="Sierra Leone">Sierra Leone</option>'+
                                '<option value="Singapore">Singapore</option>'+
                                '<option value="Slovakia">Slovakia</option>'+
                                '<option value="Slovenia">Slovenia</option>'+
                                '<option value="Solomon Islands">Solomon Islands</option>'+
                                '<option value="Somalia">Somalia</option>'+
                                '<option value="South Africa">South Africa</option>'+
                                '<option value="Spain">Spain</option>'+
                                '<option value="Sri Lanka">Sri Lanka</option>'+
                                '<option value="Sudan">Sudan</option>'+
                                '<option value="Suriname">Suriname</option>'+
                                '<option value="Swaziland">Swaziland</option>'+
                                '<option value="Sweden">Sweden</option>'+
                                '<option value="Switzerland">Switzerland</option>'+
                                '<option value="Syria">Syria</option>'+
                                '<option value="Tahiti">Tahiti</option>'+
                                '<option value="Taiwan">Taiwan</option>'+
                                '<option value="Tajikistan">Tajikistan</option>'+
                                '<option value="Tanzania">Tanzania</option>'+
                                '<option value="Thailand">Thailand</option>'+
                                '<option value="Togo">Togo</option>'+
                                '<option value="Tokelau">Tokelau</option>'+
                                '<option value="Tonga">Tonga</option>'+
                                '<option value="Trinidad & Tobago">Trinidad & Tobago</option>'+
                                '<option value="Tunisia">Tunisia</option>'+
                                '<option value="Turkey">Turkey</option>'+
                                '<option value="Turkmenistan">Turkmenistan</option>'+
                                '<option value="Turks & Caicos Is">Turks & Caicos Is</option>'+
                                '<option value="Tuvalu">Tuvalu</option>'+
                                '<option value="Uganda">Uganda</option>'+
                                '<option value="United Kingdom">United Kingdom</option>'+
                                '<option value="Ukraine">Ukraine</option>'+
                                '<option value="United Arab Erimates">United Arab Emirates</option>'+
                                '<option value="United States of America">United States of America</option>'+
                                '<option value="Uraguay">Uruguay</option>'+
                                '<option value="Uzbekistan">Uzbekistan</option>'+
                                '<option value="Vanuatu">Vanuatu</option>'+
                                '<option value="Vatican City State">Vatican City State</option>'+
                                '<option value="Venezuela">Venezuela</option>'+
                                '<option value="Vietnam">Vietnam</option>'+
                                '<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>'+
                                '<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>'+
                                '<option value="Wake Island">Wake Island</option>'+
                                '<option value="Wallis & Futana Is">Wallis & Futana Is</option>'+
                                '<option value="Yemen">Yemen</option>'+
                                '<option value="Zaire">Zaire</option>'+
                                '<option value="Zambia">Zambia</option>'+
                                '<option value="Zimbabwe">Zimbabwe</option>'+
                                '</select>'+
                                '</div>'+
                                '</div>'+

                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Bank SWIFT *</label>'+
                                '<input type="text" placeholder="Enter Bank SWIFT" class="form-control" name="bank_swift[]" required />'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label for="description">Account Number/IBAN *</label>'+
                                '<input type="text" placeholder="Enter Account Number" class="form-control" name="account_number[]" required />'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                 '<label>Currency *</label>'+
                                 '<select class="form-control select2" style="width: 100%;" name="currency[]" required>'+
                                '<option value="" selected disabled>Please Select One</option>'+
                                '<option value="USD">USD</option>' +
                '<option value="EUR">EUR</option>' +
                '<option value="GBP">GBP</option>' +
                '<option value="DZD">DZD</option>' +
                '<option value = "AED" >AED</option>' +
                '<option value = "ARP" >ARP</option>' +
                '<option value = "AUD" >AUD</option>' +
                '<option value = "ATS" > ATS </option>' +
                '<option value = "BSD" > BSD </option>' + 
                '<option value = "BBD" > BBD </option>' + 
                '<option value = "BEF" > BEF </option>' + 
                '<option value = "BMD" > BMD </option>' +
                '<option value = "BRR" > BRR </option>' +
                '<option value = "BGN" > BGN </option>'+
                '<option value = "CAD" > CAD </option>'+
                '<option value = "CLP" > CLP </option> '+
                '<option value = "CNY" > CNY </option> '+
                '<option value = "CYP" > CYP </option> '+
                '<option value = "CSK" > CSK </option> '+
                '<option value = "DKK" > DKK </option> '+
                '<option value = "NLG" > NLG </option> '+
                '<option value = "XCD" > XCD </option> '+
                '<option value = "EGP" > EGP </option> '+
                '<option value = "FJD" > FJD </option> '+
                '<option value = "FIM" > FIM </option> '+
                '<option value = "FRF" > FRF </option> '+
                '<option value = "DEM" > DEM </option> '+
                '<option value = "XAU" > XAU </option> '+
                '<option value = "GRD" > GRD </option> '+
                '<option value = "HKD" > HKD </option> '+
                '<option value = "HUF" > HUF </option> '+
                '<option value = "ISK" > ISK </option> '+
                '<option value = "INR" > INR </option> '+
                '<option value = "IDR" > IDR </option> '+
                '<option value = "IEP" > IEP </option> '+
                '<option value = "ILS" > ILS </option> '+
                '<option value = "ITL" > ITL </option> '+
                '<option value = "JMD" > JMD < /option> '+
                '<option value = "JPY" > JPY < /option> '+
                '<option value = "JOD" > JOD < /option> '+
                '<option value = "KRW" > KRW < /option> '+
                '<option value = "LBP" > LBP < /option> '+
                '<option value = "LUF" > LUF < /option> '+
                '<option value = "MYR" > MYR < /option> '+
                '<option value = "MXP" > MXP < /option> '+
                '<option value = "NLG" > NLG < /option> '+
                '<option value = "NZD" > NZD < /option> '+
                '<option value = "NOK" > NOK < /option> '+
                '<option value = "PKR" > PKR < /option>'+
                '<option value = "XPD" > XPD < /option> '+
                '<option value = "PHP" > PHP < /option> '+
                '<option value = "XPT" > XPT < /option> '+
                '<option value = "PLZ" > PLZ < /option> '+
                '<option value = "PTE" > PTE < /option> '+
                '<option value = "ROL" > ROL < /option> '+
                '<option value = "RUR" > RUR < /option> '+
                '<option value = "SAR" > SAR < /option> '+
                '<option value = "XAG" > XAG < /option> '+
                '<option value = "SGD" > SGD < /option> '+
                '<option value = "SKK" > SKK < /option> '+
                '<option value = "ZAR" > ZAR < /option> '+
                '<option value = "KRW" > KRW < /option>'+
                '<option value = "ESP" > ESP < /option> '+
                '<option value = "XDR" > XDR < /option> '+
                '<option value = "SDD" > SDD < /option> '+
                '<option value = "SEK" > SEK < /option> '+
                '<option value = "CHF" > CHF < /option> '+
                '<option value = "TWD" > TWD < /option> '+
                '<option value = "THB" > THB < /option> '+
                '<option value = "TTD" > TTD < /option> '+
                '<option value = "TRL" > TRL < /option> '+
                '<option value = "VEB" > VEB < /option> '+
                '<option value = "ZMK" > ZMK < /option> '+
                '<option value = "EUR" > EUR < /option> '+
                '<option value = "XCD" > XCD < /option> '+
                '<option value = "XDR" > XDR < /option> '+
                '<option value = "XAG" > XAG < /option>'+
                '<option value = "XAU" > XAU < /option> '+
                '<option value = "XPD" > XPD < /option> '+
                '<option value = "XPT" > XPT < /option> '+
                '<option value = "BTC" > BTC < /option> '+
                '<option value = "BTC/EUR" > BTC / EUR < /option> '+
                '<option value = "BTC/USD" > BTC / USD < /option> '+
                '<option value = "USDT" > USDT < /option>'+
                '</select>' +
                '</div>' +
                '</div>' +
               '<div class="col-md-6">'+
                '<div class="form-group">'+
                '<label for="description">Remarks</label>'+
                '<input type="text" placeholder="Remarks/ABA Code/Sort Code/Routing Number/IFSc Code" class="form-control" name="remarks[]" />'+
                '</div>'+
                '</div>'+
                
                '<div class="col-md-6">'+
                '<div class="form-group">'+
                '<label for="description">Intermediary Bank Name (Optional)</label>'+
                '<input type="text" placeholder="Enter Intermediary Bank Name" class="form-control" name="intermediary_bank_name[]"/>'+
                '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                '<div class="form-group">'+
                '<label for="description">Intermediary Bank Address (Optional)</label>'+
                '<input type="text" placeholder="Enter Intermediary Bank Address" class="form-control" name="intermediary_bank_address[]"/>'+
                '</div>'+
                '</div>'+
                                           
                 '<div class="col-md-6">'+
                '<div class="form-group">'+
                '<label for="description">Intermediary Bank SWIFT (Optional)</label>'+
                '<input type="text" placeholder="Enter Intermediary Bank SWIFT" class="form-control" name="intermediary_bank_swift[]"/>'+
                '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                '<div class="form-group">'+
                '<label for="description">Intermediary Bank Details Remarks (Optional)</label>'+
                '<input type="text" placeholder="Enter Remark" class="form-control" name="intermediary_bank_details_remarks[]"/>'+
                '</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<a href="javascript:void(0);" name="remove" id="' + i + '" class="btn btn-danger btn-remove form-control remove_btn" ><i class="fa fa-trash" ></i></a>' +
                '</div>' +
                '</div> ');
                              

            $('.btn-remove').click(function() {
                var btnid = $(this).attr('id');
                $('#bank_account_details' + btnid).remove();
            });

        });

    });
</script>

