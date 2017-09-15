@extends('layouts.app')

@section('content')

    <div style="padding-left:70px;padding-right: 200px;background-color: #eee; height:100%">
        <div class="small-centered" id="activateAccountPanel">

            <h1>Activate</h1>
            <div id="modal-container">
                <div >
                    <div class="row column activate-form-wrapper">
                        <div id="activate_PlanList" data-pay-amount=""
                             class="medium-centered large-6 medium-8 columns plan-selection-column plan-selection-column-1">
                            <div><p class="selectaplan_label">Select a Plan</p>
                                <div class="term-select">
                                    <button class="button monthlybtn" name="1">Monthly</button>
                                    <button class="button yearlybtn hollow custom-hollow" name="12">Yearly</button>
                                </div><!-- react-empty: 1102 -->
                                <div id="indivi-div" class="planWrapper columns small-6 large-12">
                                    <div class="columns small-12 medium-12 large-6"><h6 class="planType">
                                            <!-- react-text: 1106 -->Athlete<!-- /react-text -->
                                            <!-- react-text: 1107 --> Plan<!-- /react-text --></h6>
                                        <p class="planFor"><!-- react-text: 1109 -->For <!-- /react-text -->
                                            <!-- react-text: 1110 -->Individuals<!-- /react-text --><!-- react-text: 1111 -->.<!-- /react-text --></p><label
                                                class="selectPlanButton">
                                            <button id="indivi-btn" type="radio" name="plan" data-code="athlete-monthly" value="8">
                                                <span id="indivi-unselected" class="unselected">Select Plan</span><span class="theSelected">Selected</span>
                                            </button>
                                        </label></div>
                                    <div class="columns hide-for-12 medium-12 large-6">
                                        <p id="indivi-pay" class="headline-p">7 Day Free Trial</p>
                                        <p id="indivi-desc" class="sub-p">then just $13.95/mo</p>
                                        <p class="aboutPlan noModal hide-for-large">Designed to be used by one
                                            individual. This plan does not support any sharing or public showing of
                                            ROMWOD.</p>
                                        <ul class="plan-benefits">
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1130 -->Unlimited Streaming<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1133 -->Access on the go<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1136 -->Expert Programming<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1139 -->New Routines Weekly<!-- /react-text --></li>
                                            <li class="hide"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1">
                                                <!-- react-text: 1142 -->Stream in a class setting<!-- /react-text -->
                                            </li>
                                            <li class="hide"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1">
                                                <!-- react-text: 1145 -->Ambassador Program<!-- /react-text --></li>
                                            <li class="hide"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=1&amp;h=1">
                                                <!-- react-text: 1148 -->Goodies &amp; Perks<!-- /react-text --></li>
                                        </ul>
                                    </div>
                                </div><!-- react-empty: 1149 -->
                                <div id="gyms-div" class="planWrapper columns small-6 large-12">
                                    <div class="columns small-12 medium-12 large-6"><h6 class="planType">
                                            <!-- react-text: 1153 -->Affiliate<!-- /react-text -->
                                            <!-- react-text: 1154 --> Plan<!-- /react-text --></h6>
                                        <p class="planFor"><!-- react-text: 1156 -->For <!-- /react-text -->
                                            <!-- react-text: 1157 -->Gyms<!-- /react-text --><!-- react-text: 1158 -->.<!-- /react-text --></p><label class="selectPlanButton">
                                            <button id="gyms-btn" type="radio" name="plan" data-code="affiliate-monthly" value="6">
                                                <span id="gyms-unselected" class="unselected">Select Plan</span><span class="theSelected">Selected</span>
                                            </button>
                                        </label></div>
                                    <div class="columns hide-for-12 medium-12 large-6">
                                        <p id="gyms-pay" class="sub-p">$24.95/mo</p>
                                        <p class="sub-p sub-ft">Free trial not included</p>
                                        <p class="aboutPlan noModal hide-for-large">Designed for affiliates(gyms) to
                                            have the opportunity to use ROMWOD as part of their daily or weekly
                                            programming.</p>
                                        <ul class="plan-benefits">
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1174 -->Unlimited Streaming<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1177 -->Access on the go<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1180 -->Expert Programming<!-- /react-text --></li>
                                            <li><img class="pl-check"
                                                     srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                     src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1183 -->New Routines Weekly<!-- /react-text --></li>
                                            <li class="show"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1186 -->Stream in a class setting<!-- /react-text -->
                                            </li>
                                            <li class="show"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1189 -->Ambassador Program<!-- /react-text --></li>
                                            <li class="show"><img class="pl-check"
                                                                  srcset="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=2&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 2x, //assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=3&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100 3x"
                                                                  src="//assets.romwod.com/images/icons/icon-checkyellow.svg?auto=format&amp;dpr=1&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100">
                                                <!-- react-text: 1192 -->Goodies and Perks<!-- /react-text --></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <button class="compare-plans-button show-for-large">Compare Plans +</button>
                                    <noscript></noscript>
                                </div>
                            </div>
                        </div>
                        <div id="activate_PaymentOptions"
                             class="medium-centered large-6 medium-8 columns plan-selection-column plan-selection-column-2 ">
                            <div class="hide current-payment-method"><p class="cm_label">Use your current payment
                                    method?</p>
                                <div class="animated fadeIn"></div>
                                <button class="button">Use a different billing method?</button>
                            </div>
                            <div class="">
                                <ul class="tabs">
                                    <li class="tabs-title is-active"><a href="#cc" name="cc" aria-selected="true"><img
                                                    src="//assets.romwod.com/images/icons/icon-creditcard.svg"
                                                    alt="Credit Card" class="credit-card-icon"></a></li>
                                    <!-- react-empty: 19 --><!-- react-empty: 20 --><!-- react-empty: 21 --></ul>
                                <div class="tabs-content">
                                    <div class="tabs-panel is-active">

                                        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                                        <form id="recurly-cc-form" class="require-validation"
                                              data-cc-on-file="false" method="post">
                                            {{ csrf_field() }}
                                            <div class="inputFieldsWrapper">
                                                <div class="inputWrapper input-half">
                                                    <fieldset><label class="" id="first_name-label">
                                                            <!-- react-text: 29 -->First Name
                                                            <!-- /react-text --></label>
                                                            <input type="text" class=""
                                                                   value={{ Auth::user()->firstname }}
                                                                   name="first_name"
                                                                   aria-labelledby="first_name-label"
                                                                   data-recurly="first_name">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-half">
                                                    <fieldset><label class="" id="last_name-label">
                                                            <!-- react-text: 34 -->Last Name<!-- /react-text --></label><input
                                                                type="text" class="" value={{ Auth::user()->lastname }} name="last_name"
                                                                aria-labelledby="last_name-label"
                                                                data-recurly="last_name"></fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset>
                                                        <label class="" id="number-label"><!-- react-text: 39 -->
                                                            Credit Card Number<!-- /react-text --></label>
                                                        <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" maxlength="16" autocomplete="cc-number"
                                                               class="form-control card-number" value="" name="card_number">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-half">
                                                    <fieldset>
                                                        <label class="" id="month-label"><!-- react-text: 44 -->
                                                            Month/Year (MM/YYYY)<!-- /react-text --></label>
                                                        <div style="line-height: 0px; display: inline-flex;">
                                                            <div data-recurly="month" style="display: inline-block; width: 50%;">
                                                                <div class="">
                                                                    <input type="text" placeholder="MONTH (MM)" maxlength="2" value="" name="expire-month"
                                                                           class="form-control card-expiry-month" aria-required="true" autocomplete="cc-exp-month">
                                                                </div>
                                                            </div>
                                                            <div data-recurly="year" style="display: inline-block; width: 50%;">
                                                                <div class="recurly-hosted-field recurly-hosted-field-year">
                                                                    <input type="text" placeholder="YEAR (YYYY)" maxlength="4" value="" name="expire-year"
                                                                           class="form-control card-expiry-year" aria-required="true" autocomplete="cc-exp-year">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-half">
                                                    <fieldset>
                                                        <label class="" id="cvv-label"><!-- react-text: 51 -->CCV
                                                            <!-- /react-text --></label>
                                                        <input id="recurly-hosted-field-input" type="text" pattern="\d*" placeholder="SECURITY CODE" value=""
                                                               class="form-control card-ccv" title="security code" autocomplete="off">
                                                        <!--div data-recurly="cvv">
                                                            <div class="recurly-hosted-field recurly-hosted-field-cvv">
                                                                <iframe src="https://api.recurly.com/js/v1/field.html#config=%7B%22type%22%3A%22cvv%22%2C%22selector%22%3A%22%5Bdata-recurly%3Dcvv%5D%22%2C%22style%22%3A%7B%22fontFamily%22%3A%22Helvetica%22%2C%22fontSize%22%3A%2215px%22%2C%22fontColor%22%3A%22%23717171%22%2C%22fontWeight%22%3A%22100%22%2C%22fontVariant%22%3A%22small-caps%22%2C%22fontStyle%22%3A%22normal%22%2C%22lineHeight%22%3A%221em%22%2C%22placeholder%22%3A%7B%22color%22%3A%22%23ccc%20!important%22%2C%22fontWeight%22%3A%22300%22%2C%22fontSize%22%3A%221rem%22%2C%22content%22%3A%22security%20code%22%7D%7D%2C%22recurly%22%3A%7B%22currency%22%3A%22USD%22%2C%22timeout%22%3A60000%2C%22publicKey%22%3A%22ewr1-1oXmHODBbGU7K7XfEd4t9A%22%2C%22parent%22%3Atrue%2C%22parentVersion%22%3A%224.6.2%22%2C%22cors%22%3Atrue%2C%22fraud%22%3A%7B%22kount%22%3A%7B%22dataCollector%22%3Afalse%7D%2C%22litle%22%3A%7B%7D%2C%22braintree%22%3A%7B%7D%7D%2C%22api%22%3A%22https%3A%2F%2Fapi.recurly.com%2Fjs%2Fv1%22%2C%22fields%22%3A%7B%22all%22%3A%7B%22style%22%3A%7B%22fontFamily%22%3A%22Helvetica%22%2C%22fontSize%22%3A%22.80rem%22%2C%22fontColor%22%3A%22%23717171%22%2C%22fontWeight%22%3A%22100%22%2C%22fontVariant%22%3A%22small-caps%22%2C%22fontStyle%22%3A%22normal%22%2C%22lineHeight%22%3A%221em%22%2C%22placeholder%22%3A%7B%22color%22%3A%22%23ccc%20!important%22%2C%22fontWeight%22%3A%22bold%22%2C%22fontSize%22%3A%221rem%22%7D%7D%7D%2C%22number%22%3A%7B%22selector%22%3A%22%5Bdata-recurly%3Dnumber%5D%22%2C%22style%22%3A%7B%22fontColor%22%3A%22%23717171%22%2C%22textIndent%22%3A%221em%22%2C%22placeholder%22%3A%7B%22content%22%3A%22xxxx-xxxx-xxxx-xxxx%22%2C%22fontWeight%22%3A%22300%22%7D%7D%7D%2C%22month%22%3A%7B%22selector%22%3A%22%5Bdata-recurly%3Dmonth%5D%22%2C%22style%22%3A%7B%22fontColor%22%3A%22%23717171%22%2C%22textIndent%22%3A%221em%22%2C%22placeholder%22%3A%7B%22content%22%3A%22month%20(mm)%22%2C%22fontWeight%22%3A%22300%22%7D%7D%7D%2C%22year%22%3A%7B%22selector%22%3A%22%5Bdata-recurly%3Dyear%5D%22%2C%22style%22%3A%7B%22textIndent%22%3A%221em%22%2C%22placeholder%22%3A%7B%22content%22%3A%22year%20(yyyy)%22%2C%22fontWeight%22%3A%22300%22%7D%7D%7D%2C%22cvv%22%3A%7B%22selector%22%3A%22%5Bdata-recurly%3Dcvv%5D%22%2C%22style%22%3A%7B%22fontSize%22%3A%2215px%22%2C%22placeholder%22%3A%7B%22content%22%3A%22security%20code%22%2C%22color%22%3A%22%23ccc%20!important%22%2C%22fontWeight%22%3A%22300%22%7D%7D%7D%7D%2C%22required%22%3A%5B%5D%7D%7D"
                                                                        border="0" frameborder="0"
                                                                        allowtransparency="true" scrolling="no"
                                                                        style="height: 100%; width: 100%; background: transparent;">
                                                                    <input id="recurly-hosted-field-input" type="text" pattern="\d*" placeholder="security code"
                                                                           title="security code" autocomplete="off">
                                                                </iframe>
                                                            </div>
                                                        </div-->
                                                    </fieldset>
                                                </div>
                                                <input type="hidden" name="recurly-token" data-recurly="token" value="">
                                                <div>
                                                    <div class="inputWrapper">
                                                        <fieldset><label class="" id="country-label">
                                                                <!-- react-text: 58 -->Country
                                                                <!-- /react-text --></label>
                                                            <select class="countries" name="country"
                                                                    data-recurly="country">
                                                                <option value="US">United States</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua and Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, The Democratic Republic of the
                                                                </option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Cote D'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GG">Guernsey</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard Island and Mcdonald Islands
                                                                </option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic Of</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IM">Isle of Man</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JE">Jersey</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Democratic People's Republic of Korea
                                                                </option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="XK">Kosovo</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, The Former Yugoslav Republic
                                                                    of
                                                                </option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="ME">Montenegro</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="SH">Saint Helena</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich
                                                                    Islands
                                                                </option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="UM">United States Minor Outlying Islands
                                                                </option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select></fieldset>
                                                    </div>
                                                    <div class="inputWrapper">
                                                        <fieldset><label class="" id="address1-label">
                                                                <!-- react-text: 308 -->Street Address
                                                                <!-- /react-text --></label><input type="text" class=""
                                                                                                   value=""
                                                                                                   name="address1"
                                                                                                   aria-labelledby="address1-label"
                                                                                                   data-recurly="address1">
                                                        </fieldset>
                                                    </div>
                                                    <div class="inputWrapper">
                                                        <fieldset><label class="" id="address2-label">
                                                                <!-- react-text: 313 -->Address Line 2
                                                                <!-- /react-text --></label><input type="text" class=""
                                                                                                   value=""
                                                                                                   name="address2"
                                                                                                   aria-labelledby="address2-label"
                                                                                                   data-recurly="address2">
                                                        </fieldset>
                                                    </div>
                                                    <div class="inputWrapper input-one-third">
                                                        <fieldset>
                                                            <label class="" id="city-label">
                                                                <!-- react-text: 318 -->City<!-- /react-text --></label>
                                                            <input type="text" class="" value="" name="city"
                                                                   aria-labelledby="city-label" data-recurly="city">
                                                        </fieldset>
                                                    </div>
                                                    <div class="inputWrapper input-one-third inputState">
                                                        <fieldset>
                                                            <label class="" id="state-label">
                                                                <!-- react-text: 323 -->State
                                                                <!-- /react-text --></label>
                                                            <input type="text" class="states" value="" name="state" data-recurly="state">
                                                            <!--div>
                                                                <div class="loader hide"></div>
                                                                <div class=""><select class="states" name="state" data-recurly="state">
                                                                        <option value="AK">Alaska</option>
                                                                        <option value="AL">Alabama</option>
                                                                        <option value="AR">Arkansas</option>
                                                                        <option value="AZ">Arizona</option>
                                                                        <option value="CA">California</option>
                                                                        <option value="CO">Colorado</option>
                                                                        <option value="CT">Connecticut</option>
                                                                        <option value="DC">District of Columbia</option>
                                                                        <option value="DE">Delaware</option>
                                                                        <option value="FL">Florida</option>
                                                                        <option value="GA">Georgia</option>
                                                                        <option value="HI">Hawaii</option>
                                                                        <option value="IA">Iowa</option>
                                                                        <option value="ID">Idaho</option>
                                                                        <option value="IL">Illinois</option>
                                                                        <option value="IN">Indiana</option>
                                                                        <option value="KS">Kansas</option>
                                                                        <option value="KY">Kentucky</option>
                                                                        <option value="LA">Louisiana</option>
                                                                        <option value="MA">Massachusetts</option>
                                                                        <option value="MD">Maryland</option>
                                                                        <option value="ME">Maine</option>
                                                                        <option value="MI">Michigan</option>
                                                                        <option value="MN">Minnesota</option>
                                                                        <option value="MO">Missouri</option>
                                                                        <option value="MS">Mississippi</option>
                                                                        <option value="MT">Montana</option>
                                                                        <option value="NC">North Carolina</option>
                                                                        <option value="ND">North Dakota</option>
                                                                        <option value="NE">Nebraska</option>
                                                                        <option value="NH">New Hampshire</option>
                                                                        <option value="NJ">New Jersey</option>
                                                                        <option value="NM">New Mexico</option>
                                                                        <option value="NV">Nevada</option>
                                                                        <option value="NY">New York</option>
                                                                        <option value="OH">Ohio</option>
                                                                        <option value="OK">Oklahoma</option>
                                                                        <option value="OR">Oregon</option>
                                                                        <option value="PA">Pennsylvania</option>
                                                                        <option value="RI">Rhode Island</option>
                                                                        <option value="SC">South Carolina</option>
                                                                        <option value="SD">South Dakota</option>
                                                                        <option value="TN">Tennessee</option>
                                                                        <option value="TX">Texas</option>
                                                                        <option value="UT">Utah</option>
                                                                        <option value="VA">Virginia</option>
                                                                        <option value="VT">Vermont</option>
                                                                        <option value="WA">Washington</option>
                                                                        <option value="WI">Wisconsin</option>
                                                                        <option value="WV">West Virginia</option>
                                                                        <option value="WY">Wyoming</option>
                                                                        <option value="AA">Armed Forces Americas
                                                                        </option>
                                                                        <option value="AE">Armed Forces Europe</option>
                                                                        <option value="AP">Armed Forces Pacific</option>
                                                                    </select><!-- react-empty: 328 --><!--/div>
                                                            <!--/div-->
                                                        </fieldset>
                                                    </div>
                                                    <div class="inputWrapper input-one-third input-one-third-last">
                                                        <fieldset><label class="" id="postal_code-label">
                                                                <!-- react-text: 332 -->Postal Code
                                                                <!-- /react-text --></label><input type="text" class=""
                                                                                                   value=""
                                                                                                   name="postal_code"
                                                                                                   aria-labelledby="postal_code-label"
                                                                                                   data-recurly="postal_code">
                                                        </fieldset>
                                                    </div>
                                                    <div class='inputWrapper' style="padding-top: 0px">
                                                        <div class='col-md-12 error form-group hide'>
                                                            <div class='alert-danger alert'>Please correct the errors and try
                                                                again.</div>
                                                        </div>
                                                    </div>
                                                    <p class="billingAdvisory">Cancel within first 7 days of trial period to avoid being
                                                        billed.</p>
                                                    <button class="button get-started-button" type="submit"><!-- react-text: 938 -->Activate
                                                        <!-- /react-text --><!-- react-text: 939 --> my account<!-- /react-text --></button>
                                                </div>
                                            </div>
                                            <input type="hidden" id="input-pay-amount" name="input-pay-amount" value="">
                                            <input type="hidden" id="pay-type" name="pay-type" value="monthly">
                                            <input type="hidden" id="plan-type" name="plan-type" value="">
                                        </form>
                                        @if ((Session::has('success-message')))
                                            <div class="alert alert-success col-md-12">
                                                {{ Session::get('success-message') }}</div>
                                        @endif @if ((Session::has('fail-message')))
                                            <div class="alert alert-danger col-md-12">
                                                {{ Session::get('fail-message') }}</div>
                                        @endif
                                    </div>
                                    <div class="tabs-panel">
                                        <div id="amazon_section"><h3>Amazon</h3>
                                            <p>Log in to your Amazon account, by clicking the Pay with Amazon button
                                                below, to consent to future purchases and payments to this merchant.
                                                Your invoices will reflect the terms outlined.</p>
                                            <p id="amazon-login" class="text-center"></p>
                                            <p id="amazon-address-book"></p>
                                            <p id="amazon-wallet"></p>
                                            <p id="amazon-consent"></p></div>
                                    </div>
                                    <div class="tabs-panel">
                                        <div id="paypal_section"><span class="paypalBtn">continue with paypal</span>
                                            <div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="country-label">
                                                            <!-- react-text: 349 -->Country
                                                            <!-- /react-text --></label><select class="countries" name="country"
                                                                                                data-recurly="country">
                                                            <option value="US">United States</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, The Democratic Republic of the
                                                            </option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Cote D'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and Mcdonald Islands
                                                            </option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic Of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Democratic People's Republic of Korea
                                                            </option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, The Former Yugoslav Republic
                                                                of
                                                            </option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich
                                                                Islands
                                                            </option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="UM">United States Minor Outlying Islands
                                                            </option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select></fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="address1-label">
                                                            <!-- react-text: 599 -->Street Address
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value="" name="address1"
                                                                                               aria-labelledby="address1-label"
                                                                                               data-recurly="address1">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="address2-label">
                                                            <!-- react-text: 604 -->Address Line 2
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value="" name="address2"
                                                                                               aria-labelledby="address2-label"
                                                                                               data-recurly="address2">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-one-third">
                                                    <fieldset><label class="" id="city-label"><!-- react-text: 609 -->
                                                            City<!-- /react-text --></label><input type="text" class=""
                                                                                                   value="" name="city"
                                                                                                   aria-labelledby="city-label"
                                                                                                   data-recurly="city">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-one-third inputState">
                                                    <fieldset><label class="" id="state-label"><!-- react-text: 614 -->
                                                            State<!-- /react-text --></label>
                                                        <div>
                                                            <div class="loader hide"></div>
                                                            <div class=""><select class="states" name="state" data-recurly="state">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CA">California</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DC">District of Columbia</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="HI">Hawaii</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="WA">Washington</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                    <option value="WV">West Virginia</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AA">Armed Forces Americas</option>
                                                                    <option value="AE">Armed Forces Europe</option>
                                                                    <option value="AP">Armed Forces Pacific</option>
                                                                </select><!-- react-empty: 619 --></div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper input-one-third input-one-third-last">
                                                    <fieldset><label class="" id="postal_code-label">
                                                            <!-- react-text: 623 -->Postal Code
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value=""
                                                                                               name="postal_code"
                                                                                               aria-labelledby="postal_code-label"
                                                                                               data-recurly="postal_code">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-panel">
                                        <form id="recurly-ach-form">
                                            <div class="inputFieldsWrapper">
                                                <div class="inputWrapper inputWrapperFirst">
                                                    <fieldset><label class="" id="routing_number-label">
                                                            <!-- react-text: 631 -->Routing Number
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value=""
                                                                                               name="routing_number"
                                                                                               aria-labelledby="routing_number-label"
                                                                                               data-recurly="routing_number">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="account_number-label">
                                                            <!-- react-text: 636 -->Account Number
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value=""
                                                                                               name="account_number"
                                                                                               aria-labelledby="account_number-label"
                                                                                               data-recurly="account_number">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="account_number_confirmation-label">
                                                            <!-- react-text: 641 -->Confirm Account Number
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value=""
                                                                                               name="account_number_confirmation"
                                                                                               aria-labelledby="account_number_confirmation-label"
                                                                                               data-recurly="account_number_confirmation">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper">
                                                    <fieldset><label class="" id="account_type-label">
                                                            <!-- react-text: 646 -->Account Type
                                                            <!-- /react-text --></label><select
                                                                data-recurly="account_type" name="account_type"
                                                                aria-labelledby="account_type-label">
                                                            <option value="checking">Checking</option>
                                                            <option value="savings">Savings</option>
                                                        </select></fieldset>
                                                </div>
                                                <div class="inputWrapper bbottom">
                                                    <fieldset><label class="" id="name_on_account-label">
                                                            <!-- react-text: 653 -->Name on Account
                                                            <!-- /react-text --></label><input type="text" class=""
                                                                                               value=""
                                                                                               name="name_on_account"
                                                                                               aria-labelledby="name_on_account-label"
                                                                                               data-recurly="name_on_account">
                                                    </fieldset>
                                                </div>
                                                <div class="inputWrapper addressFieldsWrapper">
                                                    <div>
                                                        <div class="inputWrapper">
                                                            <fieldset><label class="" id="country-label">
                                                                    <!-- react-text: 660 -->Country
                                                                    <!-- /react-text --></label><select class="countries" name="country"
                                                                                                        data-recurly="country">
                                                                    <option value="US">United States</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CD">Congo, The Democratic Republic of
                                                                        the
                                                                    </option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Cote D'Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)
                                                                    </option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and Mcdonald
                                                                        Islands
                                                                    </option>
                                                                    <option value="VA">Holy See (Vatican City State)
                                                                    </option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran, Islamic Republic Of
                                                                    </option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">Democratic People's Republic of
                                                                        Korea
                                                                    </option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="XK">Kosovo</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Lao People's Democratic
                                                                        Republic
                                                                    </option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MK">Macedonia, The Former Yugoslav
                                                                        Republic of
                                                                    </option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia, Federated States of
                                                                    </option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="AN">Netherlands Antilles</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestinian Territory, Occupied
                                                                    </option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the
                                                                        Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia and the South
                                                                        Sandwich Islands
                                                                    </option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of
                                                                    </option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="UM">United States Minor Outlying
                                                                        Islands
                                                                    </option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands, British</option>
                                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select></fieldset>
                                                        </div>
                                                        <div class="inputWrapper">
                                                            <fieldset><label class="" id="address1-label">
                                                                    <!-- react-text: 910 -->Street Address
                                                                    <!-- /react-text --></label><input type="text"
                                                                                                       class="" value=""
                                                                                                       name="address1"
                                                                                                       aria-labelledby="address1-label"
                                                                                                       data-recurly="address1">
                                                            </fieldset>
                                                        </div>
                                                        <div class="inputWrapper">
                                                            <fieldset><label class="" id="address2-label">
                                                                    <!-- react-text: 915 -->Address Line 2
                                                                    <!-- /react-text --></label><input type="text"
                                                                                                       class="" value=""
                                                                                                       name="address2"
                                                                                                       aria-labelledby="address2-label"
                                                                                                       data-recurly="address2">
                                                            </fieldset>
                                                        </div>
                                                        <div class="inputWrapper input-one-third">
                                                            <fieldset><label class="" id="city-label">
                                                                    <!-- react-text: 920 -->City
                                                                    <!-- /react-text --></label><input type="text"
                                                                                                       class="" value=""
                                                                                                       name="city"
                                                                                                       aria-labelledby="city-label"
                                                                                                       data-recurly="city">
                                                            </fieldset>
                                                        </div>
                                                        <div class="inputWrapper input-one-third inputState">
                                                            <fieldset><label class="" id="state-label">
                                                                    <!-- react-text: 925 -->State
                                                                    <!-- /react-text --></label>
                                                                <div>
                                                                    <div class="loader hide"></div>
                                                                    <div class=""><select class="states" name="state"
                                                                                          data-recurly="state">
                                                                            <option value="AK">Alaska</option>
                                                                            <option value="AL">Alabama</option>
                                                                            <option value="AR">Arkansas</option>
                                                                            <option value="AZ">Arizona</option>
                                                                            <option value="CA">California</option>
                                                                            <option value="CO">Colorado</option>
                                                                            <option value="CT">Connecticut</option>
                                                                            <option value="DC">District of Columbia
                                                                            </option>
                                                                            <option value="DE">Delaware</option>
                                                                            <option value="FL">Florida</option>
                                                                            <option value="GA">Georgia</option>
                                                                            <option value="HI">Hawaii</option>
                                                                            <option value="IA">Iowa</option>
                                                                            <option value="ID">Idaho</option>
                                                                            <option value="IL">Illinois</option>
                                                                            <option value="IN">Indiana</option>
                                                                            <option value="KS">Kansas</option>
                                                                            <option value="KY">Kentucky</option>
                                                                            <option value="LA">Louisiana</option>
                                                                            <option value="MA">Massachusetts</option>
                                                                            <option value="MD">Maryland</option>
                                                                            <option value="ME">Maine</option>
                                                                            <option value="MI">Michigan</option>
                                                                            <option value="MN">Minnesota</option>
                                                                            <option value="MO">Missouri</option>
                                                                            <option value="MS">Mississippi</option>
                                                                            <option value="MT">Montana</option>
                                                                            <option value="NC">North Carolina</option>
                                                                            <option value="ND">North Dakota</option>
                                                                            <option value="NE">Nebraska</option>
                                                                            <option value="NH">New Hampshire</option>
                                                                            <option value="NJ">New Jersey</option>
                                                                            <option value="NM">New Mexico</option>
                                                                            <option value="NV">Nevada</option>
                                                                            <option value="NY">New York</option>
                                                                            <option value="OH">Ohio</option>
                                                                            <option value="OK">Oklahoma</option>
                                                                            <option value="OR">Oregon</option>
                                                                            <option value="PA">Pennsylvania</option>
                                                                            <option value="RI">Rhode Island</option>
                                                                            <option value="SC">South Carolina</option>
                                                                            <option value="SD">South Dakota</option>
                                                                            <option value="TN">Tennessee</option>
                                                                            <option value="TX">Texas</option>
                                                                            <option value="UT">Utah</option>
                                                                            <option value="VA">Virginia</option>
                                                                            <option value="VT">Vermont</option>
                                                                            <option value="WA">Washington</option>
                                                                            <option value="WI">Wisconsin</option>
                                                                            <option value="WV">West Virginia</option>
                                                                            <option value="WY">Wyoming</option>
                                                                            <option value="AA">Armed Forces Americas
                                                                            </option>
                                                                            <option value="AE">Armed Forces Europe
                                                                            </option>
                                                                            <option value="AP">Armed Forces Pacific
                                                                            </option>
                                                                        </select><!-- react-empty: 930 --></div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="inputWrapper input-one-third input-one-third-last">
                                                            <fieldset><label class="" id="postal_code-label">
                                                                    <!-- react-text: 934 -->Postal Code
                                                                    <!-- /react-text --></label><input type="text"
                                                                                                       class="" value=""
                                                                                                       name="postal_code"
                                                                                                       aria-labelledby="postal_code-label"
                                                                                                       data-recurly="postal_code">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-1.12.3.min.js"
                    integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
                    crossorigin="anonymous"></script>
            <script
                    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
                    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
                    crossorigin="anonymous"></script>
            <script>
                $(function() {
                    $('form.require-validation').bind('submit', function(e) {
                        var $form         = $(e.target).closest('form'),
                            inputSelector = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'].join(', '),
                            $inputs       = $form.find('.required').find(inputSelector),
                            $errorMessage = $form.find('div.error'),
                            valid         = true;

                        $errorMessage.addClass('hide');
                        $('.has-error').removeClass('has-error');
                        $inputs.each(function(i, el) {
                            var $input = $(el);
                            if ($input.val() === '') {
                                $input.parent().addClass('has-error');
                                $errorMessage.removeClass('hide');
                                e.preventDefault(); // cancel on first error
                            }
                        });
                    });
                });

                $(function() {
                    var $form = $("#recurly-cc-form");
                    //var $amount = $('#activate_PlanList');

                    $form.on('submit', function(e) {
                        if (!$form.data('cc-on-file')) {
                            e.preventDefault();
                            //Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                            Stripe.setPublishableKey("<?php echo env('STRIPE_KEY') ?>");
                            Stripe.createToken({
                                number: $('.card-number').val(),
                                cvc: $('.card-ccv').val(),
                                exp_month: $('.card-expiry-month').val(),
                                exp_year: $('.card-expiry-year').val()
                                //amount: $amount.data('pay-amount')
                            }, stripeResponseHandler);
                        }
                    });

                    function stripeResponseHandler(status, response) {
                        if (response.error) {
                            $('.error')
                                .removeClass('hide')
                                .find('.alert')
                                .text(response.error.message);
                        } else {
                            // token contains id, last4, and card type
                            var token = response['id'];
                            // insert the token into the form so it gets submitted to the server
                            $form.find('input[type=text]').empty();
                            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                            $form.get(0).submit();
                        }
                    }
                })
            </script>
            {{--<script type="text/javascript">--}}
            {{--var payWithAmazon = new PayWithAmazon({--}}
            {{--clientId: 'amzn1.application-oa2-client.88337a2f01234cde9cddf67a3b7d1ad7',--}}
            {{--sellerId: 'A18DO9VV3ZTNQ8',--}}
            {{--production: true,--}}
            {{--button: { id: 'amazon-login', color: 'DarkGray', size: 'x-large' },--}}
            {{--wallet: { id: 'amazon-wallet', width: 515 },--}}
            {{--consent: { id: 'amazon-consent', width: 515 },--}}
            {{--addressBook: { id: 'amazon-address-book', width: 515 }--}}
            {{--});--}}

            {{--payWithAmazon.on('change', AmazonMessage.change);--}}
            {{--payWithAmazon.on('ready.addressBook', AmazonMessage.addressBookReady);--}}
            {{--</script>--}}
        </div>
    </div>

    @extends('layouts.right')
@section('login_content')

    {{--<div class="twitter-wrapper" style="-webkit-animation-delay: .5s">--}}
    {{--<a class="twitter-timeline"--}}
    {{--data-chrome="noheader transparent noborders nofooter"--}}
    {{--data-theme="dark"--}}
    {{--data-link-color="#FAB81E"--}}
    {{--href="https://twitter.com/romwod">--}}
    {{--</a>--}}
    {{--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
    {{--</div>--}}

    {{--<div class="rotating-announcement">--}}
    {{--<img src="{{ asset('images/dashboard/sneaks.png') }}">--}}
    {{--</div>--}}

    <div class="dashboard-footer">
        <ul>
            <li>ROMWOD, LLC @ 2017</li>
            <li>All Rights Reserved</li>
            <li style="margin-top: 8px">
                <a href="#">Terms of Use</a>
                |
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
    </div>


@endsection

@endsection
