<!DOCTYPE html>
<head>
	<title>DestinyScopes.com</title>
	<link rel="stylesheet" href="public/stylesheets/main.min.css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header id="global-header">
		<h1>Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend"><span>Legend</span></a>
	</header>

	<div class="layout">
		<div class="primary-column">
		</div>
		<div class="secondary-column">
			<nav class="col-xs-3 bs-docs-sidebar">
		        <ul id="sidebar" class="nav nav-stacked fixed">
		            <li>
		                <a href="#GroupA">Group A</a>
		                <ul class="nav nav-stacked">
		                    <li><a href="#GroupASub1">Sub-Group 1</a></li>
		                    <li><a href="#GroupASub2">Sub-Group 2</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#GroupB">Group B</a>
		                <ul class="nav nav-stacked">
		                    <li><a href="#GroupBSub1">Sub-Group 1</a></li>
		                    <li><a href="#GroupBSub2">Sub-Group 2</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#GroupC">Group C</a>
		                <ul class="nav nav-stacked">
		                    <li><a href="#GroupCSub1">Sub-Group 1</a></li>
		                    <li><a href="#GroupCSub2">Sub-Group 2</a></li>
		                </ul>
		            </li>
		        </ul>
		    </nav>



			<div id="legend" class="legend">
			</div>
		</div>
	</div><!-- layout -->
	<footer id="global-footer">
		<p>A hobby project by @tehtrav. Contact me on <a href="http://twitter.com/tehtrav">Twitter</a> or by
		<script type="text/javascript" language="javascript">
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
		</script><noscript>Email</noscript> for questions or comments.</p>

	</footer>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="resources/scripts/scopes.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-72752759-1', 'auto');
		ga('send', 'pageview');
	</script>

</body>
</html>
