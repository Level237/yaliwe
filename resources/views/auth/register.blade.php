@extends('layouts.frontend.main')
@section('title', 'Create an account')
@section('content')
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Pages <span></span> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Create an Account</h1>
                                        <p class="mb-30">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" required name="name" placeholder="Firstname" value="{{ old('name') }}" autofocus/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" required name="lastname" placeholder="Lastname" value="{{ old('lastname') }}" autofocus/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <input type="text" required name="email" placeholder="Email" value="{{ old('email') }}"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" />
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="tel" id="phone" name="phone" placeholder="Phone number" required size="41" />
                                        </div>
                                        <input id="country_name" name="country_name" type="hidden">
                                        <input id="country_code" name="country_code" type="hidden">
                                        <input id="country_iso2" name="country_iso2" type="hidden">
                                       
                                        <div class="payment_option mb-50">
                                            <div class="custome-radio">
                                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="" />
                                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">I am a customer</label>
                                            </div>
                                            <div class="custome-radio">
                                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="" />
                                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">I am a vendor</label>
                                            </div>
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                                                    <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                </div>
                                            </div>
                                            <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                        </div>
                                        <div class="form-group mb-30">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Submit &amp; Register</button>
                                        </div>
                                        <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <div class="card-login mt-115">
                                <a href="#" class="social-login facebook-login">
                                    <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                    <span>Continue with Facebook</span>
                                </a>
                                <a href="#" class="social-login google-login">
                                    <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                    <span>Continue with Google</span>
                                </a>
                                <a href="#" class="social-login apple-login">
                                    <img src="assets/imgs/theme/icons/logo-apple.svg" alt="" />
                                    <span>Continue with Apple</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('intl-tel-input-master') }}/build/js/intlTelInput.js"></script>
<script>

      var input = document.querySelector("#phone");
      var iti = window.intlTelInput(input, {
        //allowDropdown: false,
        //autoHideDialCode: true,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
         //formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
         //hiddenInput: "full_number",
        initialCountry: 'cm',
        // localizedCountries: { 'de': 'Deutschland' },
        //nationalMode: true,
        //onlyCountries: ['cm'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        separateDialCode: true,
        utilsScript: "E:/laragon/www/sharemyride/public/intl-tel-input-master/buildbuild/js/utils.js",
      });
      
    
      var countryData = iti.getSelectedCountryData();
      //alert(countryData.dialCode);
      //alert(countryData.name);
      
      
      function myFunction() {
          var countryData = iti.getSelectedCountryData();
          //alert(countryData.dialCode);
          //alert(countryData.name);
          document.getElementById("country_name").value = countryData.name;
          document.getElementById("country_code").value = countryData.dialCode;
          document.getElementById("country_iso2").value = countryData.iso2;
          
      }
      

</script>
@endsection