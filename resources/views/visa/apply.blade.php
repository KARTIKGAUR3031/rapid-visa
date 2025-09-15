<style>
    .btn-primary {
        background: linear-gradient(135deg, #ee9734ff, #f59e0b) !important;
        border: none !important;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background: linear-gradient(135deg, #f59e0b, #ee9734ff) !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
    }
    .card-header {
        background: linear-gradient(135deg, #ee9734ff, #f59e0b) !important;
        color: white !important;
    }
    .form-control:focus {
        border-color: #ee9734ff !important;
        box-shadow: 0 0 0 0.2rem rgba(217, 119, 6, 0.25) !important;
    }
</style>
<form action="{{ route('visa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="country" value="{{ request('country') }}">
    <input type="hidden" name="image" value="{{ request('image') }}">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

            <div class="row" data-aos="fade-up">
                <div class="col-12 mb-3 text-center">
                    <button type="button" class="btn btn-primary" id="auto-fill-button">Upload Passport Front to Auto-fill</button>
                    <input type="file" id="passport-upload" style="display: none;" accept="image/*">
                </div>
                <div class="col-12 text-center mb-3">
                    <p class="text-muted">or "Enter Manually"</p>
                </div>
                <h4 class="mt-4 col-12" data-aos="fade-up">Personal Details</h4>
                <div class="col-md-6 mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{ old('full_name') }}" required>
                    @error('full_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                        <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                        <option value="Transgender" @if(old('gender') == 'Transgender') selected @endif>Transgender</option>
                        <option value="Other" @if(old('gender') == 'Other') selected @endif>Other</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" pattern="[0-9]{10}" required>
                    @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                    @error('date_of_birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nationality" class="form-label">Nationality</label>
                    <select class="form-select @error('nationality') is-invalid @enderror" id="nationality" name="nationality" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach(json_decode('{"AF":"Afghanistan","AX":"\u00c5land Islands","AL":"Albania","DZ":"Algeria","AS":"American Samoa","AD":"Andorra","AO":"Angola","AI":"Anguilla","AQ":"Antarctica","AG":"Antigua & Barbuda","AR":"Argentina","AM":"Armenia","AW":"Aruba","AU":"Australia","AT":"Austria","AZ":"Azerbaijan","BS":"Bahamas","BH":"Bahrain","BD":"Bangladesh","BB":"Barbados","BY":"Belarus","BE":"Belgium","BZ":"Belize","BJ":"Benin","BM":"Bermuda","BT":"Bhutan","BO":"Bolivia","BA":"Bosnia & Herzegovina","BW":"Botswana","BV":"Bouvet Island","BR":"Brazil","IO":"British Indian Ocean Territory","VG":"British Virgin Islands","BN":"Brunei","BG":"Bulgaria","BF":"Burkina Faso","BI":"Burundi","KH":"Cambodia","CM":"Cameroon","CA":"Canada","CV":"Cape Verde","BQ":"Caribbean Netherlands","KY":"Cayman Islands","CF":"Central African Republic","TD":"Chad","CL":"Chile","CN":"China","CX":"Christmas Island","CC":"Cocos (Keeling) Islands","CO":"Colombia","KM":"Comoros","CG":"Congo - Brazzaville","CD":"Congo - Kinshasa","CK":"Cook Islands","CR":"Costa Rica","CI":"C\u00f4te d\u2019Ivoire","HR":"Croatia","CU":"Cuba","CW":"Cura\u00e7ao","CY":"Cyprus","CZ":"Czechia","DK":"Denmark","DJ":"Djibouti","DM":"Dominica","DO":"Dominican Republic","EC":"Ecuador","EG":"Egypt","SV":"El Salvador","GQ":"Equatorial Guinea","ER":"Eritrea","EE":"Estonia","SZ":"Eswatini","ET":"Ethiopia","FK":"Falkland Islands (Islas Malvinas)","FO":"Faroe Islands","FJ":"Fiji","FI":"Finland","FR":"France","GF":"French Guiana","PF":"French Polynesia","TF":"French Southern Territories","GA":"Gabon","GM":"Gambia","GE":"Georgia","DE":"Germany","GH":"Ghana","GI":"Gibraltar","GR":"Greece","GL":"Greenland","GD":"Grenada","GP":"Guadeloupe","GU":"Guam","GT":"Guatemala","GG":"Guernsey","GN":"Guinea","GW":"Guinea-Bissau","GY":"Guyana","HT":"Haiti","HM":"Heard & McDonald Islands","HN":"Honduras","HK":"Hong Kong SAR China","HU":"Hungary","IS":"Iceland","IN":"India","ID":"Indonesia","IR":"Iran","IQ":"Iraq","IE":"Ireland","IM":"Isle of Man","IL":"Israel","IT":"Italy","JM":"Jamaica","JP":"Japan","JE":"Jersey","JO":"Jordan","KZ":"Kazakhstan","KE":"Kenya","KI":"Kiribati","KW":"Kuwait","KG":"Kyrgyzstan","LA":"Laos","LV":"Latvia","LB":"Lebanon","LS":"Lesotho","LR":"Liberia","LY":"Libya","LI":"Liechtenstein","LT":"Lithuania","LU":"Luxembourg","MO":"Macao SAR China","MG":"Madagascar","MW":"Malawi","MY":"Malaysia","MV":"Maldives","ML":"Mali","MT":"Malta","MH":"Marshall Islands","MQ":"Martinique","MR":"Mauritania","MU":"Mauritius","YT":"Mayotte","MX":"Mexico","FM":"Micronesia","MD":"Moldova","MC":"Monaco","MN":"Mongolia","ME":"Montenegro","MS":"Montserrat","MA":"Morocco","MZ":"Mozambique","MM":"Myanmar (Burma)","NA":"Namibia","NR":"Nauru","NP":"Nepal","NL":"Netherlands","NC":"New Caledonia","NZ":"New Zealand","NI":"Nicaragua","NE":"Niger","NG":"Nigeria","NU":"Niue","NF":"Norfolk Island","KP":"North Korea","MK":"North Macedonia","MP":"Northern Mariana Islands","NO":"Norway","OM":"Oman","PK":"Pakistan","PW":"Palau","PS":"Palestinian Territories","PA":"Panama","PG":"Papua New Guinea","PY":"Paraguay","PE":"Peru","PH":"Philippines","PN":"Pitcairn Islands","PL":"Poland","PT":"Portugal","PR":"Puerto Rico","QA":"Qatar","RE":"R\u00e9union","RO":"Romania","RU":"Russia","RW":"Rwanda","WS":"Samoa","SM":"San Marino","ST":"S\u00e3o Tom\u00e9 & Pr\u00edncipe","SA":"Saudi Arabia","SN":"Senegal","RS":"Serbia","SC":"Seychelles","SL":"Sierra Leone","SG":"Singapore","SX":"Sint Maarten","SK":"Slovakia","SI":"Slovenia","SB":"Solomon Islands","SO":"Somalia","ZA":"South Africa","GS":"South Georgia & South Sandwich Islands","KR":"South Korea","SS":"South Sudan","ES":"Spain","LK":"Sri Lanka","BL":"St. Barth\u00e9lemy","SH":"St. Helena","KN":"St. Kitts & Nevis","LC":"St. Lucia","MF":"St. Martin","PM":"St. Pierre & Miquelon","VC":"St. Vincent & Grenadines","SD":"Sudan","SR":"Suriname","SJ":"Svalbard & Jan Mayen","SE":"Sweden","CH":"Switzerland","SY":"Syria","TW":"Taiwan","TJ":"Tajikistan","TZ":"Tanzania","TH":"Thailand","TL":"Timor-Leste","TG":"Togo","TK":"Tokelau","TO":"Tonga","TT":"Trinidad & Tobago","TN":"Tunisia","TR":"Turkey","TM":"Turkmenistan","TC":"Turks & Caicos Islands","TV":"Tuvalu","UM":"U.S. Outlying Islands","VI":"U.S. Virgin Islands","UG":"Uganda","UA":"Ukraine","AE":"United Arab Emirates","GB":"United Kingdom","US":"United States","UY":"Uruguay","UZ":"Uzbekistan","VU":"Vanuatu","VA":"Vatican City","VE":"Venezuela","VN":"Vietnam","WF":"Wallis & Futuna","EH":"Western Sahara","YE":"Yemen","ZM":"Zambia","ZW":"Zimbabwe"}', true) as $code => $name)
                            <option value="{{ $name }}" @if(old('nationality') == "{{ $name }}") selected @endif>{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('nationality')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="passport_number" class="form-label">Passport Number</label>
                        <input type="text" class="form-control @error('passport_number') is-invalid @enderror" id="passport_number" name="passport_number" value="{{ old('passport_number') }}" required>
                        @error('passport_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passport_valid_till" class="form-label">Passport Valid Till</label>
                        <input type="date" class="form-control @error('passport_valid_till') is-invalid @enderror" id="passport_valid_till" name="passport_valid_till" value="{{ old('passport_valid_till') }}" required>
                        @error('passport_valid_till')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passport_place_of_issue" class="form-label">Passport Place of Issue</label>
                        <input type="text" class="form-control @error('passport_place_of_issue') is-invalid @enderror" id="passport_place_of_issue" name="passport_place_of_issue" value="{{ old('passport_place_of_issue') }}" required>
                        @error('passport_place_of_issue')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('img/passport-number-display.png') }}" alt="Passport Information" class="img-fluid rounded" style="max-height: 240px;">
                </div>
            </div>
            <h4 class="mt-4" data-aos="fade-up">Upload Required Documents*</h4>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="aadhaar_card" class="form-label">Aadhaar Card*</label>
                    <input type="file" class="form-control @error('aadhaar_card') is-invalid @enderror" id="aadhaar_card" name="aadhaar_card" required accept=".jpg,.jpeg,.png,.pdf">
                    @error('aadhaar_card')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="passport_back" class="form-label">Passport Back Page*</label>
                    <input type="file" class="form-control @error('passport_back') is-invalid @enderror" id="passport_back" name="passport_back" required accept=".jpg,.jpeg,.png,.pdf">
                    @error('passport_back')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="flight_ticket" class="form-label">Flight Ticket*</label>
                    <input type="file" class="form-control @error('flight_ticket') is-invalid @enderror" id="flight_ticket" name="flight_ticket" required accept=".jpg,.jpeg,.png,.pdf">
                    @error('flight_ticket')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="old_visa" class="form-label">Old Visa (if any)</label>
                    <input type="file" class="form-control @error('old_visa') is-invalid @enderror" id="old_visa" name="old_visa" accept=".jpg,.jpeg,.png,.pdf">
                    @error('old_visa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="passport_front" class="form-label">Passport Front Page*</label>
                    <input type="file" class="form-control @error('passport_front') is-invalid @enderror" id="passport_front" name="passport_front" required accept=".jpg,.jpeg,.png,.pdf">
                    @error('passport_front')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="passport_photo" class="form-label">Passport-size Photo</label>
                    <input type="file" class="form-control @error('passport_photo') is-invalid @enderror" id="passport_photo" name="passport_photo" accept=".jpg,.jpeg,.png,.pdf">
                    @error('passport_photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-3">
                    <label for="hotel_booking" class="form-label">Hotel Booking*</label>
                    <input type="file" class="form-control @error('hotel_booking') is-invalid @enderror" id="hotel_booking" name="hotel_booking" required accept=".jpg,.jpeg,.png,.pdf">
                    @error('hotel_booking')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <button type="submit" class="btn btn-primary btn-sm">
                    <img src="{{ asset('img/icons/apply.png') }}" alt="Apply" style="width: 24px; margin-right: 8px;"> Apply
                </button>
            </div>
        </form>

<script>
    document.getElementById('auto-fill-button').addEventListener('click', function() {
        document.getElementById('passport-upload').click();
    });

    document.getElementById('passport-upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imageUrl = e.target.result;
                Tesseract.recognize(
                    imageUrl,
                    'eng',
                    {
                        logger: m => console.log(m) // Add logger for debugging
                    }
                ).then(({ data: { text } }) => {
                    console.log(text);
                    // Implement parsing logic here
                    // For example:
                    const nameMatch = text.match(/Name: (.*)/);
                    if (nameMatch) {
                        document.getElementById('full_name').value = nameMatch[1];
                    }

                    const dobMatch = text.match(/Date of Birth: (.*)/);
                    if (dobMatch) {
                        document.getElementById('date_of_birth').value = dobMatch[1];
                    }

                    const genderMatch = text.match(/Sex: (.*)/);
                    if (genderMatch) {
                        document.getElementById('gender').value = genderMatch[1];
                    }

                    const passportNumberMatch = text.match(/Passport No\.: (.*)/);
                    if (passportNumberMatch) {
                        document.getElementById('passport_number').value = passportNumberMatch[1];
                    }

                    const expiryDateMatch = text.match(/Date of Expiry: (.*)/);
                    if (expiryDateMatch) {
                        document.getElementById('passport_valid_till').value = expiryDateMatch[1];
                    }
                }).catch(err => {
                    console.error(err);
                });
            };
            reader.readAsDataURL(file);
        }
    });
</script>