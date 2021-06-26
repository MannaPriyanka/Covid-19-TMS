
<?php
include_once('includes/config.php');
 include_once('includes/Home_header.php');
$req_type=$_GET['type'];

?>









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
           
		   
		   
<!-- ROW START-->
		   <div class="row mb-5">
                <div class="col-md-6 mb-3">
				<?php $query=mysqli_query($con,"SELECT * FROM `corona_resource`WHERE res_type='".$req_type."'AND verified=1 ");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
				<!--CARD START-->
                                <div class="card">
                                    <div class="card-body">
                                        <a href="resource.php?id=284&amp;state=Gujarat&amp;city=">
                                            <h3><?php echo $row['title'];?>
											
										<!--TYPE=  --></h3>
                                        </a>
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-warning"><i class="fas fa-map-marker"></i> <?php echo $row['city'].",".$row['state'];?></small>
                                            </div>
                                            <div class="col-6">
                                                <small class="float-right">Last Updated: 19-05-2021</small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-0 text-muted">Service description</label>
                                            <p><?php echo $row['serv_desc'];?></p>

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="mb-0 text-muted">Phone</label>
                                                <p><?php echo $row['phone'];?></p>
												
                                            </div>
                                            <div class="col-6">
                                                
                                                <a class="btn btn-success ca-btn float-right" href="tel:7623065340"><i class="fas fa-phone-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-primary form-control" href="resources_more.php?id=<?php echo htmlentities($row['id']);?>;&amp;state=Gujarat&amp;city=">
                                                    View More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- CARD FINISH-->
								<?php $cnt++;} ?>
                            </div>
							
			  </div>
			  
<!-- ROW FINISH-->
        </div>


<?php include_once('includes/Home_footer.php');?>