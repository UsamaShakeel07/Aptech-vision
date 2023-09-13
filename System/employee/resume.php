<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
  if ($myrole == "employee") {
  }else{
  header("location:../");		
  }
  }else{
  header("location:../");	
  }
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Individual - Employee Profile</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

    <link rel="shortcut icon" href="../images/logos.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">
  <head>
    <style>
        html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
abbr,
address,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
samp,
small,
strong,
sub,
sup,
var,
b,
i,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
summary,
time,
mark,
audio,
video {
  border: 0;
  font: inherit;
  font-size: 100%;
  margin: 0;
  padding: 0;
  vertical-align: baseline;
	box-sizing: border-box;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

/* We need to minimize the use of code, so we will be using roots...this is in the works */
:root {
  --highlight: #cf8a05;
  --header-font: "Gudea", Helvetica, Arial, sans-serif;
  --content-font: "Lato", Helvetica, Arial, sans-serif;
}

html,
body {
  font-family: "Lato", Helvetica, Arial, sans-serif;
  font-size: 16px;
  color: #222;
}

.clear {
  clear: both;
}

#menu {
  position: fixed;
  right: 0;
  top: 15%;
  width: 8em;
  margin-top: -2.5em;
}

p {
  font-size: 1em;
  line-height: 1.4em;
  margin-bottom: 20px;
  color: #444;
  transition: all 1s linear;
  -o-transition: all 1s linear;
  -moz-transition: all 1s linear;
  -webkit-transition: all 1s linear;
}

a {
  color: inherit;
}

i {
	margin-right:10px;
}

.cv {
  width: 90%;
  max-width: 800px;
  background: #fff;
  margin: 30px auto;
}

.cv:hover {
  cursor: grab;
  cursor: -moz-grab;
  cursor: -webkit-grab;
}

.cv:active {
  cursor: grabbing;
  cursor: -moz-grabbing;
  cursor: -webkit-grabbing;
}

.primaryContent{
	display:flow-root;
}
.mainDetails {
  padding: 25px 35px 5px;
  border-bottom: 2px solid #14d4ac;
  background: #f3f3f3;
}

.bioDetails{
	margin-top:30px;
	font-size:.75em;
}

#name h1 {
  font-size: 2.5em;
  font-weight: 700;
  font-family: "Gudea", Helvetica, arial, sans-serif;
  margin-bottom: -6px;
}

#name h2 {
  font-size: 2em;
  margin-left: 2px;
  font-family: "Gudea", Helvetica, arial, sans-serif;
}

#personalArea{
	padding: 0 40px; 
}

#mainArea {
  padding: 0 40px;
}

.phone{
	float:left;
}

.address{
	float:right;
}

.contactIcon{
	float:left;
}

.contactInfo{
	float:left;
}

.item{
	height:2em;
}

/* I deeply love breakfast burritos */
.breakFastBurrito {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.breakFastBurrito:hover {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

#headshot {
  width: 12.5%;
  float: left;
  margin-right: 30px;
  border-radius: 50% !important;
}

#headshot img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 50px;
  border-radius: 50% !important;
}

#name {
  float: left;
  margin-top: 50px;
}

#contactDetails {
  float: right;
}

#contactDetails ul {
  list-style-type: none;
  font-size: 0.9em;
  margin-top: 2px;
}

#contactDetails ul li {
  margin-bottom: 3px;
  color: #444;
  display: inline;
}

#contactDetails ul li a,
a[href^="tel"] {
  color: #444;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  -o-transition: all 0.3s ease-in;
  -ms-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
}

#contactDetails ul li a:hover {
  color: #cf8a05;
}

section {
  border-top: 1px solid #dedede;
  padding: 20px 0 0;
}

#personalArea section:first-child {
  border-top: 0;
}

section:last-child {
  padding: 20px 0 10px;
}

.sectionTitle {
  float: left;
  width: 25%;
}

.sectionContent {
  float: right;
  width: 72.5%;
}

.sectionTitle h1 {
  font-family: "Gudea", helvetica, arial, sans-serif;
  font-size: 0.89em;
  color: #04847c;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.sectionContent h2 {
  font-family: "Gudea", helvetica, arial, sans-serif;
  font-size: 1.5em;
  margin-bottom: -2px;
}

.subDetails {
  font-size: 0.8em;
  font-style: bold;
  margin-bottom: 3px;
}

.keySkills {
  list-style-type: none;
  -moz-column-count: 3;
  -webkit-column-count: 3;
  column-count: 3;
  margin-bottom: 20px;
  font-size: 1em;
  color: #444;
}

.keySkills ul li {
  margin-bottom: 3px;
}

@media all and (min-width:801px){
	#personalArea{
		padding: 0 20px;
		width:34%;
		float: right;
	}
	
	.phone, .address{
		width:100%;		
	}

	#mainArea {
		padding: 0 20px;
		width: 66%;
		float: left;
	}	
	.sectionTitle {
		float: left;
		width: 100%;
			margin-bottom:1em;
		font-size:1.25em;
	}

	.sectionContent {
		float: right;
		width: 100%;
	}
	
	section:first-child {
  border-top: 0;
	}

}

@media all and (min-width: 643px) and (max-width: 800px) {
  #headshot {
    display: none;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}

@media all and (max-width: 642px) {
  .cv {
    width: 95%;
    margin: 10px auto;
    min-width: 280px;
    transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -webkit-transition: all 0.25s linear;
  }

  #headshot {
    display: none;
  }

  #name,
  #contactDetails {
    float: none;
    width: 100%;
    text-align: center;
  }

  .sectionTitle,
  .sectionContent {
    float: none;
    width: 100%;
  }

  .sectionTitle {
    margin-left: -2px;
    font-size: 1.25em;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}

@media all and (max-width: 480px) {
  .mainDetails {
    padding: 15px 15px;
  }
	
	.phone, .address{
		width:100%;
	}

  section {
    padding: 15px 0 0;
  }

  #mainArea, #personalArea {
    padding: 0 25px;
  }

  .keySkills {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }

  #name h1 {
    line-height: 1em;
    margin-bottom: 4px;
  }
}

@page {
  size: 210mm 297mm;
  margin: 25cm;
}

@media print {
	
  .cv {
    width: 100%;
  }
	/* I deeply love breakfast burritos */
	.breakFastBurrito {
		box-shadow: none;
		transition: none;
	}

	.breakFastBurrito:hover {
		box-shadow: none;
	}
}

@-webkit-keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.instaFade {
  -webkit-animation-name: reset, fade-in;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-timing-function: ease-in;

  -moz-animation-name: reset, fade-in;
  -moz-animation-duration: 1.5s;
  -moz-animation-timing-function: ease-in;

  animation-name: reset, fade-in;
  animation-duration: 1.5s;
  animation-timing-function: ease-in;
}

.quickFade {
  -webkit-animation-name: reset, fade-in;
  -webkit-animation-duration: 2.5s;
  -webkit-animation-timing-function: ease-in;

  -moz-animation-name: reset, fade-in;
  -moz-animation-duration: 2.5s;
  -moz-animation-timing-function: ease-in;

  animation-name: reset, fade-in;
  animation-duration: 2.5s;
  animation-timing-function: ease-in;
}

.delayOne {
  -webkit-animation-delay: 0, 0.5s;
  -moz-animation-delay: 0, 0.5s;
  animation-delay: 0, 0.5s;
}

.delayTwo {
  -webkit-animation-delay: 0, 1s;
  -moz-animation-delay: 0, 1s;
  animation-delay: 0, 1s;
}

.delayThree {
  -webkit-animation-delay: 0, 1.5s;
  -moz-animation-delay: 0, 1.5s;
  animation-delay: 0, 1.5s;
}

.delayFour {
  -webkit-animation-delay: 0, 2s;
  -moz-animation-delay: 0, 2s;
  animation-delay: 0, 2s;
}

.delayFive {
  -webkit-animation-delay: 0, 2.5s;
  -moz-animation-delay: 0, 2.5s;
  animation-delay: 0, 2.5s;
}

    </style>
</head>
<body style="background-color: #444c44;" class="not-transparent-header">
<button style="background-color:#14d4ac; padding: 10px 15px 10px 15px;" id="printButton">Print Resume</button>

    <div id="drag" class="cv instaFade breakFastBurrito">
        <div class="mainDetails">
          <div id="headshot" class="quickFade">
          <?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
                              </div>
    
          <div id="name">
            <h1 class="quickFade delayTwo"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h1>
            <p class="user-role"><?php echo "$mytitle"; ?></p>
                  			
          </div>
          <div class="clear"></div>
        </div>
    
            <div class="primaryContent">
            <div id="personalArea" class="quickFade delayFour">
                <section>
                            <div class="sectionTitle">
                                <h1>Basic Info</h1>
                            </div>
                            <div class="sectionContent">				
                                <div class="phone">
                                    <div class="item">
                                        <div class="contactIcon"><i class="fa fa-phone fa-fw fa-lg" aria-hidden="true"></i></div>
                                        <div class="contactInfo"><?php echo "$myphone"; ?></div>	
                                    </div>

                                    <div class="item">
                                        <div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
                                            <div class="contactInfo"><?php echo "$myemail"; ?></div>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="item">
                                        <div class="contactIcon"><i class="fa fa-envelope fa-fw fa-lg" aria-hidden="true"></i></div>
                                        <div class="contactInfo">
                                        <?php echo "$mystreet"; ?><br/>		
                                        <?php echo "$mycity"; ?><br/>
                                        <?php echo "$myzip"; ?>
                                        </div>
                                    </div>
                                </div>
                                <p><p/>
    
                            </div>
                </section>			
          <div class="clear"></div>			
            </div>
            
        <div id="mainArea" class="quickFade delayFive">
          <section id="Profile">
            <article>
              <div class="sectionTitle">
                <h1>Personal Profile</h1>
              </div>
    
              <div class="sectionContent">
                <p><?php echo "$mydesc"; ?></p>
              </div>
            </article>
            <div class="clear"></div>
          </section>
    
          <?php
require 'constants/check_reply.php';
require '../constants/db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid'");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        echo "<section id='Education'>
                <div class='sectionTitle'>
                    <h1>Education</h1>
                </div>
                <div class='sectionContent'>";
        
        foreach($result as $row) {
            $institution = $row['institution'];
            $course = $row['course'];
            $timeframe = $row['timeframe'];
            $course_id = $row['id'];
            $level = $row['level'];

            // Output the education entry
            echo "<article>
                    <h2>{$row['course']}</h2>
                    <h3>{$row['institution']}</h3>
                    <p class='subDetails'>{$row['timeframe']}</p>
                </article>";
        }
        
        echo "</div>
                <div class='clear'></div>
              </section>";
    } else {
        echo "No education data found.";
    }
} catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
}
?>
<?php
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM tbl_experience WHERE member_no = '$myid'");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        echo "<section id='Work'>
        <div class='sectionTitle'>
          <h1>Work Experience</h1>
        </div>

        <div class='sectionContent'>";

        foreach($result as $row)
        {
$title = $row['title'];
$institution = $row['institution'];
$supervisor = $row['supervisor'];
$phone = $row['supervisor_phone'];
$start_date = $row['start_date'];
$end_date = $row['end_date'];
$duties = $row['duties'];
$expid = $row['id'];

                // Output the education entry
            echo "<article>
                    <h2>{$row['title']}</h2>
                    <h3>{$row['institution']}</h3>
                    <p class='subDetails'>{$row['start_date']} to {$row['end_date']}</p>
                    <p class='subDetails'>{$row['duties']}</p>
                </article>";
        }
        
        echo "</div>
                <div class='clear'></div>
              </section>";
    } else {
        echo "No education data found.";
    }
} catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
}
?>
    
          
        </div>
            </div>
      </div>



      <script>
        $(function() {
  $("#drag").draggable();
});

      </script>
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script>
    // Function to print the resume
    function printResume() {
        // Hide the print button
        document.getElementById('printButton').style.display = 'none';

        // Print the resume
        window.print();

        // After printing, show the print button again
        document.getElementById('printButton').style.display = 'block';
    }

    // Add a click event listener to the print button
    document.getElementById('printButton').addEventListener('click', printResume);
</script>

</body>



</html>