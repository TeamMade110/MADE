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
<script src="inc/less-1.4.1.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<script src="inc/openClose.js" type="text/javascript"></script>
</head>
<body>
    
<header>
    
<?php include('inc/nav.php'); ?>
 
</header>
<div id="mobile-header">
<?php include('inc/nav-mobile.php'); ?>
</div>

<div id="clear"></div>
<div id="user-wrapper">
<h1>Your Acccount Information</h1>
<div id="h1"></div>
<table id="prof" class="info1">
	<tbody>
	<tr>
		<th style="border-right: none;">Profile Info</th>
		<th style="
		padding-right: 20px;
		border-left: none;
		text-align: right;
		"><i><a href="">Edit / Change</a></i></th>
	</tr>
	<tr>
		<td class="content">
		   <b>First Name</b>
		</td>
		<td class="content">
		   Billy
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Last Name</b>
		</td>
		<td class="content">
		   Marxs
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Sex</b>
		</td>
		<td class="content">
		   Male
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Age</b>
		</td>
		<td class="content">
		   55 <!-- based off of date of birth -->
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>SSN</b>
		</td>
		<td class="content">
		   111-22-3333
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Date of Birth</b>
		</td>
		<td class="content">
		   01/20/94
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Phone</b>
		</td>
		<td class="content">
		   123 456 7788
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Email</b>
		</td>
		<td class="content">
		   asdf@gmail.com
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Address</b>
		</td>
		<td class="content">
		   1111 Happy Ave. 93071 CA
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>User Name</b>
		</td>
		<td class="content">
		   happyUserName
		</td>
	</tr>
	</tbody>
</table>
<table class="info1">
	<tbody>
	<tr>
		<th style="border-right: none;">Primary Care Unit</th>
		<th style="border-left: none;"></th>
	</tr>
	<tr>
		<td class="content">
		   <b>Name</b>
		</td>
		<td class="content">
		   Some happy hospital
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Address</b>
		</td>
		<td class="content">
		   123 mars
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>State</b>
		</td>
		<td class="content">
		   Phone
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Phone</b>
		</td>
		<td class="content">
		   998 664 8989
		</td>
	
	</tr>
	<tr>
		<td class="content">
		   <b>Hours</b>
		</td>
		<td class="content">
		   1 am - 4 pm
		</td>
	
	</tr>
	</tbody>
</table>
<!------------------------ Mobile ---------------------->
<table class="mobile">
	<tbody>
	<tr>
		<th style="border-right: none;">Profile Info<i><a style="float: right;" href="">Edit / Change</a></i></th>
	</tr>
	<tr>
		<td class="content">
		   <b>First Name - </b>
		   Billy
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Last Name</b>
		   Marxs
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Sex</b>
		   Male
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Age</b>
		   55 <!-- based off of date of birth -->
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>SSN</b>
		   111-22-3333
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Date of Birth</b>
		   01/20/94
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Phone</b>
		   123 456 7788
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Email</b>
		   asdf@gmail.com
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Address</b>
		   1111 Happy Ave. 93071 CA
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>User Name</b>
		   happyUserName
		</td>
	</tr>
	</tbody>
</table>
<table class="mobile">
	<tbody>
	<tr>
		<th>Primary Care Unit</th>
		
	</tr>
	<tr>
		<td class="content">
		   <b>Name</b>
		   Some happy hospital
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Address</b>
		   123 mars
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>State</b>
		   Phone
		</td>
	</tr>
	<tr>
		<td class="content">
		   <b>Phone</b>
		   998 664 8989
		</td>
	
	</tr>
	<tr>
		<td class="content">
		   <b>Hours</b>
		   1 am - 4 pm
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

