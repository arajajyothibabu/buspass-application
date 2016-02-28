<?php require_once 'includes/functions.php';?>
<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/constants.php'; ?>
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $psname = $_POST['psname'];
    $dob = $_POST['dob'];
    $type = $_POST['type'];
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Form Validation</title>
	<link rel="stylesheet" href="css/reg.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<!--[if IE]>
	<style>
		.item .tooltip .content{ display:none; opacity:1; }
		.item .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->
</head>
<body>
	<!--<a class='btn github' href='https://www.apsrtc.co.in'>APSRTC</a>
	<a class='btn blog' href='http://www.aascar.in'>AASCAR</a>-->
	<div id='wrap'>
		<div class='options'>
			<!--<label>
				<input type='checkbox' id='vfields' />
				Vertical orientation
			</label>
			<label>
				<input type='checkbox' id='alerts' />
				Disable alerts
			</label>-->
            <label onClick="" id="ins">Instructions</label>
            <label onClick="window.open('bonafide.php','_child','left=200,top=50,width=610,height=850');">Print Certificate</label>
		</div>
        
		<h1 title='Application form' align="center">Bus Pass Application</h1>
        <div id="instructions" style=" display:block; background:#000; color:#FFF; z-index:10; position:absolute; border-radius:10px; padding:5px; margin:0 50px 100px 0px; opacity:2;">
    <h3 align="center">INSTRUCTIONS AND EXAMPLES TO FILL IN APPLICATION FORM</h3>
    <p>1.  Application form should be filled properly and legibly with black ink or blue ink ball pen in 
CAPITAL LETTERS. Fill only one letter in each box  leaving one box between words. Student 
ID Card / Fee Receipt to be enclosed. <br />
2.  Please do not overwrite on the Application Form. <br />
3.  Only  good  quality  passport  size  photograph  should  be  pasted  on  the  Application  Form 
attested by the Principal along with Seal. Please DO NOT STAPLE or pin the photograph. <br />
4.  Student  studying  in  Evening  College  shall  enclose  Unemployment  Certificate  issued  by 
concerned Head of the Institution. <br />
5.  Free bus passes are eligible for below 12 years for boys  and girls below 18 years upto 10th <br />
class. Free bus passes will be issued only upto 30th <br />
September. 
6.  Student who are 35 years and above ageare not eligible for Student Concessional Bus Pass. <br />
7.  Student shall ensure the eligibility criteria before applying for the Bus Pass. Once application 
is rejected due to ineligible conditions, the amount remitted to APSRTC will not be refunded. <br />
8.  Student  should  check  for  identical  preprinted  ticket numbers  on  right  top  hand  and 
computer generated number at bottom of the ticket before leaving the counter, if not tallied 
reject the ticket (in City only). <br />
    </p>
    <img src="images/remove.png" id="close" align="right" width="20" height="20" style="margin-right:0px;"/>
    </div>

		<section class='form' style="padding-left:100px; padding-right:100px;">
			<form action="application.php" method="post" novalidate>
				<fieldset>
                    <div class="item">
			<label>
				<span>Name</span>
				<input data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. Jyothi Babu" required type="text" />		
				</label>
				<div class='tooltip help'>
					<span>?</span>
					<div class='content'>
					<b></b>
					<p>Name must be at least 2 words</p>
					</div>
						</div>
					</div>
                    <div class="item">
						<label>
							<span>SurName</span>
							<input data-validate-length-range="6" data-validate-words="2" name="sname" placeholder="ex. Araja" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Name must be at least 2 words</p>
							</div>
						</div>
					</div>
                    <div class="item">
						<label>
							<span>Parent Name</span>
							<input data-validate-length-range="6" data-validate-words="2" name="pname" placeholder="ex. Rama Rao" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Name must be at least 2 words (father/mother/guardian)</p>
							</div>
						</div>
					</div>
                    <div class="item">
						<label>
							<span>Parent SurName</span>
							<input data-validate-length-range="6" data-validate-words="2" name="psname" placeholder="ex. Araja" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Name must be at least 2 words (father/mother/guardian)</p>
							</div>
						</div>
					</div>
                    <div class="item">
						<label>
							<span>Date of Birth</span>
							<input class='date' type="date" name="dob" required='required'>
						</label>
					</div>
                    <!--gender -->
                    <div class="item">
						<label>
							<span>Type of Pass</span>
							<select class="required" name="type">
								<option value="">-- none --</option>
								<option value="o1">Option 1</option>
								<option value="o2">Option 2</option>
								<option value="o3">Option 3</option>
							</select>
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Choose the appropriate type of pass</p>
							</div>
						</div>
					</div>
                    
                     <div class="item">
						<label>
							<span>Buss Pass code</span>
							<input data-validate-length-range="6" data-validate-words="2" name="bpcode" placeholder="" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter the buss pass code</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Institution Code</span>
							<input data-validate-length-range="6" data-validate-words="3" name="inscode" placeholder="" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Your institution or organisation code</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Institution Name</span>
							<input data-validate-length-range="6" data-validate-words="2" name="insname" placeholder="ex. GVP College of Engineering" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your Institution Name</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Course Code</span>
							<input data-validate-length-range="6" data-validate-words="2" name="ccode" placeholder="" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your course code if any</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Course Name</span>
							<input data-validate-length-range="6" data-validate-words="2" name="cname" placeholder="ex. B-Tech" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your course name if any</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Admission Number</span>
							<input data-validate-length-range="6" data-validate-words="2" name="adno" placeholder="ex. 12131A0505" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Your Institutional Admission Number</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<h3>Route Particulars</h3>
					</div>
                     <div class="item">
						<label>
							<span>From</span>
							<input data-validate-length-range="6" data-validate-words="2" name="from" placeholder="ex. Madhurawada" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your starting point</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>To</span>
							<input data-validate-length-range="6" data-validate-words="2" name="to" placeholder="ex. Complex" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your destination point</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Via</span>
							<input data-validate-length-range="6" data-validate-words="2" name="via" placeholder="ex. Maddilapalem" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Your journey via route</p>
							</div>
						</div>
					</div>
                    <fieldset>
                     <div class="item">
						<h3>Residential Address</h3>
					</div>
                     <div class="item">
						<label>
							<span>House No.</span>
							<input data-validate-length-range="6" data-validate-words="2" name="hno" placeholder="ex. 3-14A" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your current House number</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Street</span>
							<input data-validate-length-range="6" data-validate-words="2" name="street" placeholder="ex. MVP Colony Sector 8" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Your Street Name</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Village</span>
							<input data-validate-length-range="6" data-validate-words="2" name="village" placeholder="ex. BakkanaPalem" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your village name if any</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Mandal</span>
							<input data-validate-length-range="6" data-validate-words="3" name="name" placeholder="ex. Visakhapatnam Urban" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your Mandal Name</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>District</span>
							<input data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. Krishna" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter your District Name</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>PIN Code</span>
							<input data-validate-length-range="6" data-validate-words="6" name="pin" placeholder="ex. 530048" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter 6 letter postal pin code</p>
							</div>
						</div>
					</div>
                     <div class="item">
						<label>
							<span>Cell Number</span>
							<input data-validate-length-range="6" data-validate-words="10" name="name" placeholder="ex. 9533162006" required type="text" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter valid 10 digit mobile number</p>
							</div>
						</div>
					</div>
                    </fieldset>
                    <div class="item">
						<label>
							<span>Passport Size Photo</span>
							<input name="pic" type="file" id="pic" onChange="return ValidateFileUpload('pic')"/>		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Photo size must be less then 100kb</p>
							</div>
						</div>
					</div>
                    <div class="item">
						<label>
							<span>Id proof</span>
							<input name="file" type="file" id="file" onChange="return ValidateFileUpload('file')" />		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>study certificate or Aadhar Card etc (Scanned copy must be less the 100kb )</p>
							</div>
						</div>
					</div>
              		                 
                    
              
				</fieldset>
				<fieldset>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hereby declare that the particulars given above are true and correct. I will abide by the rules
          &amp; regulations of APSRTC governing issue of Bus Passes.</p>
					<input name="somethingHidden" required type="text" style='display:none' />
				</fieldset>
				<button id='send' type='submit' name=""><input type="submit" name="submit" value="Submit" onClick="return ImgVal()"></button>
			</form>	
		</section>
	</div>
    <script src="js/validator.js"></script>
    
<script type="text/javascript">
	function ImgVal()
	{
			var fupic = document.getElementById("pic");
			var fufile = document.getElementById("file");
			if ((fupic.files && fupic.files[0]) && (fupic.files && fupic.files[0]))
				return true;
			else
			{
				alert("Problem with Images. Check once again all the fields..!");
				return false;
			}
		
		}

    function ValidateFileUpload(pic) {
        var fuData = document.getElementById(pic);
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '' || FileUploadPath == null) {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                  var size = fuData.files[0].size;

                	if(size > 102400){
                    alert("Maximum file size exceeds(100kb)");
                    return;
					}
                }
	}


//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</script>
    
	<script>
		// initialize the validator function
		validator.message['date'] = 'not a real date';
		
		// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		$('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField)
			.on('keypress', 'input[required][pattern]', validator.keypress);
			
		$('.multi.required')
			.on('keyup blur', 'input', function(){ 
				validator.checkField.apply( $(this).siblings().last()[0] );
			});
		
		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);
		
		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});
		
		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);
		
		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
		//code to display instructions
                $("#ins").click(function(){
			$("#instructions").show(1000);
			});
			
		$("#close").click(function(){
			$("#instructions").hide(500);
			});
	</script>
</body>
</html>