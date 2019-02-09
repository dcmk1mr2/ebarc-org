<HTML>
<HEAD>
<TITLE>East Bay Amateur Radio Club VE TEST APPLICATION</TITLE>
</HEAD>

<BODY bgcolor="white" text="black" vlink="green" link="green" font="fixedsys">



<table>
<tr>
<td width=1200 align=left>
<center>
<img src="images/banner.jpg">
<p>
<font size=+2 color="red">
VE Test Session Application Form 605
<font size=+1 color="black">
<p>
INSTRUCTIONS:
</center>
<p>
Please fill in the form completely and accurately.  It is especially important that you enter your correct email address
and phone number as this is the only way the Volunteer Examiner (VE) can contact you to let you know you've been enrolled
in the exam session or if further information is required.  Also, your name (first name, middle initial if you have a middle
name, and last name) must be entered on the form exactly as they appear on your government-issued photo ID.
<p>
Make sure the form is complete and accurate before clicking the SUBMIT button.
<font color="red">
* Indicates a required input field
<font color="black">
<p>
<hr>
<p>
</td></tr></table>
<p>

<table>
<tr>
<td width=650 align=right>
	<table>
	<tr>
	<td width=350 align=right valign=top>

<?php
$tech = ' ';
$gen = ' ';
$extra = ' ';
// display form if user has not clicked submit
if (!isset($_POST["submit"]))
  {
  ?>
   <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  FRN (10 digits with leading zero):   &nbsp &nbsp    
  </td>
  <td width=300 align=left valign=top>
  <input type="text" name="frn" size='10' maxlength='10' required> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Email:  &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="from" size='35' maxlength='35'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Retype Email:  &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="from2" size='35' maxlength='35'"> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  <font color="blue"<EM>NAME MUST MATCH WHAT'S ON YOUR &nbsp  &nbsp <br>
                        GOVERNMENT-ISSUED PHOTO ID.  &nbsp  &nbsp .</EM><font color="black"> 
  <td width=300 align=left valign=top>	
  &nbsp
  </td>
  </tr>
  <td width=350 align=right valign=top>
  First Name:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="fname" size='25' maxlength='25'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  1st Letter of Middle Name:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="minit" size='1' maxlength='1'>
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Last Name:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="lname" size='25' maxlength='25'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Street Address:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="addr1" size='40' maxlength='40'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Address Continued (if needed):   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="addr2" size='40' maxlength='40'> 
  </td>
  </tr>
  <td width=350 align=right valign=top>
  City:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="city" size='25' maxlength='25'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  State (2 Char, e.g. CA):   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="state" size='2' maxlength='2'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  5-digit Zip Code:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="zip" size='5' maxlength='5'> <font color="red">*<font color="black">
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Area Code & Phone Number:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  (.<input type="text" name="areacode" size='3' maxlength='3'>.).<input type="text" name="prefix" size='3' maxlength='3'>.-.<input type="text" name="suffix" size='4' maxlength='4'>  <font color="red">*<font color="black">
  </td>
  </tr>

<p>
<tr>
<td width=350 align=right valign=top>
  &nbsp <br>
  Have you ever been convicted  of a &nbsp  &nbsp <br>
  felony by any state or federal court? &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  &nbsp <br>
  <input type="radio" name="felony" value="YES"> Yes <font color="red">*<font color="black"><br> 
  <input type="radio" name="felony" value="NO"> No 
  </td>
</tr>
<p>
<tr>
  <td width=350 align=right valign=top>
  &nbsp <br>
  Which exam(s) would you like to take?  &nbsp  &nbsp <br>
  Check all that apply &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  &nbsp <br>
  <input type="radio" name="tech" value="tech-exam"> Technician <br> 
  <input type="radio" name="gen" value="general-exam"> General <br>
  <input type="radio" name="extra" value="extra-exam"> Extra 
  </td>
  </tr>





  <td width=350 align=right valign=top>
   <font color="blue"<em>IF YOU ARE ALREADY A HAM: </em> <font color="black">  &nbsp  &nbsp  
  </td>
  <td> &nbsp
  <tr>
  <td width=350 align=right valign=top>
  Do you want your callsign changed  &nbsp  &nbsp <br>
  systematically if you pass a test? &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="radio" name="yesno" value="Y">Yes <br> <input type="radio" name="yesno" value="N"> No
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Current Callsign:   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>	
  <input type="text" name="callsign" size='9' maxlength='9'">
  </td>
  </tr>
  <tr>
  <td width=350 align=right valign=top>
  <hr>
  </td>
  <td width=300 align=left valign=top>
  <hr>
  </td>
  </tr>
  <td width=350 align=right valign=top>
  Add a message to the VE (optional):   &nbsp  &nbsp  
  </td>
  <td width=300 align=left valign=top>
  <textarea rows="8" cols="25" name="comments"></textarea>
  </td>
  </tr>
  </table>

<input type="submit" name="submit" value="Submit">
  </form>
  
</td>
<td width=50>
</td>
<td width=500 align=left valign=top>

 
  
  <?php 
  }
else
  // the user has submitted the form
  {
  // Check if the "from" input field is filled out
if ($_POST["from"] == $_POST["from2"] &&
    $_POST["from"]     != "" &&
    $_POST["fname"]    != "" &&
    $_POST["lname"]    != "" && 
    $_POST["addr1"]    != "" &&
    $_POST["city"]     != "" && 
    $_POST["state"]    != "" && 
    $_POST["zip"]      != "" && 
    $_POST["areacode"] != "" &&
    $_POST["prefix"]   != "" && 
    $_POST["suffix"]   != "" && 
     $_POST["felony"]   != "" &&
    $_POST["frn"]      != "" )

   
    {
     $sendit = $fname. " ".$lname;
    $from = $_POST["from"]; // sender
   // $subject = $_POST["addr1"];

$message = $_POST["frn"]."\n".
$_POST["from"]."\n".
$_POST["fname"]."\n".
$_POST["minit"]."\n".
$_POST["lname"]."\n".
$_POST["addr1"]." ".$_POST["addr2"]."\n".
$_POST["city"]."\n".
$_POST["state"]."\n".
$_POST["zip"]."\n".
"(".$_POST["areacode"].") ".$_POST["prefix"]."-".$_POST["suffix"]."\n".
"Felony: ".$_POST["felony"]."\n".
$_POST["tech"]."\n".
$_POST["gen"]."\n".
$_POST["extra"]."\n".
$_POST["yesno"]."\n".
$_POST["callsign"]."\n".
$_POST["comments"];
   
$message2 = "Hello ".$_POST["fname"]."\n"."\n".
"Thank you for completing this form.  A confirmation email will be sent to you after the VE has reviewed
your application.  Please save this record of your Ham Test Application"."\n"."\n".
"FRN: ".$_POST["frn"]."\n".
"Email: ".$_POST["from"]."\n".
"First Name: ".$_POST["fname"]."\n".
"Initial: ".$_POST["minit"]."\n".
"Last Name: ".$_POST["lname"]."\n".
"Address: ".$_POST["addr1"]."\n".
"Address Continued: ".$_POST["addr2"]."\n".
"City: ".$_POST["city"]."\n".
"State: ".$_POST["state"]."\n".
"ZIP: ".$_POST["zip"]."\n".
"Phone: (".$_POST["areacode"].") ".$_POST["prefix"]."-".$_POST["suffix"]."\n".
"Felony: ".$_POST["felony"]."\n".
"Tech Exam: tech ".$_POST["tech"]."\n".
"General Exam: general ".$_POST["gen"]."\n".
"Extra Exam: extra ".$_POST["extra"]."\n".
"Change Call: ".$_POST["yesno"]."\n".
"Callsign: ".$_POST["callsign"]."\n"."\n".
"Comments: ".$_POST["comments"] ;
  
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    $message2 = wordwrap($message2, 70);
    // send mail
    mail("To: ebarc.veteam@gmail.com","Form 605",$message,"From: $from\n");
    mail("To: martinrothfield@his.com","Form 605",$message,"From: martinrothfield@his.com\n");
    mail("To: aa6xz@earthlink.net","Form 605",$message,"From: $from\n");
//    mail("To: $from\n","Ham Test Application",$message2,"From: ebarc.veteam@gmail.com");
    echo $sendit.": <font size=+2>Your application has been <br>
                                  submitted. This is NOT <br>
                                  confirmation of acceptance <br>
                                  to the exam.  You will<br>
         			  receive an email of <br>
                                  acceptance after the Volunteer <br>
                                  Examiner(VE) has reviewed <br>
                                  your application.<p><hr><p>";
    }
  else 
  {echo "<center><font size=+2>--- ERROR ENCOUNTERED ---<p>Either your email addresses don't<br> match or you have left a<br> required field blank.<p>  Click the BACK button to return<br> to the form and make corrections.<p>
<FORM><INPUT Type=\"button\" VALUE=\"Back\" onClick=\"history.go(-1);return true;\"></FORM></center><p><hr><p>" ;
     
    
      }
  }
  
?>



</td>
</tr>
</table>
</BODY>
</HTML>

