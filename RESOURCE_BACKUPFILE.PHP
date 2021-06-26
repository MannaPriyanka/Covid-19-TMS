
<?php include_once('includes/Home_header.php');?>

<div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>OXYGEN</h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div id="accordion">
                        <div class="card">
                          <div class="card-header bg-white">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <p class="mb-0"><i class="fas fa-filter"></i> Filter</p>
                                <p class="mb-0"><small>Find resources at your location</small></p>
                            </a>
                          </div>
                          <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <form method="GET" action="" id="filter">
                                    <input type="hidden" name="id" value="1">
                                    <div class="row">
                                        <div class="col-md-5" style="display: none">
                                            <label for="sts">Select state</label>
                                            <select onchange="print_city('city', this.selectedIndex, '');" id="sts" name="state" class="form-control shadow-none"><option value="" selected="">Select State</option><option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option><option value="Daman &amp; Diu">Daman &amp; Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttaranchal">Uttaranchal</option><option value="West Bengal">West Bengal</option></select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="city">Select city</label>
                                            <select id="city" name="city" class="form-control shadow-none"><option value="" selected="">Select City</option><option value=" Ahmedabad "> Ahmedabad </option><option value=" Ahwa "> Ahwa </option><option value=" Amod "> Amod </option><option value=" Amreli "> Amreli </option><option value=" Anand "> Anand </option><option value=" Anjar "> Anjar </option><option value=" Ankaleshwar "> Ankaleshwar </option><option value=" Babra "> Babra </option><option value=" Balasinor "> Balasinor </option><option value=" Banaskantha "> Banaskantha </option><option value=" Bansada "> Bansada </option><option value=" Bardoli "> Bardoli </option><option value=" Bareja "> Bareja </option><option value=" Baroda "> Baroda </option><option value=" Barwala "> Barwala </option><option value=" Bayad "> Bayad </option><option value=" Bhachav "> Bhachav </option><option value=" Bhanvad "> Bhanvad </option><option value=" Bharuch "> Bharuch </option><option value=" Bhavnagar "> Bhavnagar </option><option value=" Bhiloda "> Bhiloda </option><option value=" Bhuj "> Bhuj </option><option value=" Billimora "> Billimora </option><option value=" Borsad "> Borsad </option><option value=" Botad "> Botad </option><option value=" Chanasma "> Chanasma </option><option value=" Chhota Udaipur "> Chhota Udaipur </option><option value=" Chotila "> Chotila </option><option value=" Dabhoi "> Dabhoi </option><option value=" Dahod "> Dahod </option><option value=" Damnagar "> Damnagar </option><option value=" Dang "> Dang </option><option value=" Danta "> Danta </option><option value=" Dasada "> Dasada </option><option value=" Dediapada "> Dediapada </option><option value=" Deesa "> Deesa </option><option value=" Dehgam "> Dehgam </option><option value=" Deodar "> Deodar </option><option value=" Devgadhbaria "> Devgadhbaria </option><option value=" Dhandhuka "> Dhandhuka </option><option value=" Dhanera "> Dhanera </option><option value=" Dharampur "> Dharampur </option><option value=" Dhari "> Dhari </option><option value=" Dholka "> Dholka </option><option value=" Dhoraji "> Dhoraji </option><option value=" Dhrangadhra "> Dhrangadhra </option><option value=" Dhrol "> Dhrol </option><option value=" Dwarka "> Dwarka </option><option value=" Fortsongadh "> Fortsongadh </option><option value=" Gadhada "> Gadhada </option><option value=" Gandhi Nagar "> Gandhi Nagar </option><option value=" Gariadhar "> Gariadhar </option><option value=" Godhra "> Godhra </option><option value=" Gogodar "> Gogodar </option><option value=" Gondal "> Gondal </option><option value=" Halol "> Halol </option><option value=" Halvad "> Halvad </option><option value=" Harij "> Harij </option><option value=" Himatnagar "> Himatnagar </option><option value=" Idar "> Idar </option><option value=" Jambusar "> Jambusar </option><option value=" Jamjodhpur "> Jamjodhpur </option><option value=" Jamkalyanpur "> Jamkalyanpur </option><option value=" Jamnagar "> Jamnagar </option><option value=" Jasdan "> Jasdan </option><option value=" Jetpur "> Jetpur </option><option value=" Jhagadia "> Jhagadia </option><option value=" Jhalod "> Jhalod </option><option value=" Jodia "> Jodia </option><option value=" Junagadh "> Junagadh </option><option value=" Junagarh "> Junagarh </option><option value=" Kalawad "> Kalawad </option><option value=" Kalol "> Kalol </option><option value=" Kapad Wanj "> Kapad Wanj </option><option value=" Keshod "> Keshod </option><option value=" Khambat "> Khambat </option><option value=" Khambhalia "> Khambhalia </option><option value=" Khavda "> Khavda </option><option value=" Kheda "> Kheda </option><option value=" Khedbrahma "> Khedbrahma </option><option value=" Kheralu "> Kheralu </option><option value=" Kodinar "> Kodinar </option><option value=" Kotdasanghani "> Kotdasanghani </option><option value=" Kunkawav "> Kunkawav </option><option value=" Kutch "> Kutch </option><option value=" Kutchmandvi "> Kutchmandvi </option><option value=" Kutiyana "> Kutiyana </option><option value=" Lakhpat "> Lakhpat </option><option value=" Lakhtar "> Lakhtar </option><option value=" Lalpur "> Lalpur </option><option value=" Limbdi "> Limbdi </option><option value=" Limkheda "> Limkheda </option><option value=" Lunavada "> Lunavada </option><option value=" M.M.Mangrol "> M.M.Mangrol </option><option value=" Mahuva "> Mahuva </option><option value=" Malia-Hatina "> Malia-Hatina </option><option value=" Maliya "> Maliya </option><option value=" Malpur "> Malpur </option><option value=" Manavadar "> Manavadar </option><option value=" Mandvi "> Mandvi </option><option value=" Mangrol "> Mangrol </option><option value=" Mehmedabad "> Mehmedabad </option><option value=" Mehsana "> Mehsana </option><option value=" Miyagam "> Miyagam </option><option value=" Modasa "> Modasa </option><option value=" Morvi "> Morvi </option><option value=" Muli "> Muli </option><option value=" Mundra "> Mundra </option><option value=" Nadiad "> Nadiad </option><option value=" Nakhatrana "> Nakhatrana </option><option value=" Nalia "> Nalia </option><option value=" Narmada "> Narmada </option><option value=" Naswadi "> Naswadi </option><option value=" Navasari "> Navasari </option><option value=" Nizar "> Nizar </option><option value=" Okha "> Okha </option><option value=" Paddhari "> Paddhari </option><option value=" Padra "> Padra </option><option value=" Palanpur "> Palanpur </option><option value=" Palitana "> Palitana </option><option value=" Panchmahals "> Panchmahals </option><option value=" Patan "> Patan </option><option value=" Pavijetpur "> Pavijetpur </option><option value=" Porbandar "> Porbandar </option><option value=" Prantij "> Prantij </option><option value=" Radhanpur "> Radhanpur </option><option value=" Rahpar "> Rahpar </option><option value=" Rajaula "> Rajaula </option><option value=" Rajkot "> Rajkot </option><option value=" Rajpipla "> Rajpipla </option><option value=" Ranavav "> Ranavav </option><option value=" Sabarkantha "> Sabarkantha </option><option value=" Sanand "> Sanand </option><option value=" Sankheda "> Sankheda </option><option value=" Santalpur "> Santalpur </option><option value=" Santrampur "> Santrampur </option><option value=" Savarkundla "> Savarkundla </option><option value=" Savli "> Savli </option><option value=" Sayan "> Sayan </option><option value=" Sayla "> Sayla </option><option value=" Shehra "> Shehra </option><option value=" Sidhpur "> Sidhpur </option><option value=" Sihor "> Sihor </option><option value=" Sojitra "> Sojitra </option><option value=" Sumrasar "> Sumrasar </option><option value=" Surat "> Surat </option><option value=" Surendranagar "> Surendranagar </option><option value=" Talaja "> Talaja </option><option value=" Thara "> Thara </option><option value=" Tharad "> Tharad </option><option value=" Thasra "> Thasra </option><option value=" Una-Diu "> Una-Diu </option><option value=" Upleta "> Upleta </option><option value=" Vadgam "> Vadgam </option><option value=" Vadodara "> Vadodara </option><option value=" Valia "> Valia </option><option value=" Vallabhipur "> Vallabhipur </option><option value=" Valod "> Valod </option><option value=" Valsad "> Valsad </option><option value=" Vanthali "> Vanthali </option><option value=" Vapi "> Vapi </option><option value=" Vav "> Vav </option><option value=" Veraval "> Veraval </option><option value=" Vijapur "> Vijapur </option><option value=" Viramgam "> Viramgam </option><option value=" Visavadar "> Visavadar </option><option value=" Visnagar "> Visnagar </option><option value=" Vyara "> Vyara </option><option value=" Waghodia "> Waghodia </option><option value=" Wankaner "> Wankaner </option></select>
                                            <small>Please select nearby city if your city is not available.</small>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-success" type="submit">Search</button>
                                            <button class="btn btn-info float-right" type="reset" onclick="reset_form('city', 'filter')" style="display: none">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=284&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Vadodara, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 19-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>It is situated in makarpura.
Krishna Walia:- 7623</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7623065340</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7623065340"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=284&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=231&amp;state=Gujarat&amp;city=">
                                            <h3>Najir bhai</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 17-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>50 bettel</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9904296825</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9904296825"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=231&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=230&amp;state=Gujarat&amp;city=">
                                            <h3>Abdul</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 17-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>50 bottel
Capacity:-12 lit.
Free of charge</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898392430</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898392430"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=230&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=229&amp;state=Gujarat&amp;city=">
                                            <h3>Asfak sheth</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 17-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>27 bettel
(20 small
7. Big)</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9033620682</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9033620682"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=229&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=228&amp;state=Gujarat&amp;city=">
                                            <h3>World bharuchi vohra foundation</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 17-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>1060 bottel available</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9023998329</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9023998329"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=228&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=224&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinder, flow meter, oxygen pipe</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 16-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>You have to call on the number for the above requi</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7575073730</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7575073730"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=224&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=213&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Veraval, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 16-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Cylinders will be available day after tomor</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7947429372</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7947429372"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=213&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=218&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen concentrator</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 15-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen concentrator stock available
Price:60000+G</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8879380143</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:8879380143"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:8879380143"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=218&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=217&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen bottles</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 15-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>They are provide oxygen bottles to needed person y</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9904153391</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9904153391"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=217&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=216&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ankaleshwar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 15-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Provided oxygen Cylinder all over ankaleshwar and </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7405156215</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7405156215"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=216&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=212&amp;state=Gujarat&amp;city=">
                                            <h3>Supreme Gases</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Botad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 14-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Redirecting to IndiaMART call centre</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8068970110</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8068970110"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=212&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=206&amp;state=Gujarat&amp;city=">
                                            <h3>Ambulance service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 14-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Here's Ambulance Service is available.Just contact</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8866996183</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8866996183"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=206&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=199&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen beds</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bharuch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 13-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Tejasva Hospital - 3 beds with oxygen is available</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9227436440</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9227436440"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=199&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=198&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen sylinder service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 13-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>You have to pay 12000 Rs. for oxygen sylinder perm</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9727179180</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9727179180"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=198&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=197&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen sylinder service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 13-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>First you have to pay 20,000 rs deposit. Then you </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>2612788467</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:2612788467"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=197&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=195&amp;state=Gujarat&amp;city=">
                                            <h3>Gandevi taluka S association</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>they give free tiffin service for covide patient
</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825726431</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825726431"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=195&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=191&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>documents : Rt-pcr report, doctor receipt
first p</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9328322429</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9328322429"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=191&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=190&amp;state=Gujarat&amp;city=">
                                            <h3>Jain Yuva Mitra Mandal</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>cylinder charge is free . 
only refilling charge.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9426888221</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9426888221"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=190&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=189&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>documents : Rt-pcr report, Doctor receipt.
cylind</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898268577</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898268577"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=189&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=188&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Documents : Rt-pcr report, doctor reciept.
first </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898268577</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898268577"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=188&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=187&amp;state=Gujarat&amp;city=">
                                            <h3>Swastik Charitable Trust</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>This trust from billimora, Navsari. they provide o</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9809699096</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9809699096"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=187&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=184&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Valsad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>documents required : Rt-pcr report, Doctor reciept</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825182267</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825182267"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=184&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=183&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Valsad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>documents required : Adhar card, Rt-pcr report, Do</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7096290949</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7096290949"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=183&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=182&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Valsad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>documents required : Adhar card, Rt-pcr report, Do</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9033380446</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9033380446"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=182&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=181&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen availability and refilling service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Here's Agrawal Samaj Health Center provide you oxy</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>6355967923</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:6355967923"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=181&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=180&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen availability</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Here's Pranav Oxygen provide you oxygen for COVID </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9328348021</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9328348021"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=180&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=178&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen refilling service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Here, Vignesh Air Production provide you only oxyg</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825870032</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825870032"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=178&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=177&amp;state=Gujarat&amp;city=">
                                            <h3>Jay Mataji Supplier Group</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Near Anjani Petrol Pump, Madhuram Junagadh.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9569259292</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9569259292"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=177&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=176&amp;state=Gujarat&amp;city=">
                                            <h3>OXYGEN BANK</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>NR. BAVAJI SAMAJ NI WADI, OLD PANCHPIPLA ROAD, JET</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9909230333</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9909230333"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=176&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=173&amp;state=Gujarat&amp;city=">
                                            <h3>Freelance Marketing Depo</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>R.b Patel Kumar Chatralay, Joshipura Junagadh</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9429500089</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9429500089"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=173&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=172&amp;state=Gujarat&amp;city=">
                                            <h3>PARAM OXYGEN SAHAY</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>NEAR PRADIP CINEMA  KANYA CHATRALAY, JUNAGADH</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9136442492</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9136442492"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=172&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=169&amp;state=Gujarat&amp;city=">
                                            <h3>GANDHI GAS AGENCY</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>NR. SARAGWADA BUS STAND,NR. HARBHOLE INDUSTRIES, J</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8048743826</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8048743826"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=169&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=167&amp;state=Gujarat&amp;city=">
                                            <h3>AARTI TRADING CO.</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>OPP. DIPAK PETROLPUMP, DOLATPARA, JUNAGADH</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825622498</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825622498"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=167&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=162&amp;state=Gujarat&amp;city=">
                                            <h3>Pintu datta</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhavnagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Flow meter
Prize:- 1700 to 2000
Document:- Aadar</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825055658</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825055658"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=162&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=158&amp;state=Gujarat&amp;city=">
                                            <h3>Nagrik sahkari bank</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Mahuva, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen cylinder+ flowmeter
No deposit - free of c</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9687999900</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9687999900"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9687999900"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=158&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=156&amp;state=Gujarat&amp;city=">
                                            <h3>Sheth shree Aanand ji kalyan ji pedhi</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Palitana, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Only oxygen cylinder
Deposit-5000
Document- 
1)</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9428000615</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9428000615"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9428000615"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=156&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=155&amp;state=Gujarat&amp;city=">
                                            <h3>Dadasaheb(jito seva)</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhavnagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Only oxygen cylinder
Deposit -5000
Document- 
 </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9428787217</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9428787217"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=155&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=154&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder and Flow Meter</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhavnagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Deposit for only Oxygen cylinder - 12,000
Deposit</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7069005151</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7069005151"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=154&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=153&amp;state=Gujarat&amp;city=">
                                            <h3>Vishva group of bhavena</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhavnagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 12-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Only Oxygen Bottle
Without Document
Free of cost</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9714469626</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9714469626"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=153&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=150&amp;state=Gujarat&amp;city=">
                                            <h3>Food service</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Anand, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Name:Manish Patel
Providing lunch and dinner in A</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9429840061</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9429840061"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=150&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=143&amp;state=Gujarat&amp;city=">
                                            <h3>Balak Hanuman Charitable Trust</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Bottle + Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7567102030</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7567102030"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=143&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=141&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder with all instruments</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Sihor, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Prashant Aastik
Required Documents :- Report of P</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9426461190</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9426461190"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=141&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=140&amp;state=Gujarat&amp;city=">
                                            <h3>Trishul Oxygen</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825328080</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825328080"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=140&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=139&amp;state=Gujarat&amp;city=">
                                            <h3>Vishveshwar Gas Industry</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Plant - Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>09374092121</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:09374092121"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=139&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=138&amp;state=Gujarat&amp;city=">
                                            <h3>OxyPlus Portable Oxygen Cylinder 8L</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Bottle (Right now out of stock)</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8849765507</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8849765507"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=138&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=137&amp;state=Gujarat&amp;city=">
                                            <h3>Sadbhavna Vrudhashram</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Bottle + Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8758770770</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8758770770"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=137&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=136&amp;state=Gujarat&amp;city=">
                                            <h3>Bolbala Trust</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Bottle+Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>02812243008</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:02812243008"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=136&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=135&amp;state=Gujarat&amp;city=">
                                            <h3>Jay Aditya Gas Agency</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Refilling</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8936013601</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8936013601"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=135&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=127&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinders</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Morvi, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Free of cost. Adhar card of patient is necessary. </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825223011</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825223011"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=127&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=126&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinders</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Morvi, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Free of cost. Adhar card of patient is necessary. </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825223011</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825223011"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=126&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=125&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen concentrator</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Morvi, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>They are NGO in uma township, morbi. Free of cost </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9349393693</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9349393693"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=125&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=122&amp;state=Gujarat&amp;city=">
                                            <h3>Maruti Traders</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kheda, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>The needy can get oxygen immediately. Just go ther</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9427388713</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9427388713"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=122&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=121&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen availability</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Navasari, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>If any COVID patients requires emergency oxygen th</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9426888221</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9426888221"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=121&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=119&amp;state=Gujarat&amp;city=">
                                            <h3>RAKESH GAS SUPPLIER</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Junagadh, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 11-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>They provide oxygen cylinder, for more information</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>2661018</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:2661018"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=119&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=35&amp;state=Gujarat&amp;city=">
                                            <h3>ONLY OXYGEN KIT</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 10-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Only Oxygen kit provided.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825997575</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825997575"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=35&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=118&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen availability</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 10-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Here, you can contact for the oxygen on the given </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9978623764</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9978623764"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=118&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=117&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Amreli, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 10-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen supply 
 Name :- Braj foundation of oxygen</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9925037660</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9925037660"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9925037660"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=117&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=116&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinder supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Amreli, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 10-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen cylinder supply 
Stock :- 100 pcs 
Bhadre</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8320801062</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:8320801062"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:8320801062"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=116&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=113&amp;state=Gujarat&amp;city=">
                                            <h3>Ahmadabad  Oxygen cylinder - 10L @ 15k  24*7 available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 09-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Ahmadabad  Oxygen cylinder - 10L @ 15k  24*7</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8160829821</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8160829821"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=113&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=111&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 09-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>You can contact on the given number by just call o</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9879786159</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9879786159"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=111&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=109&amp;state=Gujarat&amp;city=">
                                            <h3>Free Tiffin services</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Vadodara, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 09-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Free Tiffin service is available for home quaranti</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9979704920</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9979704920"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=109&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=106&amp;state=Gujarat&amp;city=">
                                            <h3>Free Oxygen kit</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Vadodara, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 09-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Free Oxygen kit is available only for home quarant</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9054544101</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9054544101"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=106&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=102&amp;state=Gujarat&amp;city=">
                                            <h3>Free Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Surat, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 09-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Free Oxygen Cylinder (jumbo cylinder )is provided.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825127296</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825127296"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=102&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=99&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Lalit Bhai Gandhidham</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825280964</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825280964"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=99&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=98&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhachav, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Himat Bhai Mehta</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9879989024</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9879989024"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=98&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=97&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhachav, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Satishbhai Mehta</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9879195995</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9879195995"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=97&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=96&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhachav, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Kuldeep Singh Jadeja</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9712367567</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9712367567"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=96&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=95&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Jigar Patel</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825177227</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825177227"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=95&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=94&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>JayBhai Hemnani</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9909475450</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9909475450"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=94&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=93&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Rajubhai Sai Mobile</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9979917770</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9979917770"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=93&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=92&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Dharmesh Taxi</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825824898</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825824898"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=92&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=91&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Manubha Rathod</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9687066494</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9687066494"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=91&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=90&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Anjar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Monu Bhai</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9142071042</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9142071042"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=90&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=89&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Kiran Jadeja</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9200936315</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9200936315"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=89&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=88&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Vijay Mali</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9712966014</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9712966014"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=88&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=86&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Vijay Mali</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9712966014</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9712966014"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=86&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=85&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Amar Chouhan</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898388609</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898388609"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=85&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=84&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Kailash Goyal</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825225161</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825225161"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=84&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=83&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Sumit Goyal MDS</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825992509</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825992509"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=83&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=82&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Abhishek Sharma</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9725013777</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9725013777"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=82&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=81&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Anmol Gidwani</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9327746455</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9327746455"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=81&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=80&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder for Samakhiyali and neighboring villages</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Dhanshukbhai thacker- provides oxygen cylinder for</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825747857</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825747857"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=80&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=78&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen- Rajbha Gadvhi</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Cylinder available if you bring empty cylin</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9879714352</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9879714352"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=78&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=70&amp;state=Gujarat&amp;city=">
                                            <h3>Arya Samaj- Pinakin Arya</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Cylinder Available</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9428006129</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9428006129"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=70&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=69&amp;state=Gujarat&amp;city=">
                                            <h3>Arya Samaj</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Kutch, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen Cylinder Provided</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9727536232</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9727536232"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=69&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=68&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinder for 24 hours</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Provide them with :

RTPCR 
Aadhar card
Oximet</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9924828979</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9924828979"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=68&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=51&amp;state=Gujarat&amp;city=">
                                            <h3>OXYGEN CONCENTRATOR AND BIPAP</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Gandhi Nagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen concentrator available on Rent.. You can co</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8128135201</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8128135201"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=51&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=50&amp;state=Gujarat&amp;city=">
                                            <h3>OXYGEN CONCENTRATOR AND BIPAP</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen concentrator available on Rent.. You can co</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8128135201</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:8128135201"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=50&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=52&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder Available</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 08-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Hello, Had procured B-type 1500 liters oxygen cyli</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9879837614</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9879837614"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=52&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=49&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen beds</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 07-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>2 oxgyen beds available 
Vimla hospital 
Contact</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7567847206</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:7567847206"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:7567847206"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=49&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=48&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen beds</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 07-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>5 oxgyen beds available at clinic 19 covid care 
</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>7507531824</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:7507531824"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:7507531824"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=48&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=47&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 07-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen cylinder 
10L =  rs16k 
Location :- janta</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8160829821</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:8160829821"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:8160829821"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=47&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=46&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 07-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>10L  Aluminium new oxgyen cylinder 
Oxygen spray </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9979011223</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9979011223"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9979011223"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=46&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=45&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen concentrator</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 07-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>30 PC of 9lt.  Oxygen concentrator 
  1pc of 8lt </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9558886711</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9558886711"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9558886711"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=45&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=41&amp;state=Gujarat&amp;city=">
                                            <h3>OXYGEN CYLINDER AND OXYGEN REFILL AVAILABLE</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Gandhi Nagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 06-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>He can provide services 24*7. But you can contact </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9157006262</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9157006262"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=41&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=40&amp;state=Gujarat&amp;city=">
                                            <h3>OXYGEN CYLINDER AND OXYGEN REFILL AVAILABLE</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 06-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>He can provide services 24*7..but you can contact </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9157006262</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9157006262"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=40&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=39&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 06-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>You have to go there and get it ,yet to discuss th</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>916355414456</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:916355414456"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=39&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=38&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen Cylinder on Rent</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 06-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Will give for 24 hours only. 

To get this you n</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9924828979</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9924828979"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9924828979"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=38&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=33&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen cylinders</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 05-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>It is situated in Bopal. Deposit is needed , at th</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>07948062000</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:07948062000"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=33&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=32&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 05-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>9825075233
Gangotri charitable trust, rajkot 
Ox</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825075233</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825075233"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=32&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=30&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Bhavnagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 05-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen supply 
Surabh Jain - 9825225512
Bhavnaga</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9825225512</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9825225512"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9825225512"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=30&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=29&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Morvi, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 05-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen supply 
Piyush bopaliya - 9349393693 
Mor</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9349393693</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9349393693"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9349393693"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=29&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=28&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen supply</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Rajkot, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 05-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen supply 24*7

Manav Shiva group , nirmala </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898220202</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:9898220202"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898220202"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=28&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=22&amp;state=Gujarat&amp;city=">
                                            <h3>FREE OXYGEN REFILL AVAILABLE</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 04-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>FREE OXYGEN REFILL FOR COVID-19 PATIENT</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9824081339</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9824081339"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=22&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=20&amp;state=Gujarat&amp;city=">
                                            <h3>Oxygen beds</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 04-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Oxygen beds are available for the patient having o</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9898122262</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9898122262"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=20&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=19&amp;state=Gujarat&amp;city=">
                                            <h3>(QE HEALTHCARE )Oxygen bottles  Or concentrators only</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Gandhi Nagar, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 04-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Just send text msg to the given number and write �</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>8128135201</p>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-primary ca-btn ml-2 float-right" href="sms:8128135201"><i class="fas fa-comment-alt"></i></a>
                                                <a class="btn btn-success ca-btn float-right" href="tel:8128135201"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=19&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=9&amp;state=Gujarat&amp;city=">
                                            <h3>Avalon Hotel, Sindhu Bhavan Road</h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> Ahmedabad, Gujarat</small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 03-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p>Beds are available with oxygen and 24*7 Doctors( o</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p>9909045271</p>
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:9909045271"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resource.php?id=9&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>


<?php include_once('includes/Home_footer.php');?>