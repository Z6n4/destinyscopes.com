<!DOCTYPE html>
<head>
	<title></title>
	<link rel="stylesheet" href="public/stylesheets/main.min.css">
</head>
<!-- !Body -->
<body>

	<?php
		/*
		$apiKey = '46234df2505b44d1b4f03a6b3c6b3f15';
		$ch = curl_init();
		'https://www.bungie.net/platform/destiny/1/Stats/GetMembershipIdByDisplayName/Aquilae');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, array('X-API-Key: ' . $apiKey));

		$json = json_decode(curl_exec($ch));
		echo $json->Response;
		*/
	?>

	<header id="global-header">
		<h1>Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend">Legend</a>
	</header>

	<div class="layout">
		<div class="primary-column">

		</div>
		<div class="secondary-column">
			<div id="legend" class="legend">
				<h4>Iron Sites</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>

				<h4>Red Dot Sites</h4>
					<ul>
						<li><a href="#">Red Dot</a></li>
						<li><a href="#">QuickDraw IS</a></li>
						<li><a href="#">SureShot IS</a></li>
					</ul>

					<h5>Omolon</h5>
						<ul>
							<li><a href="#">SteadyHand IS</a></li>
							<li><a href="#">QuickDraw IS</a></li>
							<li><a href="#">SureShot IS</a></li>
						</ul>

					<h5>Suros</h5>
						<ul>
							<li><a href="#">SteadyHand IS</a></li>
							<li><a href="#">QuickDraw IS</a></li>
							<li><a href="#">SureShot IS</a></li>
						</ul>
					<h5>Hakke</h5>
						<ul>
							<li><a href="#">SteadyHand IS</a></li>
							<li><a href="#">QuickDraw IS</a></li>
							<li><a href="#">SureShot IS</a></li>
						</ul>

				<h4>Ranged Scopes</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>

				<h4>Sniper Scopes</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>


			</div>
		</div>




	</div><!-- layout -->
	<footer id="global-footer">

		<p>A hobby project by @tehtrav. Contact me on <a href="http://twitter.com/tehtrav">Twitter</a> or by

		<script type="text/javascript" language="javascript">
		<!--
		// Email obfuscator script 2.1 by Tim Williams, University of Arizona
		// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
		// This code is freeware provided these four comment lines remain intact
		// A wizard to generate this code is at http://www.jottings.com/obfuscator/
		{ coded = "nus95crr55nNzz@i6spr.IW6"
		  key = "fYXSRUcqhN1TLVMwisKy9EmrzPCtboIQ23Z74Ajxp5D0eB6uGJOnHWga8kvFdl"
		  shift=coded.length
		  link=""
		  for (i=0; i<coded.length; i++) {
		    if (key.indexOf(coded.charAt(i))==-1) {
		      ltr = coded.charAt(i)
		      link += (ltr)
		    }
		    else {
		      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
		      link += (key.charAt(ltr))
		    }
		  }
		document.write("<a href='mailto:"+link+"'>Email</a>")
		}
		//-->
		</script><noscript>Email</noscript> for questions or comments.</p>

	</footer>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="resources/scripts/scopes.js"></script>

</body>
</html>
