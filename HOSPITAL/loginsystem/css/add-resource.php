
<?php include_once('includes/Home_header.php');?>
<div class="container mb-5">
            <div class="row">

                <div class="mx-auto col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Add Resource Information</h2>
                            <hr>
                            <form target="" method="POST" action="upload_resource.php">
                                                                <div>
                                    <label for="resource_type">Resource type</label>
                                    <select class="form-control" name="type" id="reource_type" required="">
                                        <option value="OXYGEN">OXYGEN</option>
										<option value="MEDICINES">MEDICINES</option>
										<option value="HOSPITAL/AMBULANCE">HOSPITAL/AMBULANCE</option>
										<option value="PLASMA">PLASMA</option>
										<option value="BLOOD DONERS">BLOOD DONERS</option>
										<option value="FOOD SERVICES">FOOD SERVICES</option>
										<option value="QUARANTINE PLACES">QUARANTINE PLACES</option>
										<option value="AFTER-DEATH SERVICES">AFTER-DEATH SERVICES</option>
										<option value="OTHER SERVICES">OTHER SERVICES</option>                                    </select>
                                </div>
                                <br>
                                <div>
                                    <label for="sts">Select state</label>
                                    <select onchange="print_city('city', this.selectedIndex, '');" id="sts" name="state" class="form-control" required="" ><option value="" selected="">Select State</option><option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option><option value="Daman &amp; Diu">Daman &amp; Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttaranchal">Uttaranchal</option><option value="West Bengal">West Bengal</option></select>
                                </div>
                                <br>
                                <div>
                                    <label for="city">Select city</label>
                                    <select id="city" name="city" class="form-control" required=""><option value="" selected="">Select City</option><option value=" Ahmedabad "> Ahmedabad </option><option value=" Ahwa "> Ahwa </option><option value=" Amod "> Amod </option><option value=" Amreli "> Amreli </option><option value=" Anand "> Anand </option><option value=" Anjar "> Anjar </option><option value=" Ankaleshwar "> Ankaleshwar </option><option value=" Babra "> Babra </option><option value=" Balasinor "> Balasinor </option><option value=" Banaskantha "> Banaskantha </option><option value=" Bansada "> Bansada </option><option value=" Bardoli "> Bardoli </option><option value=" Bareja "> Bareja </option><option value=" Baroda "> Baroda </option><option value=" Barwala "> Barwala </option><option value=" Bayad "> Bayad </option><option value=" Bhachav "> Bhachav </option><option value=" Bhanvad "> Bhanvad </option><option value=" Bharuch "> Bharuch </option><option value=" Bhavnagar "> Bhavnagar </option><option value=" Bhiloda "> Bhiloda </option><option value=" Bhuj "> Bhuj </option><option value=" Billimora "> Billimora </option><option value=" Borsad "> Borsad </option><option value=" Botad "> Botad </option><option value=" Chanasma "> Chanasma </option><option value=" Chhota Udaipur "> Chhota Udaipur </option><option value=" Chotila "> Chotila </option><option value=" Dabhoi "> Dabhoi </option><option value=" Dahod "> Dahod </option><option value=" Damnagar "> Damnagar </option><option value=" Dang "> Dang </option><option value=" Danta "> Danta </option><option value=" Dasada "> Dasada </option><option value=" Dediapada "> Dediapada </option><option value=" Deesa "> Deesa </option><option value=" Dehgam "> Dehgam </option><option value=" Deodar "> Deodar </option><option value=" Devgadhbaria "> Devgadhbaria </option><option value=" Dhandhuka "> Dhandhuka </option><option value=" Dhanera "> Dhanera </option><option value=" Dharampur "> Dharampur </option><option value=" Dhari "> Dhari </option><option value=" Dholka "> Dholka </option><option value=" Dhoraji "> Dhoraji </option><option value=" Dhrangadhra "> Dhrangadhra </option><option value=" Dhrol "> Dhrol </option><option value=" Dwarka "> Dwarka </option><option value=" Fortsongadh "> Fortsongadh </option><option value=" Gadhada "> Gadhada </option><option value=" Gandhi Nagar "> Gandhi Nagar </option><option value=" Gariadhar "> Gariadhar </option><option value=" Godhra "> Godhra </option><option value=" Gogodar "> Gogodar </option><option value=" Gondal "> Gondal </option><option value=" Halol "> Halol </option><option value=" Halvad "> Halvad </option><option value=" Harij "> Harij </option><option value=" Himatnagar "> Himatnagar </option><option value=" Idar "> Idar </option><option value=" Jambusar "> Jambusar </option><option value=" Jamjodhpur "> Jamjodhpur </option><option value=" Jamkalyanpur "> Jamkalyanpur </option><option value=" Jamnagar "> Jamnagar </option><option value=" Jasdan "> Jasdan </option><option value=" Jetpur "> Jetpur </option><option value=" Jhagadia "> Jhagadia </option><option value=" Jhalod "> Jhalod </option><option value=" Jodia "> Jodia </option><option value=" Junagadh "> Junagadh </option><option value=" Junagarh "> Junagarh </option><option value=" Kalawad "> Kalawad </option><option value=" Kalol "> Kalol </option><option value=" Kapad Wanj "> Kapad Wanj </option><option value=" Keshod "> Keshod </option><option value=" Khambat "> Khambat </option><option value=" Khambhalia "> Khambhalia </option><option value=" Khavda "> Khavda </option><option value=" Kheda "> Kheda </option><option value=" Khedbrahma "> Khedbrahma </option><option value=" Kheralu "> Kheralu </option><option value=" Kodinar "> Kodinar </option><option value=" Kotdasanghani "> Kotdasanghani </option><option value=" Kunkawav "> Kunkawav </option><option value=" Kutch "> Kutch </option><option value=" Kutchmandvi "> Kutchmandvi </option><option value=" Kutiyana "> Kutiyana </option><option value=" Lakhpat "> Lakhpat </option><option value=" Lakhtar "> Lakhtar </option><option value=" Lalpur "> Lalpur </option><option value=" Limbdi "> Limbdi </option><option value=" Limkheda "> Limkheda </option><option value=" Lunavada "> Lunavada </option><option value=" M.M.Mangrol "> M.M.Mangrol </option><option value=" Mahuva "> Mahuva </option><option value=" Malia-Hatina "> Malia-Hatina </option><option value=" Maliya "> Maliya </option><option value=" Malpur "> Malpur </option><option value=" Manavadar "> Manavadar </option><option value=" Mandvi "> Mandvi </option><option value=" Mangrol "> Mangrol </option><option value=" Mehmedabad "> Mehmedabad </option><option value=" Mehsana "> Mehsana </option><option value=" Miyagam "> Miyagam </option><option value=" Modasa "> Modasa </option><option value=" Morvi "> Morvi </option><option value=" Muli "> Muli </option><option value=" Mundra "> Mundra </option><option value=" Nadiad "> Nadiad </option><option value=" Nakhatrana "> Nakhatrana </option><option value=" Nalia "> Nalia </option><option value=" Narmada "> Narmada </option><option value=" Naswadi "> Naswadi </option><option value=" Navasari "> Navasari </option><option value=" Nizar "> Nizar </option><option value=" Okha "> Okha </option><option value=" Paddhari "> Paddhari </option><option value=" Padra "> Padra </option><option value=" Palanpur "> Palanpur </option><option value=" Palitana "> Palitana </option><option value=" Panchmahals "> Panchmahals </option><option value=" Patan "> Patan </option><option value=" Pavijetpur "> Pavijetpur </option><option value=" Porbandar "> Porbandar </option><option value=" Prantij "> Prantij </option><option value=" Radhanpur "> Radhanpur </option><option value=" Rahpar "> Rahpar </option><option value=" Rajaula "> Rajaula </option><option value=" Rajkot "> Rajkot </option><option value=" Rajpipla "> Rajpipla </option><option value=" Ranavav "> Ranavav </option><option value=" Sabarkantha "> Sabarkantha </option><option value=" Sanand "> Sanand </option><option value=" Sankheda "> Sankheda </option><option value=" Santalpur "> Santalpur </option><option value=" Santrampur "> Santrampur </option><option value=" Savarkundla "> Savarkundla </option><option value=" Savli "> Savli </option><option value=" Sayan "> Sayan </option><option value=" Sayla "> Sayla </option><option value=" Shehra "> Shehra </option><option value=" Sidhpur "> Sidhpur </option><option value=" Sihor "> Sihor </option><option value=" Sojitra "> Sojitra </option><option value=" Sumrasar "> Sumrasar </option><option value=" Surat "> Surat </option><option value=" Surendranagar "> Surendranagar </option><option value=" Talaja "> Talaja </option><option value=" Thara "> Thara </option><option value=" Tharad "> Tharad </option><option value=" Thasra "> Thasra </option><option value=" Una-Diu "> Una-Diu </option><option value=" Upleta "> Upleta </option><option value=" Vadgam "> Vadgam </option><option value=" Vadodara "> Vadodara </option><option value=" Valia "> Valia </option><option value=" Vallabhipur "> Vallabhipur </option><option value=" Valod "> Valod </option><option value=" Valsad "> Valsad </option><option value=" Vanthali "> Vanthali </option><option value=" Vapi "> Vapi </option><option value=" Vav "> Vav </option><option value=" Veraval "> Veraval </option><option value=" Vijapur "> Vijapur </option><option value=" Viramgam "> Viramgam </option><option value=" Visavadar "> Visavadar </option><option value=" Visnagar "> Visnagar </option><option value=" Vyara "> Vyara </option><option value=" Waghodia "> Waghodia </option><option value=" Wankaner "> Wankaner </option></select>
                                    <small>Please select nearby city if not available.</small>
                                </div>
                                <br>
                                <div>
                                    <label for="Title">Title</label>
                                    <input class="form-control" type="text" name="title" id="Title" placeholder="Enter clear title for provided service." required="">
                                </div>
                                <br>
                                <div>
                                    <label for="desc">Service description</label>
                                    <textarea class="form-control" name="desc" placeholder="Enter brief and clear description for services and recources provided." required=""></textarea>
                                </div>
                                <br>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="number" name="phone" id="phone" placeholder="EX: 9876543210" required="">
                                    <br>
                                    <input type="checkbox" id="sms" name="sms" value="1"><label for="sms">Is SMS service available for the above number?</label>
                                </div>
                                <br>
                                <div>
                                    <label for="al_phone">Alternate Phone (Optional)</label>
                                    <input class="form-control" type="text" name="al_phone" id="al_phone" placeholder="EX: 9876543210, 9876543210">
                                    <small>Separate multiple numbers with comma sign (,)</small>
                                </div>
                                <br>
                                <div>
                                    <label for="email">Email (Optional)</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter email address.">
                                </div>
                                <br>
                                <div>
                                    <label for="loc">Google maps location (Optional)</label>
                                    <input class="form-control" type="text" name="loc" id="loc" placeholder="Enter google maps location link.">
                                    <small>Provide google maps location for better help.</small>
                                </div>
                                <br>
                                <div>
                                    <button type="submit" name="submit" class="form-control btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include_once('includes/Home_footer.php');?>