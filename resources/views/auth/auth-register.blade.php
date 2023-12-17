@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Register')

@section('vendor-style')
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
    
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection

@section('page-script')
    <script>
        let lang = "{{ session()->get('locale') ?? app()->getLocale() }}";
    </script>
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4" style="max-width: 700px;">

                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('assets/img/logo/solo-coloured.png') }}" alt="Brand Logo"
                                        class="img-fluid" />
                                </span>
                                <span
                                    class="app-brand-text demo text-body fw-bold ms-1">{{config('variables.templateName')}}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">{{ __('translate.register') }} 🚀</h4>
                        <p class="mb-4">{{ __('translate.register_text') }} </p>
                        @if($possible == 0)
                        <div class="alert alert-danger d-flex align-items-baseline" role="alert">
                            <span class="alert-icon alert-icon-lg text-danger me-2">
                              <i class="ti ti-user ti-sm"></i>
                            </span>
                            <div class="d-flex flex-column ps-1">
                              <h5 class="alert-heading mb-2">{{__('translate.registration_unavailable')}}</h5>
                              <p class="mb-0">{{__('translate.registration_unavailable_details')}}</p>
                              </button>
                            </div>
                        </div>
                        @else
                        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="register-username" class="form-label">{{ __('translate.username') }}</label>
                                    <input type="text" class="form-control" id="register-username" name="username"
                                        placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus
                                        required />
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="full-name" class="form-label">{{ __('translate.full_name') }}</label>
                                    <input type="text" class="form-control" id="full-name" name="name"
                                        placeholder="Jhone Doe" aria-describedby="full-name" tabindex="1" autofocus
                                        required />
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('translate.address') }}</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="1562 NYC" aria-describedby="address" tabindex="1" autofocus
                                    required />
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="state" class="form-label">{{ __('translate.state_city') }}</label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="Dubai" aria-describedby="state" tabindex="1" autofocus
                                        required />
                                    @error('state')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label for="country" class="form-label">{{ __('translate.country') }}</label>
                                    <select id="country" name="country" class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="ti" data-tick-icon="ti-check" data-style="btn-default" data-live-search="true">
                                        <option data-icon="fi fi-af" value="Afghanistan">Afghanistan</option>
                                        <option data-icon="fi fi-ax" value="Åland Islands">Åland Islands</option>
                                        <option data-icon="fi fi-al" value="Albania">Albania</option>
                                        <option data-icon="fi fi-dz" value="Algeria">Algeria</option>
                                        <option data-icon="fi fi-as" value="American Samoa">American Samoa</option>
                                        <option data-icon="fi fi-ad" value="Andorra">Andorra</option>
                                        <option data-icon="fi fi-ao" value="Angola">Angola</option>
                                        <option data-icon="fi fi-ai" value="Anguilla">Anguilla</option>
                                        <option data-icon="fi fi-aq" value="Antarctica">Antarctica</option>
                                        <option data-icon="fi fi-ag" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option data-icon="fi fi-ar" value="Argentina">Argentina</option>
                                        <option data-icon="fi fi-am" value="Armenia">Armenia</option>
                                        <option data-icon="fi fi-aw" value="Aruba">Aruba</option>
                                        <option data-icon="fi fi-au" value="Australia">Australia</option>
                                        <option data-icon="fi fi-at" value="Austria">Austria</option>
                                        <option data-icon="fi fi-az" value="Azerbaijan">Azerbaijan</option>
                                        <option data-icon="fi fi-bs" value="Bahamas">Bahamas</option>
                                        <option data-icon="fi fi-bh" value="Bahrain">Bahrain</option>
                                        <option data-icon="fi fi-bd" value="Bangladesh">Bangladesh</option>
                                        <option data-icon="fi fi-bb" value="Barbados">Barbados</option>
                                        <option data-icon="fi fi-by" value="Belarus">Belarus</option>
                                        <option data-icon="fi fi-be" value="Belgium">Belgium</option>
                                        <option data-icon="fi fi-bz" value="Belize">Belize</option>
                                        <option data-icon="fi fi-bj" value="Benin">Benin</option>
                                        <option data-icon="fi fi-bm" value="Bermuda">Bermuda</option>
                                        <option data-icon="fi fi-bt" value="Bhutan">Bhutan</option>
                                        <option data-icon="fi fi-bo" value="Bolivia">Bolivia</option>
                                        <option data-icon="fi fi-bq" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                        <option data-icon="fi fi-ba" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option data-icon="fi fi-bw" value="Botswana">Botswana</option>
                                        <option data-icon="fi fi-bv" value="Bouvet Island">Bouvet Island</option>
                                        <option data-icon="fi fi-br" value="Brazil">Brazil</option>
                                        <option data-icon="fi fi-io" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option data-icon="fi fi-bn" value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option data-icon="fi fi-bg" value="Bulgaria">Bulgaria</option>
                                        <option data-icon="fi fi-bf" value="Burkina Faso">Burkina Faso</option>
                                        <option data-icon="fi fi-bi" value="Burundi">Burundi</option>
                                        <option data-icon="fi fi-cv" value="Cambodia">Cambodia</option>
                                        <option data-icon="fi fi-kh" value="Cameroon">Cameroon</option>
                                        <option data-icon="fi fi-cm" value="Canada">Canada</option>
                                        <option data-icon="fi fi-ca" value="Cape Verde">Cape Verde</option>
                                        <option data-icon="fi fi-ky" value="Cayman Islands">Cayman Islands</option>
                                        <option data-icon="fi fi-cf" value="Central African Republic">Central African Republic</option>
                                        <option data-icon="fi fi-td" value="Chad">Chad</option>
                                        <option data-icon="fi fi-cl" value="Chile">Chile</option>
                                        <option data-icon="fi fi-cn" value="China">China</option>
                                        <option data-icon="fi fi-cx" value="Christmas Island">Christmas Island</option>
                                        <option data-icon="fi fi-cc" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option data-icon="fi fi-co" value="Colombia">Colombia</option>
                                        <option data-icon="fi fi-km" value="Comoros">Comoros</option>
                                        <option data-icon="fi fi-ck" value="Cook Islands">Cook Islands</option>
                                        <option data-icon="fi fi-cr" value="Costa Rica">Costa Rica</option>
                                        <option data-icon="fi fi-hr" value="Croatia">Croatia</option>
                                        <option data-icon="fi fi-cu" value="Cuba">Cuba</option>
                                        <option data-icon="fi fi-cw" value="Curaçao">Curaçao</option>
                                        <option data-icon="fi fi-cy" value="Cyprus">Cyprus</option>
                                        <option data-icon="fi fi-cz" value="Czech Republic">Czech Republic</option>
                                        <option data-icon="fi fi-dk" value="Denmark">Denmark</option>
                                        <option data-icon="fi fi-dj" value="Djibouti">Djibouti</option>
                                        <option data-icon="fi fi-dm" value="Dominica">Dominica</option>
                                        <option data-icon="fi fi-do" value="Dominican Republic">Dominican Republic</option>
                                        <option data-icon="fi fi-ec" value="Ecuador">Ecuador</option>
                                        <option data-icon="fi fi-eg" value="Egypt">Egypt</option>
                                        <option data-icon="fi fi-sv" value="El Salvador">El Salvador</option>
                                        <option data-icon="fi fi-gq" value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option data-icon="fi fi-er" value="Eritrea">Eritrea</option>
                                        <option data-icon="fi fi-ee" value="Estonia">Estonia</option>
                                        <option data-icon="fi fi-et" value="Ethiopia">Ethiopia</option>
                                        <option data-icon="fi fi-fk" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option data-icon="fi fi-fo" value="Faroe Islands">Faroe Islands</option>
                                        <option data-icon="fi fi-fj" value="Fiji">Fiji</option>
                                        <option data-icon="fi fi-fi" value="Finland">Finland</option>
                                        <option data-icon="fi fi-fr" value="France">France</option>
                                        <option data-icon="fi fi-gf" value="French Guiana">French Guiana</option>
                                        <option data-icon="fi fi-pf" value="French Polynesia">French Polynesia</option>
                                        <option data-icon="fi fi-tf" value="French Southern Territories">French Southern Territories</option>
                                        <option data-icon="fi fi-ga" value="Gabon">Gabon</option>
                                        <option data-icon="fi fi-gm" value="Gambia">Gambia</option>
                                        <option data-icon="fi fi-ge" value="Georgia">Georgia</option>
                                        <option data-icon="fi fi-de" value="Germany">Germany</option>
                                        <option data-icon="fi fi-gh" value="Ghana">Ghana</option>
                                        <option data-icon="fi fi-gi" value="Gibraltar">Gibraltar</option>
                                        <option data-icon="fi fi-gr" value="Greece">Greece</option>
                                        <option data-icon="fi fi-gl" value="Greenland">Greenland</option>
                                        <option data-icon="fi fi-gd" value="Grenada">Grenada</option>
                                        <option data-icon="fi fi-gp" value="Guadeloupe">Guadeloupe</option>
                                        <option data-icon="fi fi-gu" value="Guam">Guam</option>
                                        <option data-icon="fi fi-gt" value="Guatemala">Guatemala</option>
                                        <option data-icon="fi fi-gg" value="Guernsey">Guernsey</option>
                                        <option data-icon="fi fi-gn" value="Guinea">Guinea</option>
                                        <option data-icon="fi fi-gw" value="Guinea-bissau">Guinea-bissau</option>
                                        <option data-icon="fi fi-gy" value="Guyana">Guyana</option>
                                        <option data-icon="fi fi-ht" value="Haiti">Haiti</option>
                                        <option data-icon="fi fi-hm" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option data-icon="fi fi-va" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option data-icon="fi fi-hn" value="Honduras">Honduras</option>
                                        <option data-icon="fi fi-hk" value="Hong Kong">Hong Kong</option>
                                        <option data-icon="fi fi-hu" value="Hungary">Hungary</option>
                                        <option data-icon="fi fi-is" value="Iceland">Iceland</option>
                                        <option data-icon="fi fi-in" value="India">India</option>
                                        <option data-icon="fi fi-id" value="Indonesia">Indonesia</option>
                                        <option data-icon="fi fi-ir" value="Iran">Iran</option>
                                        <option data-icon="fi fi-iq" value="Iraq">Iraq</option>
                                        <option data-icon="fi fi-ie" value="Ireland">Ireland</option>
                                        <option data-icon="fi fi-im" value="Isle of Man">Isle of Man</option>
                                        <option data-icon="fi fi-it" value="Italy">Italy</option>
                                        <option data-icon="fi fi-jm" value="Jamaica">Jamaica</option>
                                        <option data-icon="fi fi-jp" value="Japan">Japan</option>
                                        <option data-icon="fi fi-je" value="Jersey">Jersey</option>
                                        <option data-icon="fi fi-jo" value="Jordan">Jordan</option>
                                        <option data-icon="fi fi-ax" value="Kazakhstan">Kazakhstan</option>
                                        <option data-icon="fi fi-ax" value="Kenya">Kenya</option>
                                        <option data-icon="fi fi-ax" value="Kiribati">Kiribati</option>
                                        <option data-icon="fi fi-ax" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option data-icon="fi fi-ax" value="Korea, Republic of">Korea, Republic of</option>
                                        <option data-icon="fi fi-ax" value="Kuwait">Kuwait</option>
                                        <option data-icon="fi fi-ax" value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option data-icon="fi fi-ax" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option data-icon="fi fi-ax" value="Latvia">Latvia</option>
                                        <option data-icon="fi fi-ax" value="Lebanon">Lebanon</option>
                                        <option data-icon="fi fi-ax" value="Lesotho">Lesotho</option>
                                        <option data-icon="fi fi-ax" value="Liberia">Liberia</option>
                                        <option data-icon="fi fi-ax" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option data-icon="fi fi-ax" value="Liechtenstein">Liechtenstein</option>
                                        <option data-icon="fi fi-ax" value="Lithuania">Lithuania</option>
                                        <option data-icon="fi fi-ax" value="Luxembourg">Luxembourg</option>
                                        <option data-icon="fi fi-ax" value="Macao">Macao</option>
                                        <option data-icon="fi fi-ax" value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option data-icon="fi fi-ax" value="Madagascar">Madagascar</option>
                                        <option data-icon="fi fi-ax" value="Malawi">Malawi</option>
                                        <option data-icon="fi fi-ax" value="Malaysia">Malaysia</option>
                                        <option data-icon="fi fi-ax" value="Maldives">Maldives</option>
                                        <option data-icon="fi fi-ax" value="Mali">Mali</option>
                                        <option data-icon="fi fi-ax" value="Malta">Malta</option>
                                        <option data-icon="fi fi-ax" value="Marshall Islands">Marshall Islands</option>
                                        <option data-icon="fi fi-ax" value="Martinique">Martinique</option>
                                        <option data-icon="fi fi-ax" value="Mauritania">Mauritania</option>
                                        <option data-icon="fi fi-ax" value="Mauritius">Mauritius</option>
                                        <option data-icon="fi fi-ax" value="Mayotte">Mayotte</option>
                                        <option data-icon="fi fi-ax" value="Mexico">Mexico</option>
                                        <option data-icon="fi fi-ax" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option data-icon="fi fi-ax" value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option data-icon="fi fi-ax" value="Monaco">Monaco</option>
                                        <option data-icon="fi fi-ax" value="Mongolia">Mongolia</option>
                                        <option data-icon="fi fi-ax" value="Montenegro">Montenegro</option>
                                        <option data-icon="fi fi-ax" value="Montserrat">Montserrat</option>
                                        <option data-icon="fi fi-ax" value="Morocco">Morocco</option>
                                        <option data-icon="fi fi-ax" value="Mozambique">Mozambique</option>
                                        <option data-icon="fi fi-ax" value="Myanmar">Myanmar</option>
                                        <option data-icon="fi fi-ax" value="Namibia">Namibia</option>
                                        <option data-icon="fi fi-ax" value="Nauru">Nauru</option>
                                        <option data-icon="fi fi-ax" value="Nepal">Nepal</option>
                                        <option data-icon="fi fi-ax" value="Netherlands">Netherlands</option>
                                        <option data-icon="fi fi-ax" value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option data-icon="fi fi-ax" value="New Caledonia">New Caledonia</option>
                                        <option data-icon="fi fi-ax" value="New Zealand">New Zealand</option>
                                        <option data-icon="fi fi-ax" value="Nicaragua">Nicaragua</option>
                                        <option data-icon="fi fi-ax" value="Niger">Niger</option>
                                        <option data-icon="fi fi-ax" value="Nigeria">Nigeria</option>
                                        <option data-icon="fi fi-ax" value="Niue">Niue</option>
                                        <option data-icon="fi fi-ax" value="Norfolk Island">Norfolk Island</option>
                                        <option data-icon="fi fi-ax" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option data-icon="fi fi-ax" value="Norway">Norway</option>
                                        <option data-icon="fi fi-ax" value="Oman">Oman</option>
                                        <option data-icon="fi fi-ax" value="Pakistan">Pakistan</option>
                                        <option data-icon="fi fi-ax" value="Palau">Palau</option>
                                        <option data-icon="fi fi-ax" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option data-icon="fi fi-ax" value="Panama">Panama</option>
                                        <option data-icon="fi fi-ax" value="Papua New Guinea">Papua New Guinea</option>
                                        <option data-icon="fi fi-ax" value="Paraguay">Paraguay</option>
                                        <option data-icon="fi fi-ax" value="Peru">Peru</option>
                                        <option data-icon="fi fi-ax" value="Philippines">Philippines</option>
                                        <option data-icon="fi fi-ax" value="Pitcairn">Pitcairn</option>
                                        <option data-icon="fi fi-ax" value="Poland">Poland</option>
                                        <option data-icon="fi fi-ax" value="Portugal">Portugal</option>
                                        <option data-icon="fi fi-ax" value="Puerto Rico">Puerto Rico</option>
                                        <option data-icon="fi fi-ax" value="Qatar">Qatar</option>
                                        <option data-icon="fi fi-ax" value="Reunion">Reunion</option>
                                        <option data-icon="fi fi-ax" value="Romania">Romania</option>
                                        <option data-icon="fi fi-ax" value="Russian Federation">Russian Federation</option>
                                        <option data-icon="fi fi-ax" value="Rwanda">Rwanda</option>
                                        <option data-icon="fi fi-ax" value="Saint Helena">Saint Helena</option>
                                        <option data-icon="fi fi-ax" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option data-icon="fi fi-ax" value="Saint Lucia">Saint Lucia</option>
                                        <option data-icon="fi fi-ax" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option data-icon="fi fi-ax" value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option data-icon="fi fi-ax" value="Samoa">Samoa</option>
                                        <option data-icon="fi fi-ax" value="San Marino">San Marino</option>
                                        <option data-icon="fi fi-ax" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option data-icon="fi fi-ax" value="Saudi Arabia">Saudi Arabia</option>
                                        <option data-icon="fi fi-ax" value="Senegal">Senegal</option>
                                        <option data-icon="fi fi-ax" value="Serbia">Serbia</option>
                                        <option data-icon="fi fi-ax" value="Seychelles">Seychelles</option>
                                        <option data-icon="fi fi-ax" value="Sierra Leone">Sierra Leone</option>
                                        <option data-icon="fi fi-ax" value="Singapore">Singapore</option>
                                        <option data-icon="fi fi-ax" value="Slovakia">Slovakia</option>
                                        <option data-icon="fi fi-ax" value="Slovenia">Slovenia</option>
                                        <option data-icon="fi fi-ax" value="Solomon Islands">Solomon Islands</option>
                                        <option data-icon="fi fi-ax" value="Somalia">Somalia</option>
                                        <option data-icon="fi fi-ax" value="South Africa">South Africa</option>
                                        <option data-icon="fi fi-ax" value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option data-icon="fi fi-ax" value="Spain">Spain</option>
                                        <option data-icon="fi fi-ax" value="Sri Lanka">Sri Lanka</option>
                                        <option data-icon="fi fi-ax" value="Sudan">Sudan</option>
                                        <option data-icon="fi fi-ax" value="Suriname">Suriname</option>
                                        <option data-icon="fi fi-ax" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option data-icon="fi fi-ax" value="Swaziland">Swaziland</option>
                                        <option data-icon="fi fi-ax" value="Sweden">Sweden</option>
                                        <option data-icon="fi fi-ax" value="Switzerland">Switzerland</option>
                                        <option data-icon="fi fi-ax" value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option data-icon="fi fi-ax" value="Taiwan">Taiwan</option>
                                        <option data-icon="fi fi-ax" value="Tajikistan">Tajikistan</option>
                                        <option data-icon="fi fi-ax" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option data-icon="fi fi-ax" value="Thailand">Thailand</option>
                                        <option data-icon="fi fi-ax" value="Timor-leste">Timor-leste</option>
                                        <option data-icon="fi fi-ax" value="Togo">Togo</option>
                                        <option data-icon="fi fi-ax" value="Tokelau">Tokelau</option>
                                        <option data-icon="fi fi-ax" value="Tonga">Tonga</option>
                                        <option data-icon="fi fi-ax" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option data-icon="fi fi-ax" value="Tunisia">Tunisia</option>
                                        <option data-icon="fi fi-ax" value="Turkey">Turkey</option>
                                        <option data-icon="fi fi-ax" value="Turkmenistan">Turkmenistan</option>
                                        <option data-icon="fi fi-ax" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option data-icon="fi fi-ax" value="Tuvalu">Tuvalu</option>
                                        <option data-icon="fi fi-ax" value="Uganda">Uganda</option>
                                        <option data-icon="fi fi-ax" value="Ukraine">Ukraine</option>
                                        <option data-icon="fi fi-ax" value="United Arab Emirates">United Arab Emirates</option>
                                        <option data-icon="fi fi-ax" value="United Kingdom">United Kingdom</option>
                                        <option data-icon="fi fi-ax" value="United States">United States</option>
                                        <option data-icon="fi fi-ax" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option data-icon="fi fi-ax" value="Uruguay">Uruguay</option>
                                        <option data-icon="fi fi-ax" value="Uzbekistan">Uzbekistan</option>
                                        <option data-icon="fi fi-ax" value="Vanuatu">Vanuatu</option>
                                        <option data-icon="fi fi-ax" value="Venezuela">Venezuela</option>
                                        <option data-icon="fi fi-ax" value="Viet Nam">Viet Nam</option>
                                        <option data-icon="fi fi-ax" value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option data-icon="fi fi-ax" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option data-icon="fi fi-ax" value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option data-icon="fi fi-ax" value="Western Sahara">Western Sahara</option>
                                        <option data-icon="fi fi-ax" value="Yemen">Yemen</option>
                                        <option data-icon="fi fi-ax" value="Zambia">Zambia</option>
                                        <option data-icon="fi fi-ax" value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    @error('country')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="zip" class="form-label">{{ __('translate.zip') }}</label>
                                    <input type="text" class="form-control" id="zip" name="zip"
                                        placeholder="123456E" aria-describedby="zip" tabindex="1" autofocus
                                        required />
                                    @error('zip')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label for="date_of_birth" class="form-label">{{ __('translate.date_of_birth') }}</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                        placeholder="mm/dd/yyyy" aria-describedby="date_of_birth" tabindex="1" autofocus
                                        required />
                                    @error('date_of_birth')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="mobile-number" class="form-label">{{ __('translate.mobile_number') }}</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile"
                                    placeholder="01700000000" aria-describedby="mobile" tabindex="1"
                                    pattern="[0-9]{4}[0-9]{3}[0-9]{4}" autofocus required />
                                @error('mobile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="register-email" class="form-label">{{ __('translate.email') }}</label>
                                <input type="text" class="form-control" id="register-email" name="email"
                                    placeholder="john@example.com" aria-describedby="register-email" tabindex="2"
                                    required />
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="register-password" class="form-label">{{ __('translate.password') }}</label>

                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" class="form-control form-control-merge" id="register-password"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="register-password" tabindex="3" required />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="retype-password" class="form-label">{{ __('translate.retype_password') }}</label>

                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" class="form-control form-control-merge" id="retype-password"
                                        name="password_confirmation"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="retype-password" tabindex="3" required />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male" />
                                    <label class="form-check-label" for="gender-male">{{ __('translate.gender_male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female" />
                                    <label class="form-check-label" for="gender-female">{{ __('translate.gender_female') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-others" value="others" />
                                    <label class="form-check-label" for="gender-others">{{ __('translate.gender_others') }}</label>
                                </div>
                                  
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="register-privacy-policy"
                                        name="register-privacy-policy" tabindex="4" />
                                    <label class="form-check-label" for="register-privacy-policy">
                                        {{ __('translate.i_agree_to_the') }} <a href="{{url('https://codebumble.net/terms-of-service')}}">{{ __('translate.terms_and_conditions') }} </a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">
                                {{ __('translate.sign_up') }}
                            </button>
                        </form>
                        @endif
                        <p class="text-center">
                            <span>{{ __('translate.already_have_an_account') }}</span>
                            <a href="{{ route('login') }}">
                                <span>{{ __('translate.sign_in_instead') }}</span>
                            </a>
                        </p>
                        @if($possible == 1 && $possible_social == 1)
                        <div class="divider my-4">
                            <div class="divider-text">{{ __('translate.or') }}</div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                                <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                                <i class="tf-icons fa-brands fa-google fs-5"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                                <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- Register Card -->
                <div class="text-center text-muted mt-2">
                    <a href="{{ route("change.language.english") }}" class="text-muted me-1">English</a> | <a
                        href="{{ route("change.language.bangla") }}" class="text-muted ms-1">বাংলা</a> | <a
                        href="{{ route("change.language.hindi") }}" class="text-muted ms-1">हिंदी</a> | <a
                        href="{{ route("change.language.arabic") }}" class="text-muted ms-1">العربية</a> | <a
                        href="{{ route("change.language.french") }}" class="text-muted ms-1">Français</a> | <a
                        href="{{ route("change.language.german") }}" class="text-muted ms-1">Deutsche</a><br><a
                        href="{{ route("change.language.italian") }}" class="text-muted ms-1">Italiano</a> | <a
                        href="{{ route("change.language.japanese") }}" class="text-muted ms-1">日本語</a> | <a
                        href="{{ route("change.language.korean") }}" class="text-muted ms-1">한국어</a> | <a
                        href="{{ route("change.language.russian") }}" class="text-muted ms-1">Русский</a> | <a
                        href="{{ route("change.language.spanish") }}" class="text-muted ms-1">Español</a>

                </div>
            </div>
        </div>
    </div>
@endsection
