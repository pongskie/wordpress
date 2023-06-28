<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!--  ----------------------------------------------------------------------  -->
                <!--  NOTE: Please add the following <FORM> element to your page.             -->
                <!--  ----------------------------------------------------------------------  -->

                <form
                  id="inquiry-form"
                  class="inquiry-form form-standard"
                  action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
                  method="POST"
                >
                  <input
                    type="hidden"
                    name="captcha_settings"
                    value='{"keyname":"ePLDTW2LV3","fallback":"true","orgId":"00D1s0000000yfM","ts":""}'
                  />
                  <input type="hidden" name="oid" value="00D1s0000000yfM" />
                  <input
                    type="hidden"
                    name="retURL"
                    value="<?php echo site_url(); ?>/success/"
                  />

                  <!--  ------------------------------------------------------------------------>
                  <!--  NOTE: These fields are optional debugging elements. Please uncomment -->
                  <!--  these lines if you wish to test in debug mode.  ------------------------------------------------------------------------>                        
        <input type="hidden" name="debug" value=1>                              
        <input type="hidden" name="debugEmail"                                  
        value="warjie.malibago@capgemini.com">                                  
        

                  <div class="row justify-content-center">
                    <div class="col-md-10">
                      <div class="row">
                        <header class="col-md-12">
                          <h4 class="fs-5 mb-4">Personal Information</h4>
                        </header>
                        <div class="col-md-6">
                          <label for="first_name"
                            >First Name
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <input
                            id="first_name"
			    class="form-control border border-1"
                            maxlength="40"
                            name="first_name"
                            size="20"
                            type="text"
                            data-parsley-required="true"
                            data-parsley-maxlength="40"
                            pattern="/^[A-Za-z ,0-9,!@#$%^&*()_+|~=`{}\x5C[\]:\x22;'<>?,.\/-]+$/i"
                          />
                        </div>
                        <div class="col-md-6">
                          <label for="last_name"
                            >Last Name
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <input
                            id="last_name"
			    class="form-control border border-1"
                            maxlength="80"
                            name="last_name"
                            size="20"
                            type="text"
                            data-parsley-required="true"
                            data-parsley-maxlength="80"
                            pattern="/^[A-Za-z ,0-9,!@#$%^&*()_+|~=`{}\x5C[\]:\x22;'<>?,.\/-]+$/i"
                          />
                        </div>
                      </div>

                      <div class="row">
                        <header class="col-md-12">
                          <h4 class="fs-5 my-4">Contact Information</h4>
                        </header>
                        <div class="col-md-6">
                          <label for="email"
                            >Email
                            <span class="text-alert"><sup>*</sup></span></label
                          ><input
                            id="email"
			    class="form-control border border-1"
                            maxlength="80"
                            name="email"
                            size="20"
                            type="text"
                            data-parsley-required="true"
                            data-parsley-type="email"
                            data-parsley-maxlength="40"
                          />
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12">
                              <label for="mobile"
                                >Mobile
                                <span class="text-alert"
                                  ><sup>*</sup></span
                                ></label
                              >
                            </div>
                            <div class="col-md-3 country-codes">
                              <select
                                data-placeholder="+63"
                                name="country_codes"
                                id="country_codes"
                                class="form-control border border-1 rounded-0 select2-active d-none"
                              >
                                <option></option>
                                <option value="Afganistan">+93</option>
                                <option value="Albania">+355</option>
                                <option value="Algeria">+213</option>
                                <option value="American Samoa">+684</option>
                                <option value="Andorra">+376</option>
                                <option value="Angola">+244</option>
                                <option value="Anguilla">+1264</option>
                                <option value="Antigua & Barbuda">+1268</option>
                                <option value="Argentina">+54</option>
                                <option value="Armenia">+374</option>
                                <option value="Aruba">+297</option>
                                <option value="Australia">+61</option>
                                <option value="Austria">+43</option>
                                <option value="Azerbaijan">+994</option>
                                <option value="Bahamas">+1242</option>
                                <option value="Bahrain">+973</option>
                                <option value="Bangladesh">+880</option>
                                <option value="Barbados">+1246</option>
                                <option value="Belarus">+375</option>
                                <option value="Belgium">+32</option>
                                <option value="Belize">+501</option>
                                <option value="Benin">+229</option>
                                <option value="Bermuda">+1441</option>
                                <option value="Bhutan">+975</option>
                                <option value="Bolivia">+591</option>
                                <option value="Bonaire">+599</option>
                                <option value="Bosnia & Herzegovina">+387</option>
                                <option value="Botswana">+267</option>
                                <option value="Brazil">+55</option>
                                <option value="British Indian Ocean Territory">
                                  +246
                                </option>
                                <option value="Brunei">+673</option>
                                <option value="Bulgaria">+359</option>
                                <option value="Burkina Faso">+226</option>
                                <option value="Burundi">+257</option>
                                <option value="Cambodia">+855</option>
                                <option value="Cameroon">+237</option>
                                <option value="Canada">+1</option>
                                <option value="Canary Islands">+34</option>
                                <option value="Cape Verde">+238</option>
                                <option value="Cayman Islands">+1345</option>
                                <option value="Central African Republic">
                                  +236
                                </option>
                                <option value="Chad">+235</option>
                                <option value="Chile">+56</option>
                                <option value="China">+86</option>
                                <option value="Colombia">+57</option>
                                <option value="Comoros">+269</option>
                                <option value="Congo">+242</option>
                                <option value="Cook Islands">+682</option>
                                <option value="Costa Rica">+506</option>
                                <option value="Cote DIvoire">+225</option>
                                <option value="Croatia">+385</option>
                                <option value="Cuba">+53</option>
                                <option value="Cyprus">+357</option>
                                <option value="Czech Republic">+42</option>
                                <option value="Denmark">+45</option>
                                <option value="Djibouti">+253</option>
                                <option value="Dominica">+1809</option>
                                <option value="Dominican Republic">+1809</option>
                                <option value="Timor-Leste">+670</option>
                                <option value="Ecuador">+593</option>
                                <option value="Egypt">+20</option>
                                <option value="El Salvador">+503</option>
                                <option value="Equatorial Guinea">+240</option>
                                <option value="Eritrea">+291</option>
                                <option value="Estonia">+372</option>
                                <option value="Ethiopia">+251</option>
                                <option value="Falkland Islands">+500</option>
                                <option value="Faroe Islands">+298</option>
                                <option value="Fiji">+679</option>
                                <option value="Finland">+358</option>
                                <option value="France">+33</option>
                                <option value="French Guiana">+594</option>
                                <option value="French Polynesia">+689</option>
                                <option value="Gabon">+241</option>
                                <option value="Gambia">+220</option>
                                <option value="Georgia">+7880</option>
                                <option value="Germany">+49</option>
                                <option value="Ghana">+233</option>
                                <option value="Gibraltar">+350</option>
                                <option value="Great Britain">
                                  Great Britain
                                </option>
                                <option value="Greece">+30</option>
                                <option value="Greenland">+299</option>
                                <option value="Grenada">+1473</option>
                                <option value="Guadeloupe">+590</option>
                                <option value="Guam">+671</option>
                                <option value="Guatemala">+502</option>
                                <option value="Guinea">+224</option>
                                <option value="Guyana">+592</option>
                                <option value="Haiti">+509</option>
                                <option value="Honduras">+504</option>
                                <option value="Hong Kong">+852</option>
                                <option value="Hungary">+36</option>
                                <option value="Iceland">+354</option>
                                <option value="India">+91</option>
                                <option value="Indonesia">+62</option>
                                <option value="Iran">+98</option>
                                <option value="Iraq">+964</option>
                                <option value="Ireland">+353</option>
                                <option value="Israel">+972</option>
                                <option value="Italy">+39</option>
                                <option value="Jamaica">+1876</option>
                                <option value="Japan">+81</option>
                                <option value="Jordan">+962</option>
                                <option value="Kazakhstan">+7</option>
                                <option value="Kenya">+254</option>
                                <option value="Kiribati">+686</option>
                                <option value="North Korea">+850</option>
                                <option value="South Korea">+82</option>
                                <option value="Kuwait">+965</option>
                                <option value="Kyrgyzstan">+996</option>
                                <option value="Laos">+856</option>
                                <option value="Latvia">+371</option>
                                <option value="Lebanon">+961</option>
                                <option value="Lesotho">+266</option>
                                <option value="Liberia">+231</option>
                                <option value="Libya">+218</option>
                                <option value="Liechtenstein">+417</option>
                                <option value="Lithuania">+370</option>
                                <option value="Luxembourg">+352</option>
                                <option value="Macau">+853</option>
                                <option value="Macedonia">+389</option>
                                <option value="Madagascar">+261</option>
                                <option value="Malaysia">+60</option>
                                <option value="Malawi">+265</option>
                                <option value="Maldives">+960</option>
                                <option value="Mali">+223</option>
                                <option value="Malta">+356</option>
                                <option value="Marshall Islands">+692</option>
                                <option value="Martinique">+596</option>
                                <option value="Mauritania">+222</option>
                                <option value="Mauritius">+230</option>
                                <option value="Mayotte">+269</option>
                                <option value="Mexico">+52</option>
                                <option value="Micronesia">+691</option>
                                <option value="Moldova">+373</option>
                                <option value="Monaco">+377</option>
                                <option value="Mongolia">+976</option>
                                <option value="Montserrat">+1664</option>
                                <option value="Morocco">+212</option>
                                <option value="Mozambique">+258</option>
                                <option value="Myanmar">+95</option>
                                <option value="Namibia ">+264</option>
                                <option value="Nauru">+674</option>
                                <option value="Nepal">+977</option>
                                <option value="Netherlands">+31</option>
                                <option value="Nevis">+869</option>
                                <option value="New Caledonia">+687</option>
                                <option value="New Zealand">+64</option>
                                <option value="Nicaragua">+505</option>
                                <option value="Niger">+227</option>
                                <option value="Nigeria">+234</option>
                                <option value="Niue">+683</option>
                                <option value="Norfolk Island">+672</option>
                                <option value="Norway">+47</option>
                                <option value="Oman">+968</option>
                                <option value="Pakistan">+92</option>
                                <option value="Palau Island">+680</option>
                                <option value="Palestine">+970</option>
                                <option value="Panama">+507</option>
                                <option value="Papua New Guinea">+675</option>
                                <option value="Paraguay">+595</option>
                                <option value="Peru">+51</option>
                                <option value="+63" selected>+63</option>
                                <option value="Poland">+48</option>
                                <option value="Portugal">+351</option>
                                <option value="Puerto Rico">+1787</option>
                                <option value="Qatar">+974</option>
                                <option value="Republic of Montenegro">
                                  +382
                                </option>
                                <option value="Republic of Serbia">+381</option>
                                <option value="Reunion">+262</option>
                                <option value="Romania">+40</option>
                                <option value="Russia">+7</option>
                                <option value="Rwanda">+250</option>
                                <option value="St Eustatius">+599-3</option>
                                <option value="St Helena">+290</option>
                                <option value="St Lucia">+758</option>
                                <option value="St Pierre & Miquelon">+508</option>
                                <option value="St Vincent & Grenadines">
                                  +784
                                </option>
                                <option value="Samoa">+685</option>
                                <option value="Samoa American">+684</option>
                                <option value="San Marino">+378</option>
                                <option value="Sao Tome & Principe">+239</option>
                                <option value="Saudi Arabia">+966</option>
                                <option value="Senegal">+221</option>
                                <option value="Seychelles">+248</option>
                                <option value="Sierra Leone">+232</option>
                                <option value="Singapore">+65</option>
                                <option value="Slovakia">+421</option>
                                <option value="Slovenia">+386</option>
                                <option value="Solomon Islands">+677</option>
                                <option value="Somalia">+252</option>
                                <option value="South Africa">+27</option>
                                <option value="Spain">+34</option>
                                <option value="Sri Lanka">+94</option>
                                <option value="St. Helena">+290</option>
                                <option value="St. Kitts">+1869</option>
                                <option value="St. Lucia">+1758</option>
                                <option value="Sudan">+249</option>
                                <option value="Suriname">+597</option>
                                <option value="Swaziland">+268</option>
                                <option value="Sweden">+46</option>
                                <option value="Switzerland">+41</option>
                                <option value="Syria">+963</option>
                                <option value="Taiwan">+886</option>
                                <option value="Tajikistan">+7</option>
                                <option value="Tanzania">+255</option>
                                <option value="Thailand">+66</option>
                                <option value="Togo">+228</option>
                                <option value="Tokelau">+690</option>
                                <option value="Tonga">+676</option>
                                <option value="Trinidad & Tobago">+1868</option>
                                <option value="Tunisia">+216</option>
                                <option value="Turkey">+90</option>
                                <option value="Turkmenistan">+993</option>
                                <option value="Turks & Caicos Islands">
                                  +1649
                                </option>
                                <option value="Tuvalu">+688</option>
                                <option value="Uganda">+256</option>
                                <option value="United Kingdom">+44</option>
                                <option value="Ukraine">+380</option>
                                <option value="United Arab Erimates">+971</option>
                                <option value="United States of America">
                                  +1
                                </option>
                                <option value="Uraguay">+598</option>
                                <option value="Uzbekistan">+998</option>
                                <option value="Vanuatu">+678</option>
                                <option value="Vatican City State">+379</option>
                                <option value="Venezuela">+58</option>
                                <option value="Vietnam">+84</option>
                                <option value="Virgin Islands (Brit)">
                                  +1284
                                </option>
                                <option value="Virgin Islands (USA)">
                                  +1340
                                </option>
                                <option value="Wallis and Futuna">+681</option>
                                <option value="Yemen">+967</option>
                                <option value="Zaire">+243</option>
                                <option value="Zambia">+260</option>
                                <option value="Zimbabwe">+263</option>
                              </select>
                            </div>
                            <div class="col-md-9">
                              <input
                                id="mobile-number"
				class="form-control border border-1"
                                maxlength="40"
                                name="mobile-number"
                                size="20"
                                type="text"
                                data-parsley-required="true"
                                data-parsley-type="integer"
                                data-parsley-errors-container="#field-error--mobile"
                              />
                              <input id="mobile" name="mobile" type="hidden" />
                              <div id="field-error--mobile" class="order-2"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <label for="street">Street</label>
                          <textarea
                            id="street"
			    class="form-control border border-1 rounded-0"
                            name="street"
                            maxlength="95"
                            name="street"
                            size="20"
                            rows="3"
                            data-parsley-required="false"
                          ></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 select-wrapper select2-field">
                          <label for="country"
                            >Country
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            maxlength="40"
                            size="20"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--country"
                            data-placeholder="Country"
                            name="country"
                            id="country"
                            class="form-control border border-1 rounded-0 select2-active d-none"
                          >
                            <option></option>
                          </select>
                          <div id="field-error--country" class="order-2"></div>
                        </div>
                        <div class="col-md-6 select-wrapper select2-field">
                          <label for="state"
                            >State/Province
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            maxlength="50"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--state"
                            name="state"
                            id="state"
                            class="form-control border border-1 rounded-0 select2-active d-none"
                          >
                            <option></option>
                          </select>
                          <div id="field-error--state" class="order-2"></div>
                        </div>
                        <div class="col-md-6">
                          <label for="city"
                            >City
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <input
                            id="city"
			    class="form-control border border-1"
                            maxlength="40"
                            name="city"
                            size="20"
                            type="text"
                            data-parsley-required="true"
                            data-parsley-maxlength="40"
                            pattern="/^[A-Za-z ,0-9,!@#$%^&*()_+|~=`{}\x5C[\]:\x22;'<>?,.\/-]+$/i"
                          />
                          <div id="field-error--city" class="order-2"></div>
                        </div>
                        <div class="col-md-6">
                          <label for="zip">Zip Code</label>
                          <input
                            id="zip"
			    class="form-control border border-1"
                            maxlength="20"
                            name="zip"
                            size="20"
                            type="text"
                            data-parsley-required="false"
                            data-parsley-maxlength="20"
                            data-parsley-type="integer"
                          /><br />
                        </div>
                      </div>

                      <div class="row">
                        <header class="col-md-12">
                          <h4 class="fs-5 my-4">Company Information</h4>
                        </header>
                        <div class="col-md-6">
                          <label for="company"
                            >Company
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <input
                            id="company"
			    class="form-control border border-1 mb-4"
                            maxlength="40"
                            name="company"
                            size="20"
                            type="text"
                            data-parsley-required="true"
                            data-parsley-maxlength="40"
                            pattern="/^[A-Za-z ,0-9,!@#$%^&*()_+|~=`{}\x5C[\]:\x22;'<>?,.\/-]+$/i"
                          />
                          <div
                            id="field-error--company-name"
                            class="order-2"
                          ></div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                          <label for="industry"
                            >Industry
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            id="industry"
			    class="form-control border border-1 mb-4 rounded-0"
                            name="industry"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--industry"
                          >
                            <option value="">--None--</option>
                            <option value="Bank &amp; Financial Institution">
                              Bank &amp; Financial Institution
                            </option>
                            <option value="Business &amp; Prof Svcs">
                              Business &amp; Prof Svcs
                            </option>
                            <option value="Education">Education</option>
                            <option value="Farm Support Svcs">
                              Farm Support Svcs
                            </option>
                            <option value="Government">Government</option>
                            <option value="Health Care Sector">
                              Health Care Sector
                            </option>
                            <option value="IT Applications &amp; Svcs">
                              IT Applications &amp; Svcs
                            </option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Media">Media</option>
                            <option value="Mining">Mining</option>
                            <option value="Non-Profit Institutions">
                              Non-Profit Institutions
                            </option>
                            <option value="Offshoring &amp; Outsourcing">
                              Offshoring &amp; Outsourcing
                            </option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Retail Sector">Retail Sector</option>
                            <option value="Transportation &amp; Logistics">
                              Transportation &amp; Logistics
                            </option>
                            <option value="Travel &amp; Tourism">
                              Travel &amp; Tourism
                            </option>
                            <option value="Utilities">Utilities</option>
                          </select>
                          <div id="field-error--industry" class="order-2"></div>
                        </div>
                        <div class="col-md-6">
                          <label for="00N2x000006cD07"
                            >Sub-Industry:
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            id="00N2x000006cD07"
			    class="form-control border border-1 rounded-0"
                            name="00N2x000006cD07"
                            title="Sub-Industry"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--subsindustry"
                            data-placeholder="Select Sub-Industry"
                          >
                            <option value="">--None--</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Fin/Lending/Leasing">
                              Fin/Lending/Leasing
                            </option>
                            <option value="Foreign">Foreign</option>
                            <option value="Ins Agents &amp; Carriers">
                              Ins Agents &amp; Carriers
                            </option>
                            <option value="Insurance">Insurance</option>
                            <option value="Investment/Securities">
                              Investment/Securities
                            </option>
                            <option value="Local Banks">Local Banks</option>
                            <option value="Fintech">Fintech</option>
                            <option value="Amusement &amp; Recreation Svcs">
                              Amusement &amp; Recreation Svcs
                            </option>
                            <option value="Auditing Firms">Auditing Firms</option>
                            <option value="Auto Repair, Svcs &amp; Parking">
                              Auto Repair, Svcs &amp; Parking
                            </option>
                            <option value="Business Services">
                              Business Services
                            </option>
                            <option value="Computer Leasing/Rentals">
                              Computer Leasing/Rentals
                            </option>
                            <option value="Construction">Construction</option>
                            <option value="Distribution">Distribution</option>
                            <option value="Educational Services">
                              Educational Services
                            </option>
                            <option value="Health Services">
                              Health Services
                            </option>
                            <option value="Law Firms">Law Firms</option>
                            <option value="Manpower Services">
                              Manpower Services
                            </option>
                            <option value="Membership Organizations">
                              Membership Organizations
                            </option>
                            <option value="Personal">Personal</option>
                            <option value="Professional">Professional</option>
                            <option value="Research">Research</option>
                            <option value="Social Services">
                              Social Services
                            </option>
                            <option value="Colleges">Colleges</option>
                            <option value="Primary &amp; Secondary">
                              Primary &amp; Secondary
                            </option>
                            <option value="Universities">Universities</option>
                            <option value="Agricultural Production Crops">
                              Agricultural Production Crops
                            </option>
                            <option value="Agricultural Services">
                              Agricultural Services
                            </option>
                            <option value="Fishing">Fishing</option>
                            <option value="Livestock Prod/Animal Spclty">
                              Livestock Prod/Animal Spclty
                            </option>
                            <option value="Govt Owned &amp; Controlled Corp">
                              Govt Owned &amp; Controlled Corp
                            </option>
                            <option value="Local Government Units">
                              Local Government Units
                            </option>
                            <option value="National">National</option>
                            <option value="OP/VIP/Embassies/Intl Org">
                              OP/VIP/Embassies/Intl Org
                            </option>
                            <option value="Others">Others</option>
                            <option value="Health Maintenance">
                              Health Maintenance
                            </option>
                            <option value="Hospitals">Hospitals</option>
                            <option value="Clinics">Clinics</option>
                            <option value="Pharma/Manufacturer/Distr">
                              Pharma/Manufacturer/Distr
                            </option>
                            <option value="Content Delivery Network">
                              Content Delivery Network
                            </option>
                            <option value="e-Commerce">e-Commerce</option>
                            <option value="Online Gambling">
                              Online Gambling
                            </option>
                            <option value="Online Gaming">Online Gaming</option>
                            <option value="Over the Top">Over the Top</option>
                            <option value="System Integrators/Vendors">
                              System Integrators/Vendors
                            </option>
                            <option value="Apparel/Fabric &amp; Similar Matls">
                              Apparel/Fabric &amp; Similar Matls
                            </option>
                            <option value="Chemicals And Allied Products">
                              Chemicals And Allied Products
                            </option>
                            <option value="Electronic, Elec Equipt &amp; Comp">
                              Electronic, Elec Equipt &amp; Comp
                            </option>
                            <option value="Fabricated Metals/Transpo Eqpt">
                              Fabricated Metals/Transpo Eqpt
                            </option>
                            <option value="Food &amp; Beverage">
                              Food &amp; Beverage
                            </option>
                            <option value="Furnitures &amp; Fixtures">
                              Furnitures &amp; Fixtures
                            </option>
                            <option value="Industrial/Commercial Machy">
                              Industrial/Commercial Machy
                            </option>
                            <option value="Leather &amp; Leather Products">
                              Leather &amp; Leather Products
                            </option>
                            <option value="Lumber &amp; Wood Products">
                              Lumber &amp; Wood Products
                            </option>
                            <option value="Measure/Analyzing/Control Eqpt">
                              Measure/Analyzing/Control Eqpt
                            </option>
                            <option value="Medical/Optical Goods">
                              Medical/Optical Goods
                            </option>
                            <option value="Miscellaneous Mfg Industries">
                              Miscellaneous Mfg Industries
                            </option>
                            <option value="Paper &amp; Allied Products">
                              Paper &amp; Allied Products
                            </option>
                            <option value="Petrol Refining &amp; Related Ind">
                              Petrol Refining &amp; Related Ind
                            </option>
                            <option value="Print, Publishing &amp; Allied Ind">
                              Print, Publishing &amp; Allied Ind
                            </option>
                            <option value="Rubber &amp; Misc Plastic Product">
                              Rubber &amp; Misc Plastic Product
                            </option>
                            <option value="Semicon">Semicon</option>
                            <option value="Stone, Clay, Glass, Concrete">
                              Stone, Clay, Glass, Concrete
                            </option>
                            <option value="Textile Mill Products">
                              Textile Mill Products
                            </option>
                            <option value="Tobacco Products">
                              Tobacco Products
                            </option>
                            <option value="Cable">Cable</option>
                            <option value="Publications">Publications</option>
                            <option value="Radio &amp; Television">
                              Radio &amp; Television
                            </option>
                            <option value="Coal/Metals/Quarrying">
                              Coal/Metals/Quarrying
                            </option>
                            <option value="Oil And Gas Extraction">
                              Oil And Gas Extraction
                            </option>
                            <option value="Non-Profit Organizations">
                              Non-Profit Organizations
                            </option>
                            <option value="Religious Organizations">
                              Religious Organizations
                            </option>
                            <option value="Animation">Animation</option>
                            <option value="BPO">BPO</option>
                            <option value="Call Center">Call Center</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Information Technology">
                              Information Technology
                            </option>
                            <option value="Shared Services">
                              Shared Services
                            </option>
                            <option value="Horizontal Development">
                              Horizontal Development
                            </option>
                            <option value="Vertical Development">
                              Vertical Development
                            </option>
                            <option value="Apparel &amp; Accessories Stores">
                              Apparel &amp; Accessories Stores
                            </option>
                            <option value="Auto Dealer &amp; Gas Station">
                              Auto Dealer &amp; Gas Station
                            </option>
                            <option value="Bldg Matls, HW, Garden Supply">
                              Bldg Matls, HW, Garden Supply
                            </option>
                            <option value="Food Retail Outlets">
                              Food Retail Outlets
                            </option>
                            <option value="Furniture, Furnishing, Eqpt">
                              Furniture, Furnishing, Eqpt
                            </option>
                            <option value="General Merchandise Stores">
                              General Merchandise Stores
                            </option>
                            <option value="Misc Retail Industries">
                              Misc Retail Industries
                            </option>
                            <option value="Air">Air</option>
                            <option value="Freight/Warehousing">
                              Freight/Warehousing
                            </option>
                            <option value="Land">Land</option>
                            <option value="Public Utility Vehicles">
                              Public Utility Vehicles
                            </option>
                            <option value="Sea">Sea</option>
                            <option value="Gaming/Casino">Gaming/Casino</option>
                            <option value="Hotels/Resorts">Hotels/Resorts</option>
                            <option value="Travel Agencies">
                              Travel Agencies
                            </option>
                            <option value="Gas &amp; Oil">Gas &amp; Oil</option>
                            <option value="Power">Power</option>
                            <option value="Telco">Telco</option>
                            <option value="Water">Water</option>
                          </select>
                          <div
                            id="field-error--subsindustry"
                            class="order-2"
                          ></div>
                        </div>
                        <div class="col-md-6 select-wrapper select2-field">
                          <label for="00N2x000006cCzj"
                            >Business Type:
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            id="00N2x000006cCzj"
                            class="form-control border border-1 mb-4 rounded-0"
                            name="00N2x000006cCzj"
                            title="Business Type"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--business-type"
                            data-placeholder="Select Business Type"
                          >
                            <option value="">--None--</option>
                            <option value="Cooperative">Cooperative</option>
                            <option value="Corporation">Corporation</option>
                            <option value="Foreign">Foreign</option>
                            <option value="GOCC">GOCC</option>
                            <option value="Government">Government</option>
                            <option value="NGO">NGO</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Sole Proprietorship">
                              Sole Proprietorship
                            </option>
                            <option value="One Person Corporation">
                              One Person Corporation
                            </option>
                          </select>
                          <div
                            id="field-error--business-type"
                            class="order-2"
                          ></div>
                        </div>
                        <div class="col-md-6 select-wrapper select2-field">
                          <label for="00N2x000006cCzl"
                            >Company Size:
                            <span class="text-alert"><sup>*</sup></span></label
                          >
                          <select
                            id="00N2x000006cCzl"
                            class="form-control border border-1 mb-4 rounded-0"
                            name="00N2x000006cCzl"
                            title="Company Size"
                            data-parsley-required="true"
                            data-parsley-errors-container="#field-error--company-size"
                            data-placeholder="Select Company Size"
                            class="select2-active d-none"
                          >
                            <option value="">--None--</option>
                            <option value="1 - 15 employees">
                              1 - 15 employees
                            </option>
                            <option value="16 - 100 employees">
                              16 - 100 employees
                            </option>
                            <option value="101 - 500 employees">
                              101 - 500 employees
                            </option>
                            <option value="501 - 1000 employees">
                              501 - 1000 employees
                            </option>
                            <option value="1001+ employees">
                              1001+ employees
                            </option>
                          </select>
                          <div
                            id="field-error--company-size"
                            class="order-2"
                          ></div>
                        </div>
                      </div>
                      <!--insert -->

                      <div class="row">
                        <div class="col-md-12">
                          <label for="00N1s0000022sSP">Message:</label>
                          <textarea
                            id="00N1s0000022sSP"
                            class="form-control border border-1 rounded-0"
                            name="00N1s0000022sSP"
                            rows="3"
                            type="text"
                            wrap="soft"
                            data-parsley-required="false"
                          ></textarea>
                        </div>
                      </div>
                      <br />
                      <div class="row">
                        <div class="col-md-12">
                          <?php
    $url = $_SERVER['HTTP_REFERER'];
    $parsed_url = parse_url($url);
    $fragment = isset($parsed_url['path']) ? $parsed_url['path'] : '';
    $host = isset($parsed_url['host']) ? $parsed_url['host'] : '';
    $scheme = isset($parsed_url['scheme']) ? $parsed_url['scheme'] : '';
    $new_fragment = '';
    if(!empty($fragment)){
    $fragment_parts = explode('/', $fragment);
    // Remove the last item
    array_pop($fragment_parts);
    // Re-assemble the fragment
    $new_fragment = implode('/', $fragment_parts);
    }
    // Re-assemble the url
    $new_url = str_replace("-", " ", $new_fragment);
    list($var1, $var2) = explode("/", $new_url);
    ?>

                          <div class="row d-none">
                            <div class="col-md-12">
                              <select
                                id="00N1s0000022sc8"
                                name="00N1s0000022sc8"
                                title="Service Type"
                              >
                                <option value="">--None--</option>
                                <option
                                  value="<?php echo ucwords($var1.''); echo ucwords($var2.''); echo ''; ?>"
                                  selected
                                >
                                  <?php echo ucwords($var1.''); echo ucwords($var2.''); echo ''; ?>
                                </option>
                              </select>
                            </div>
                          </div>

                          <?php
    $url2 = $_SERVER['HTTP_REFERER'];
    $parsed_url2 = parse_url($url2);
    $fragment2 = isset($parsed_url2['path']) ? $parsed_url2['path'] : '';
    $host2 = isset($parsed_url2['host']) ? $parsed_url2['host'] : '';
    $scheme2 = isset($parsed_url2['scheme']) ? $parsed_url2['scheme'] : '';
    $new_fragment2 = '';
    if(!empty($fragment2)){
    $fragment_parts2 = explode('/', $fragment2);
    // Remove the last item
    array_pop($fragment_parts2);
    // Re-assemble the fragment
    $new_fragment2 = implode('/', $fragment_parts2);
    }
    // Re-assemble the url
    $new_url2 = str_replace("-", " ", $new_fragment2);
    ?>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="row d-none">
                                <label for="00N2x000006cCzs"
                                  >Lead Product of Interest:</label
                                >
                                <textarea
                                  id="00N2x000006cCzs"
                                  name="00N2x000006cCzs"
                                  type="text"
                                  wrap="soft"
                                >
              <?php echo ucwords(basename($new_url2)); ?>
          </textarea
                                >
                              </div>
                            </div>
                          </div>

                          <div class="d-none">
                            LOB(Line of Business):
                            <input
                              type="hidden"
                              id="lead_source"
                              name="lead_source"
                              value="Web"
                            />
                            <input
                              type="hidden"
                              id="00N2x000006cCzr"
                              name="00N2x000006cCzr"
                              title="LOB(Line of Business)"
                              value="ePLDT"
                            />
                            <input
                              type="hidden"
                              id="recordType"
                              name="recordType"
                              value="0122x000000ha0a"
                            />
                          </div>

                          <div class="row">
                            <div class="col-md-1">
                              <input
                                id="00N2x000008d42y"
                                class="form-control border border-1"
                                name="00N2x000008d42y"
                                type="checkbox"
                                value="1"
                                data-parsley-required="true"
                              />
                            </div>
                            <div class="col-md-11">
                              <span
                                >I have read and understood the
                                <a
                                  class="text-alert"
                                  href="<?php echo site_url(); ?>/privacy-policy/"
                                  >ePLDT Privacy Notice</a
                                >
                                and the purposes for which my personal data is
                                processed.</span
                              ><br />
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-md-1">
                              <input
                                id="00N2x000008d432"
                                class="form-control border border-1"
                                name="00N2x000008d432"
                                type="checkbox"
                                value="1"
                                data-parsley-required="true"
                              />
                            </div>
                            <div class="col-md-11">
                              <span
                                >I allow ePLDT's Relationship Manager to contact
                                me via phone call or email within 24-72 hours from
                                my submission of the Online Form, in order to
                                receive more information about the enterprise
                                product/s I have selected, and receive relevant
                                e-brochures about the same via email.</span
                              ><br />
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-md-1">
                              <input
                                id="00N2x000008qV21"
                                class="form-control border border-1"
                                name="00N2x000008qV21"
                                type="checkbox"
                                value="1"
                                data-parsley-required="true"
                              />
                            </div>
                            <div class="col-md-11">
                              <span>Marketing Consent</span>
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-md-1">
                              <input
                                id="00N2x000008qV20"
                                class="form-control border border-1"
                                name="00N2x000008qV20"
                                type="checkbox"
                                value="1"
                                data-parsley-required="true"
                              />
                            </div>
                            <div class="col-md-11">
                              <span>Events Consent</span>
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-md-12">
                              <div
                                class="g-recaptcha"
                                data-sitekey="6Ldg3G8gAAAAANaMwIUl2lLnFcXoBENJq7s5cpmy"
                                data-expired-callback="addParsleyRequired"
                                data-error-callback="addParsleyRequired"
                              ></div>
                            </div>
                          </div>
                          <br />
                          <div class="text-center">
                            <input
                              id="submit-btn"
                              class="btn btn-danger btn-lg rounded-0 mb-4"
                              type="submit"
                              name="submit"
                              value="Submit Inquiry"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

</article><!-- #post-<?php the_ID(); ?> -->

<script>
$('#inquiry-form').submit(function() {
  $('#mobile').val($("[name='country_codes']").val().replace("+", "") + $("[name='mobile-number']").val());
});
</script>
