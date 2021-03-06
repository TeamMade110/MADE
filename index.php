<!doctype html>
<html>
<head>

	<title><?php include('inc/title.txt');?></title>
	<meta name="description" content="<?php include('inc/meta-d.txt"');?>
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet/less" type="text/css" href="styles.less" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<script src="inc/less-1.4.1.min.js"></script>
<script src="inc/openClose.js" type="text/javascript"></script>
</head>
<body>
    <header id="home">
    
<?php include('inc/nav.php'); ?>
<div id="logo"></div>
 
</header>
<div id="mobile-header">
<?php include('inc/nav-mobile.php'); ?>
</div>

<div id="clear"></div>

<div id="user-wrapper">
<h1>Welcome - UserName</h1>
<div id="h1"></div>

<h2>Last Medical Checkup</h2>
<table id="info">
	<tbody>
	<tr>
		<th>Temperature</th>
		<th>Pulse</th>
		<th>Respiratory</th>
		<th>Height</th>
		<th>Weight</th>
		<th>Body Mass Index</th>
		<th>Nutrition</th>
		<th>Assigned Provider</th>
		<th>Time of Visit</th>
	</tr>
	<tr>            
             <td class="content">1234</td>
	     <td class="content">sdf</td>
	     <td class="content">wer</td>
	     <td class="content">gfdfg</td>
	     <td class="content">wer</td>
	     <td class="content">xcv</td>
	     <td class="content">333</td>
	     <td class="content">fsdf</td>
	     <td class="content">01/21/96</td>
        </tr>
	</tbody>
	</table>
	<table class="info1" id="med">
	<tbody>
	<tr><!-- all medications link to drugs.com/somemed -->	
		<th>Medications</th>
	</tr>
	<tr>
		<td class="content">stuff</td>
	</tr>
	<tr>
		<td class="content">more of the same</td>
	</tr>
	<tr>
		<td class="content">Cheese</td>
	</tr>
	<tr>
		<td class="content">Crackers</td>
	</tr>
	</tbody>
	</table>
	<table class="info1" id="aller">
	<tbody>
	<tr>
		<th>Allergies</th>
        </tr>
	<tr>
		<td class="content">allergy 1</td>
	</tr>
	<tr>
		<td class="content">allergy 2</td>
	</tr>
	<tr>
		<td class="content">allergy 3</td>
	</tr>
	</tbody>
	</table>
	<table id="dis" class="info1">
	<tbody><!-- http://www.cdc.gov/arthritis/ -->
	<tr>
		<th>Diseases</th>
	</tr>
	<tr>
	        <td class="content">stuff</td>
	</tr>
	<tr>
		<td class="content">Pain</td>
	</tr>
	</tbody>
	</table>
	<table id="smoke" class="info1">
	<tbody>
	<tr>
		<th>Smoking</th>
	</tr>
	<tr>
		<td class="content">Never</td>
	</tr>
	</tbody>
	</table>
	<table id="alcho" class="info1">
	<tbody>
	<tr>
		<th>Alcohol</th>
	</tr>
	<tr>            
             <td class="content">Every Day</td>
	</tr>
	</tbody>
	</table>
	<div id="clear"></div>
	<table id="doctor" class="info1">
	<tbody>
	<tr>
		<th id="doctor">Doctor's Notes</th>
	</tr>
	<tr>
		     <td id="doctor" class="content">Web site technologies it is often necessary to divide the study between those which are primarily client-side and those that are server-side In this class we present a complete overview of server-side Web technologies in light of the role in a complete Web system. We start first with a quick review of the environment of Web development with a full overview of the server-side of the application
		     </td>
        </tr>
	</tbody>
	</table>
	<table style="float: left;" class="info1">
	<tbody>
	<tr>
		<th>Primary Care Unit</th>
	</tr>
	<tr>
		     <td class="content">
			Kaiser Medical Center
		     </td>
	</tr>
	<tr>
		     <td class="content">
			Address: 5523 Somewhere 92045 
		     </td>     
	</tr>
	<tr>
		     <td class="content">
			Hours: 6 am - 11 pm
		     </td>
	</tr>
	<tr>
		     <td class="content">
			Phone: 858 543 8563
		     </td>  
        </tr>
	</tbody>
	</table>
<!--------------------- mobile devices ----------------->

	<table id="m-options" class="mobile">
	<tbody>
		<tr>
		<th id="a-vital">
			<span id="options-text">Vitals</span>
			<a id="plus1" class="toggle" onclick="openSubNav(1, 'vital')">
				<img src="images/plus.jpg">
			</a>
			<a id="minus1" class="toggle" onclick="closeSubNav(1, 'vital')">
				<img src="images/minus.jpg">
			</a>
		</th>
		</tr>
	</tbody>
	</table>
	
<table class="mobile" id="m-vital">
	<tbody>
	<tr>
		<th>Temperature</th>
	</tr>
	<tr>            
             <td class="content">1000 degrees</td>
        </tr>
	<tr>
		<th>Pulse</th>
	</tr>
	<tr>            
             <td class="content">1000 degrees</td>
        </tr>
	<tr>
		<th>Respiratory</th>
	</tr>
	<tr>            
             <td class="content">good</td>
        </tr>
	<tr>
		<th>Height</th>
	</tr>
	<tr>            
             <td class="content">6'4"</td>
        </tr>
	<tr>
		<th>Weight</th>
	</tr>
	<tr>            
             <td class="content">1000 lbs</td>
        </tr>
	<tr>
		<th>Body Mass Index</th>
	</tr>
	<tr>            
             <td class="content">something</td>
        </tr>
	<tr>
		<th>Nutrition</th>
	</tr>
	<tr>            
             <td class="content">wonderful</td>
        </tr>
	<tr>
		<th>Assigned Provider</th>
	</tr>
	<tr>            
             <td class="content">Dr. Terry Chan</td>
        </tr>
	<tr>
		<th>Date of Visit</th>
	</tr>
	<tr>            
             <td class="content">01/15/06</td>
        </tr>
	</tbody>
	</table>
	<table id="m-options" class="mobile">
	<tbody>
		<tr>
			<th id="a-secondary">
				<span id="options-text">Secondary</span>
			<a id="plus2" class="toggle" onclick="openSubNav(2, 'secondary')">
				<img src="images/plus.jpg">
			</a>
			<a id="minus2" class="toggle" onclick="closeSubNav(2, 'secondary')">
				<img src="images/minus.jpg">
			</a>
			</th>
		</tr>
	</tbody>
	</table>
	<table class="mobile" id="m-secondary">
	<tbody>
	<tr>
		<th>Alcohol</th>
	</tr>
	<tr>
		<td class="content">weekly</td>
	</tr>
	<tr>
		<th>Smoking</th>
	</tr>
	<tr>
		<td>no</td>
	</tr>
	<tr>
		<th>Medication</th>
	</tr>
	<tr>            
             <td class="content">med 1</td>
	</tr>
	<tr>            
             <td class="content">med 2</td>
        </tr>
	<tr>            
             <td class="content">med 3</td>
        </tr>
	<tr>
		<th>Alergies</th>
	</tr>
	<tr>            
             <td class="content">allergy 1</td>
        </tr>
	<tr>            
             <td class="content">allergy 2</td>
        </tr>
	<tr>            
             <td class="content">allergy 3</td>
        </tr>
	</tbody>
	</table>
	<table class="mobile">
	<tbody>
	<tr>
		<th>Doctor's Notes</th>
	</tr>
	<tr>
	<td class="content">Your going to live forever. Web site technologies it is often necessary to divide the study between those which are primarily client-side and those that are server-side In this class we present a complete overview of server-side Web technologies in light of the role in a complete Web system. We start first with a quick review of the environment of Web development with a full overview of the server-side of the application
	</td>
	</tr>          
	<tr>
		<th>Primary Care Unit</th>
	</tr>
	<tr>
		     <td class="content">
			Kaiser Medical Center
		     </td>
	</tr>
	<tr>
		     <td class="content">
			Address: 5523 Somewhere 92045 
		     </td>     
	</tr>
	<tr>
		     <td class="content">
			Hours: 6 am - 11 pm
		     </td>
	</tr>
	<tr>
		     <td class="content">
			Phone: 858 543 8563
		     </td>  
        </tr>
	</tbody>
	</table>

</div>
<div id="clear1"></div>
<div id="block"></div>
<footer>
	<?php include('inc/footer.php'); ?>
</footer>
</body>
</html>

