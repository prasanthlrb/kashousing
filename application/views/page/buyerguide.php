<?php $this->load->view('include/header');?>
<script src="<?php echo base_url();?>source/js/jquery.min.js"></script>
<link href="<?php echo base_url();?>source/css/style.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>source/emi/example.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>source/js/parallax.min.js"></script>

<style type="text/css">
	
.panel.with-nav-tabs .panel-heading{
   
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;

}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;

}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
	 
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
	width: 200px;
    text-align: center;
    font-weight: 700;
    font-family: sans-serif;
        border-radius: 24px;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777; 
        font-weight: 600;
    font-family: sans-serif;  

}

.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
.nav-tabs > li {
    float: left;
    margin-bottom: -1px;
    padding-left: 9%;
}
.with-nav-tabs.panel-default .nav-tabs > li > a, .with-nav-tabs.panel-default .nav-tabs > li > a:hover, .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
    font-weight: 600;
    font-family: sans-serif;
     border-radius: 26px;
}
.body-color-1{
color: #474a54;
    background: url(<?php echo base_url();?>source/images/emi-calc.jpg) no-repeat center;
    background-size: cover;
color: #474a54;
    background-attachment: fixed;
}
.body-color-2{
color: #474a54;
    background: url(http://d3ajvuw23j7pxv.cloudfront.net/upld_452084721311856866_burj-khalifa-dubai-al-similar-all-top-dubai-building-wallpapers.jpg) no-repeat center;
    background-size: cover;
color: #474a54;
    background-attachment: fixed;
}
.body-color-3{
color: #474a54;
    background: url(https://cms-img.coverfox.com/6-Cases-where-you-could-Lose-Tax-Benefits-on-Health-Insurance.jpg) no-repeat center;
    background-size: cover;
color: #474a54;
    background-attachment: fixed;
}
.body-color-5{
color: #474a54;
    background: url(http://www.richardcayne.com/wp-content/uploads/2015/11/iStock_000035336736Large-copy-formatted.jpg) no-repeat center;
    background-size: cover;
color: #474a54;
    background-attachment: fixed;
}
.body-color-4{
color: #474a54;
    background: url(https://joinsourcingclub.com/wp-content/uploads/2016/07/payments.jpg) no-repeat center;
    background-size: cover;
color: #474a54;
    background-attachment: fixed;
}
.body-color-4 p{
 font-size: 21px;
    text-align: center;
    font-family: cursive;
    font-weight: 600;
    text-shadow: #fff 1px 1px 13px;
    width: 60%;
    background: rgba(255, 255, 255, 0.63);
    position: relative;
    left: 19%;
}
.body-color-3 p{
 font-size: 21px;
    text-align: center;
    font-family: cursive;
    font-weight: 600;
    text-shadow: #544f4f 4px 4px 15px;
    width: 70%;
    position: relative;
    left: 19%;
    color: #fff;
}
.results{
	
    text-align: center;
    box-shadow: #000 6px 10px 54px;
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.58);
}
.emi-title{
	text-align: center;
    padding: 33px 0px 16px;
        font-family: fantasy;
    font-size: 51px;
    text-shadow: #fff 1px 3px 15px;
}
.emi-title1{
  text-align: center;
    padding: 33px 0px 16px;
        font-family: fantasy;
    font-size: 30px;
    text-shadow: #fff 1px 3px 15px;
}
.buyer-guide{
	text-align: center;
    padding: 33px 0px 16px;
    text-shadow: #3d3e39 0px 0px 22px
}
.buyer-logo{
	    height: 80px;
    position: absolute;
    left: 49%;
   
    z-index: -1;
    margin-top: -1px;
}

.section-2{

}
.parallax-window {
    min-height: 400px;
    background: transparent;
}
.accrue-field-term {
    padding-bottom: 50px;
}
a.ing:hover {
    color: #ce0000;
}
a.ing:active {
    color: #ce0000;
}

a.ing:link {
    color: #000;
}
.padding-bottom{
    padding-bottom: 50px;
}
.results p {
    font-size: 18px;
    font-family: fantasy;
    color: #000;
}


/********************************************************************/
</style>
<div class="animsition">  
  <div class="wrapper boxed">






    <div class="click-capture"></div>
<?php $this->load->view('include/menu');?>


<!-- Content CLick Capture-->
<img src="<?php echo base_url();?>source/images/buyerguide.png" class="buyer-logo">
<h1 class="buyer-guide"><span style="color: #ce0000;">BUYER</span> GUIDE</h1>

    <div class="row">
<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">EMI CALCULATION</a></li>
                            <li><a href="#tab2default" data-toggle="tab">LOANS</a></li>
                            <li><a href="#tab3default" data-toggle="tab">PAYMENT TERMS</a></li>
                            <li><a href="#tab4default" data-toggle="tab">NRI</a></li>
                            <li><a href="#tab5default" data-toggle="tab">TAX BENEFIT</a></li>

                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active body-color-1" id="tab1default">
                        <div class="row">
                        	<h2 class="emi-title"><span style="color: #ce0000;">EMI</span> CALCULATION</h2>
                        	<div class="col-md-8 col-md-offset-2">
                        		<div class="calculator-amortization">
				    <div class="thirty form">

				    </div>

				    <div class="seventy">
					<p><label>Results:</label></p>
					<div class="results"></div>
				    </div>

				    <div class="clear"></div>
			         </div>

                    </div>
                        	
                    </div>
                    </div>

                    <!-- Section-2 -->
                        <div class="tab-pane fade section-2 body-color-5" id="tab2default">
                             <h2 class="emi-title"><span style="color: #ce0000;">LOAN</span> FAQ</h2>
                            <div class="container ">
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question00">
                 <h4 class="panel-title">
                    <a href="#" class="ing"> What must be designation to obtain the bank loan?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question00" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>You must be working is software, Hardware and information technology area
Must work in Government office
Or else you must in private Ltd co. where PF & Salary slip facilities are there
The business people can apply for loan with the last 3 years IT papers</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question01">
                 <h4 class="panel-title">
                    <a href="#" class="ing"> What must be my minimum amount of salary?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question01" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Your minimum amount of salary must be Rs.8500/- and above it.</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question02">
                 <h4 class="panel-title">
                    <a href="#" class="ing">What are the papers needed for the loan from our side?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question02" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <div class="container">
                     <div class="row">
                        <div style="text-align: center;">
                     <div class="col-md-6">
                    <p>Photo<br>
                    Payslip with Attest By Employee for 3 months<br>
                    Employer Letter<br>
                    Form-16 / Appointment Letter<br>
                    BankStatement for last 6 months
                    </p></div>

                     <div class="col-md-6"><p>
                    A Cheque Leaf for Proceesing Fee <br>
                    Resume (Previous Employment details)<br>
                    Identity Proof<br>
                    Age Proof<br>
                    Address Proof</p>
                    </div>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question03">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Non-Resident Indian / PIO ?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question03" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <div class="container">
                     <div class="row">
                        <div style="text-align: center;">
                     <div class="col-md-6">
                    <p>Photo <br>
                    Employment Contract / Appointment Letter<br>
                    Overseas Bank statement for 6 Months<br>
                    NRE / NRO Bank Statement for 6 Months
                    Resume<br>
                    Visa Stamped on Passport<br>
                     </p></div>

                      <div class="col-md-6"> <p>
                    Latest Credit Burezu report<br>
                    Continuous Discharge Certificate (CDC) for Applicants employed in the Merchant navy
                    Power Of Attorney<br>
                    A Cheque Leaf for Processing Fees<br></p>

                     </div>
                      </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
                 <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question04">
                 <h4 class="panel-title">
                    <a href="#" class="ing">How much will be the EMI for my loan amount of Rs.1,00,000/-?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question04" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>If the loan is for 15 years. The EMI will be Rs.999/- of your amount of Rs.1,00,000/-. (Approximately).</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question05">
                 <h4 class="panel-title">
                    <a href="#" class="ing">What will be the interest for the loan now days?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question05" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Rate of interest will be 8.75% for the loan amount.</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question06">
                 <h4 class="panel-title">
                    <a href="#" class="ing">If part of the loan amount is paid in between whether interest amount will be reduced or not?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question06" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes, the interest amount will be reduced. According you pay the loan amount.</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question07">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Whether the loan can be processed in the another Name than the property person name?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question07" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes, it can be done but the person must be working one.
</p>
                </div>
            </div>
        </div>
                  <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question08">
                 <h4 class="panel-title">
                    <a href="#" class="ing">If, I am in abroad and unable to come whether I can get loan amount?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question08" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes, this process can be done by the details about you through e-mail and get papers signed thoroughly carries.</p>
                </div>
            </div>
        </div>
        <div class="padding-bottom"></div>

        </div>
    <!--/panel-group-->
</div>


                        </div>
                        <div class="tab-pane fade body-color-4" id="tab3default">
                           
                            <h2 class="emi-title"><span style="color: #ce0000;">PAYMENT</span> TERMS</h2>
                            <div class="row ">
                            <div class="col-md-6">
                              <h3 class="emi-title1">Land <span style="color: #ce0000;">+</span> Construction</h3>
                              <center><input style="width: 250px;height: 50px;" onkeyup="getLan()" onblur="getLan()" type="text" name="lan" id="lan" placeholder="Entry Your Total Value"></center>
                              <p>Only <span style="color: #ce0000" id="Advance">2%</span> of the total amount is enough for Advance booking. </p><p>Another <span style="color: #ce0000" id="Agreement">15%</span> at the time of Agreement.</p>
                            <p><span style="color: #ce0000" id="Registration">33%</span> at the time of Registration & Construction.</p>
                            <p><span style="color: #ce0000" id="Basement">20%</span> after the completion of Basement Level.</p>
                            <p><span style="color: #ce0000" id="roof">15%</span> after the completion of roof slab.</p>
                            <p><span style="color: #ce0000" id="plastering">10%</span> after the completion of plastering.</p>
                            <p> The remaining <span style="color: #ce0000" id="Handover">5%</span> at the time of Handover.</p>
                            <div class="padding-bottom"></div>
                            </div>

<script type="text/javascript">
function getLan(){
  var lan = $("#lan").val();
if(lan!=""){        
  var Advance = (2/100) * Number(lan);
  $("#Advance").text('₹'+Advance);

  var Agreement = (15/100) * Number(lan);
  $("#Agreement").text('₹'+Agreement);

  var Registration = (33/100) * Number(lan);
  $("#Registration").text('₹'+Registration);

  var Basement = (20/100) * Number(lan);
  $("#Basement").text('₹'+Basement);

  var roof = (15/100) * Number(lan);
  $("#roof").text('₹'+roof);

  var plastering = (10/100) * Number(lan);
  $("#plastering").text('₹'+plastering);

  var Handover = (5/100) * Number(lan);
  $("#Handover").text('₹'+Handover);
}
else{
  $("#Advance").text('2%');

  $("#Agreement").text('15%');

  $("#Registration").text('33%');

  $("#Basement").text('20%');

  $("#roof").text('15%');

  $("#plastering").text('10%');

  $("#Handover").text('5%');
}

}

</script>

                            <div class="col-md-6">
                              <h3 class="emi-title1">Construction</h3>
                              <center><input style="width: 250px;height: 50px;" onkeyup="getCons()" type="text" name="cons" id="cons" placeholder="Entry Your Total Value"></center>
                              <p>Only <span style="color: #ce0000" id="Advance1">2%</span> of the total amount is enough for Advance booking. </p><p>Another <span style="color: #ce0000" id="Agreement1">13%</span> at the time of Agreement.</p>
                            <p><span style="color: #ce0000" id="Basement1">30%</span> after the completion of Basement Level.</p>
                            <p><span style="color: #ce0000" id="Lintel">20%</span> after the completion of Lintel Level.</p>
                            <p><span style="color: #ce0000" id="roof1">15%</span> after the completion of roof slab.</p>
                            <p><span style="color: #ce0000" id="plastering1">17%</span> after the completion of plastering.</p>
                            <p> The remaining <span style="color: #ce0000" id="Handover1">3%</span> at the time of Handover.</p>
                            <div class="padding-bottom"></div>
                            </div>
                          </div>
<script type="text/javascript">
function getCons(){
  var lan = $("#cons").val();
if(lan!=""){        
  var Advance1 = (2/100) * Number(lan);
  $("#Advance1").text('₹'+Advance1);

  var Agreement1 = (13/100) * Number(lan);
  $("#Agreement1").text('₹'+Agreement1);

  var Basement1 = (30/100) * Number(lan);
  $("#Basement1").text('₹'+Basement1);

  var Lintel = (20/100) * Number(lan);
  $("#Lintel").text('₹'+Lintel);

  var roof1 = (15/100) * Number(lan);
  $("#roof1").text('₹'+roof1);

  var plastering1 = (17/100) * Number(lan);
  $("#plastering1").text('₹'+plastering1);

  var Handover1 = (3/100) * Number(lan);
  $("#Handover1").text('₹'+Handover1);
}
else{
  $("#Advance1").text('2%');

  $("#Agreement1").text('13%');

  $("#Basement1").text('30%');
  
  $("#Lintel").text('20%');

  $("#roof1").text('15%');

  $("#plastering1").text('17%');

  $("#Handover1").text('3%');
}

}

</script>
                            <!-- <br><Br><br><br><br><br><br><br><br> -->
                            <!-- <p>Only 2% of the total amount is enough for Advance booking. </p><p>Another 15% at the time of Agreement.</p>
                            <p>33% at the time of Registration & Construction.</p>
                            <p>20% after the completion of Basement Level.</p>
                            <p>15% after the completion of roof slab.</p>
                            <p>10% after the completion of plastering.</p>
                            <p> The remaining 5% at the time of Handover.</p> -->
                            <div class="padding-bottom"></div>
                                
                        </div>





                        <div class="tab-pane fade body-color-2" id="tab4default">
                            <h2 class="emi-title"><span style="color: #ce0000;">Non</span> Resident Indian (NRI)</h2>
                            <div class="container ">
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Who is a non-resident Indian (NRI)?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>An Indian Citizen who stays abroad for employment/carrying on business or vocation outside India or stays abroad under circumstances indicating an intention for an uncertain duration of stay abroad is a non-resident. (Persons posted in U.N. organisations and officials deputed abroad by Central/State Governments and Public Sector undertakings on temporary assignments are also treated as non-residents). Non-resident foreign citizens of Indian Origin are treated on par with non-resident Indian citizens (NRIs) for the purpose of certain facilities.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Who is a person of Indian Origin?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>For the purposes of availing of the facilities of opening and maintenance of bank accounts and investments in shares/securities in India. A foreign citizen (other than a citizen of Pakistan or Bangladesh) is deemed to be of Indian origin, if, he at any time, held an Indian passport, or he or either of his parents or any of his grand parents was citizen of India by virtue of the Constitution of India or Citizenship Act, 1955 (57 of 1955)</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Who is a person of Indian Origin?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>For the purposes of availing of the facilities of opening and maintenance of bank accounts and investments in shares/securities in India. A foreign citizen (other than a citizen of Pakistan or Bangladesh) is deemed to be of Indian origin, if, he at any time, held an Indian passport, or he or either of his parents or any of his grand parents was citizen of India by virtue of the Constitution of India or Citizenship Act, 1955 (57 of 1955)
Note : A spouse (not being a citizen of Pakistan or Bangladesh) of an Indian citizen or of a person of Indian origin is also treated as a person of Indian origin for the above purposes provided the bank accounts are opened or investments in shares/securities in India are made by such persons only jointly with their NRI spouses.
For investments in immovable properties. (A foreign citizen (other than a citizen of Pakistan, Bangladesh, Afghanistan, Bhutan, Sri Lanka, or Nepal), is deemed to be of Indian origin if, ) • He held an Indian passport at any time, or he or his father or paternal grand-father was a citizen of India by virtue of the (Constitution of India or the Citizenship Act, 1955 (57 of 1955).</p>
                </div>
            </div>
        </div>


<div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Do FCI origin require permission of Reserve Bank to purchase immovable property in India for their residential use?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>     Reserve Bank has granted general permission to foreign citizens of Indian origin, whether resident in India or abroad, to purchase immovable property in India for their bona fide residential purpose. They are, therefore, not required to obtain permission of Reserve Bank.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">What are the formalities required to be completed by fci origin for purchasing residential general permission?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>They are required to file a declaration in form IPI 7 with the Central Office of Reserve Bank at Mumbai within a period of 90 days from the date of purchase of immovable property or final payment of purchase consideration alongwith a certified copy of the document evidencing the transaction and bank certificate regarding the consideration paid..</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can such property be sold without the permission of Reserve Bank?

</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. Reserve Bank has granted general permission for sale of such property. However, where the property is purchased by another foreign citizen of Indian origin, funds towards the purchase consideration should either be remitted to India or paid out of balances in NRE/FCNR accounts.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Are any conditions required to be fulfilled if repatriation of sale proceeds is desired?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Applications for repatriation of sale proceeds are considered provided the sale takes place after three years from the date of final purchase deed or from the date of payment of final instalment of consideration amount, whichever is later.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
                 <h4 class="panel-title">
                    <a href="#" class="ing">What is a Monthly Reducing balance?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>An Equated Monthly Installment (EMI) has 2 components, interest and principal. When the interest is calculated on monthly rests, the principal on which the interest is charged goes down every month. This results in a significant saving for the customer over the tenure of the loan.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question8">
                 <h4 class="panel-title">
                    <a href="#" class="ing">What is the procedure for seeking such repatriation?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question8" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Applications for necessary permission for remittance of sale proceeds should be made in form IPI 8 to the Central Office of Reserve Bank at Mumbai within 90 days of the sale of the property.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question9">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can foreign citizens of Indian origin acquire or dispose of residential property by way of gift?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question9" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. Reserve Bank has granted general permission to foreign citizens of Indian origin to acquire or dispose of properties up to two houses by way of gift from or to a relative who may be an Indian citizen or a person of Indian origin whether resident in India or not, subject to compliance with applicable tax laws.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question11">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can immovable property held in India, be transferred by way of gift to relatives organisations in India?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question11" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. General permission has been granted by Reserve Bank to non-resident persons (foreign citizens) of Indian origin to transfer by way of gift immovable property held by them in India to relatives and charitable trusts/organisations subject to the condition that the provisions of any other law, including Foreign Contribution (Regulation) Act, 1976, as applicable, are duly complied with.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question12">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can sale proceeds of such property be remitted out of India?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question12" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. Repatriation of original investment in respect of properties purchased by foreign citizens of Indian origin on or after 26th May 1993 will be allowed to be remitted up to the consideration amount originally remitted from abroad provided the property is sold after a period of three years from the date of the final purchase deed or from the date of payment of final instalment of consideration amount, whichever is later. Applications for the purpose are required to be made to the Central Office of Reserve Bank within 90 days of the sale of property in form IPI 8.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question13">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can the properties (residential/commercial) be given on rent if not required for immediate use?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question13" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. Reserve Bank has granted general permission for letting out any immovable property in India. The rental income or proceeds of any investment of such income are eligible for repatriation.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question14">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can NRI obtain loans for acquisition of a house for residential purpose from financial institutions housing finance?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question14" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Reserve Bank has granted general permission to certain financial institutions providing housing finance e.g. HDFC, LIC Housing Finance Ltd., etc., and authorised dealers to grant housing loans to non-resident Indian nationals for acquisition of a house/flat for self-occupation subject to certain conditions. The purpose of the loan, margin money and the quantum of loan will be at par with those applicable to housing loans to residents. Repayment of loan should be made within a period not exceeding 15 years out of inward remittances or out of funds held in the investors' NRE/FCNR/NRO accounts.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question15">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can Indian companies grant loans to their NRI staff?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question15" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Reserve Bank permits Indian firms/companies to grant housing loans to their employees deputed abroad and holding Indian passports subject to certain conditions.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question16">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can Indian companies grant loans to their NRI staff?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question16" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Reserve Bank permits Indian firms/companies to grant housing loans to their employees deputed abroad and holding Indian passports subject to certain conditions.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question17">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Can authorised dealer grant housing loan to nri nationality NRI borrower with his resident close relative?</a>
                     <div class="right-arrow pull-right">+</div>
              </h4>

            </div>
            <div id="question17" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes. However, in such cases the payment of margin money and repayment of the loan instalments should be made by the NRI borrower. Note : For remittance generally one has to approach 'authorised dealer' e.g. a bank permitted to deal in foreign exchange. </p>
                </div>
            </div>
        </div>

       



        
    </div>
    <!--/panel-group-->
</div>
                        </div>




                        <div class="tab-pane fade body-color-3" id="tab5default">
                            
                            <h2 class="emi-title"><span style="color: #ce0000;">TAX</span> BENEFIT</h2>
                            <p>The income tax authorities look upon with favour at those servicing a housing loan from specified financial institutions. It is up to you to be wise enough to take advantage of the home loan facilities provided by them.</p>
                            
                             <h2 class="emi-title" style="font-size: 30px;"><span style="color: #ce0000;">When put in figures,</span> this is quite an amount:</h2>
                            <p>Assume taxable income of Rs 4 lakh, placing the assessee in the highest tax bracket.
Assume interest payment during the first financial year is Rs 1.60 lakh.
Taxable income stands reduced to Rs 2.5 lakh (Rs 4 lakh - Rs 1.5 lakh being the maximum limit).
Total tax amounts to Rs 49,980 (tax of Rs 49,000 + surcharge of Rs 980).
Tax saved is Rs 45,900 (tax @30% on Rs 1.5 lakh plus 2% surcharge as the investor is in the highest tax bracket)That brings us to Section 88 of the Income Tax Act. </p>

<div class="padding-bottom"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url();?>source/emi/jquery.accrue.js"></script>
<script>
$(document).ready(function(){

	// set up normal loan calculation
	$(".calculator-loan").accrue();


	// set up the comparison calculator form.
	$(".calculator-compare").accrue({
		mode: "compare"
	});


	// set up the amortization schedule calculator
	$(".calculator-amortization").accrue({
		
	});


    $('a.ing').click(function(event){
        event.preventDefault();
    })
   

});
</script>

<?php $this->load->view('include/footer');?>