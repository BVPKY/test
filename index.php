<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placement Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var countryNames = [
	"Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo","Costa Rica","Côte d'Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Democratic People's Republic of Korea (North Korea)","Democratic Republic of the Cong","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Lao People's Democratic Republic (Laos)","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia (Federated States of)","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Republic of Korea (South Korea)","Republic of Moldova","Romania","Russian Federation","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syrian Arab Republic","Tajikistan","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom of Great Britain and Northern Ireland","United Republic of Tanzania","United States of America","Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"
    ];
    $( "#country" ).autocomplete({
      source: countryNames
    });
  } );
 $( function() {
    var stateNames = [
"Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"
];
    $( "#states" ).autocomplete({
      source: stateNames
    });
  } );
 $( function() {
    var districtNames = [
"Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Nellore","Prakasam","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"
];
    $( "#district" ).autocomplete({
      source: districtNames
    });
  } );
$( function() {
    var branchNames = [
"CSE","CE","IT","ECE","EEE","ME"
];
    $( "#branch" ).autocomplete({
      source: branchNames
    });
  } );



  </script>
</head>

<body>
<style>
	#form-content{
		margin: 0 auto;
	}
@media (min-width: 768px) {
    .container-small {
        width: 300px;
    }
    .container-large {
        width: 970px;
    } 
} 
@media (min-width: 992px) {
    .container-small {
        width: 500px;
    }
    .container-large {
        width: 1170px;
    } 
} 
@media (min-width: 1200px) {
    .container-small {
        width: 700px;
    }
    .container-large {
        width: 1500px;
    } 
}

.container-small, .container-large {
    max-width: 100%;
}
.jumbotron{
margin-bottom: 0px;
    background-image: url(country.png);
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: black;
    
    text-shadow: black 0.5em 0.5em 0.5em;

}


</style>

<?php
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=183.83.21.94&format=json"));
?>
<!--echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";-->

<div>
  <h1 align="center"><bold><font color="#FF00FF">Searching the placements in each and every college</font></bold></h1>  
</div>
<hr>
<div class="jumbotron">

<div id="form-content">

      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="country" style="color:white;">Country: </label>
  		<input id="country" name="country" value="<?php echo $url->countryName; ?> ">

	</div>
      </div>
      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="state" style="color:white;">State: </label>
  		<input id="states" name="states" value="<?php echo $url->regionName; ?>">
	</div>
      </div>
      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="district" style="color:white;">District: </label>
  		<input id="district" name="district" >
	</div>
      </div>
<div class="col-xs-3">
        <div class="ui-widget">
  		<label for="branch" style="color:white;">Branch: </label>
  		<input id="branch" name="branch">
<button type="Submit" id="submit" name="submit" class="hidden" >Submit</button>
  <button type="Reset" onclick="ClearFields();" class="btn-xs btn-primary">Reset</button>


</div></div>
	
  
</div>

<script>

$('#india').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#states').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#district').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#branch').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});

function ClearFields() {

     document.getElementById("country").value = "";
     document.getElementById("states").value = "";
     document.getElementById("district").value = "";
     document.getElementById("branch").value = "";
}
</script>

    </div>

  
  
<div class="col-md-12" id="output"></div>

</div>
<script>
  $(document).ready(function(){
       $("#submit").click(function () {
       var country = $("#country").val();
       var states = $("#states").val();
       var district = $("#district").val();
       var branch = $("#branch").val();	
       var dataString ="submit='submit'&country="+ country +'&states='+ states +'&district='+ district +'&branch='+ branch;
      
       // AJAX Code To Submit.
       //console.log(dataString);

           $.ajax({
               type: "POST",
               url: "url.php",
               data: dataString,
               cache: false,
               success: function(result){
                   //window.console.log('Successful');
                   $("#output").html("<p style='color:red'>" + result + "</p>");
               }
           });
});
});
</script>
 
</body>
</html>

