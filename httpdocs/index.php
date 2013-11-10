<? include_once("top.php"); ?>

<div id="content">
	<div id="gallery" class="gallery-container three-column photoswipe">
		<!-- Sweaters -->
		<?php
		$httpGetCallUrl = "http://qe11-openapi.kohlsecommerce.com/v1/catalog/4294719371?sortID=2&limit=6";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $httpGetCallUrl);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'X-APP-API_KEY: 4iY860UaqswaZAjH3rVTCAGb15kDITNV'));
		$result = curl_exec($ch);
		$json = json_decode($result, true);
		$numberOfITems = $json['limit'];
		for ($i = 0; $i < $numberOfITems; $i++) {
			?>
			<a href="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
				<img src="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
			</a>
		<?php
		}
		curl_close($ch);
		?>
		<!-- Jewelry -->
		<?php
		$httpGetCallUrl = "http://qe11-openapi.kohlsecommerce.com/v1/catalog/4294737173?sortID=2&limit=6";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $httpGetCallUrl);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'X-APP-API_KEY: 4iY860UaqswaZAjH3rVTCAGb15kDITNV'));
		$result = curl_exec($ch);
		$json = json_decode($result, true);
		$numberOfITems = $json['limit'];
		for ($i = 0; $i < $numberOfITems; $i++) {
			?>
			<a href="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
				<img src="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
			</a>
		<?php
		}
		curl_close($ch);
		?>
		<!-- Shoes -->
		<?php
		$httpGetCallUrl = "http://qe11-openapi.kohlsecommerce.com/v1/catalog/4294718926+4294719776?sortID=2&limit=6";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $httpGetCallUrl);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'X-APP-API_KEY: 4iY860UaqswaZAjH3rVTCAGb15kDITNV'));
		$result = curl_exec($ch);
		$json = json_decode($result, true);
		$numberOfITems = $json['limit'];
		for ($i = 0; $i < $numberOfITems; $i++) {
			?>
			<a href="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
				<img src="<?php echo($json['payload']['products'][$i]['image']['url']); ?> ">
			</a>
		<?php
		}
		curl_close($ch);
		?>
	</div>
</div>

</section>

<!-- =Main Content -->


</div>
<!-- =Container -->


<!-- Hammer reload -->
<script>
	setInterval(function () {
		try {
			if (typeof ws != 'undefined' && ws.readyState == 1) {
				return true;
			}
			ws = new WebSocket('ws://' + (location.host || 'localhost').split(':')[0] + ':35353')
			ws.onopen = function () {
				ws.onclose = function () {
					document.location.reload()
				}
			}
			ws.onmessage = function () {
				var links = document.getElementsByTagName('link');
				for (var i = 0; i < links.length; i++) {
					var link = links[i];
					if (link.rel === 'stylesheet' && !link.href.match(/typekit/)) {
						href = link.href.replace(/((&|\?)hammer=)[^&]+/, '');
						link.href = href + (href.indexOf('?') >= 0 ? '&' : '?') + 'hammer=' + (new Date().valueOf());
					}
				}
			}
		} catch (e) {
		}
	}, 1000)
</script>
<!-- /Hammer reload -->


<!--jQuery & Google Maps -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="js/vendor/jquery.js"><\/script>')</script>

<!-- Google Maps script -->

<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpYpkxGMeJcDfwD5QJMhBZT0No7Jleg-E&sensor=false"></script>

<!-- =jQuery & Google Maps -->


<!-- Custom Scripts -->

<script src='js/plugins/klass.js'></script>
<script src='js/plugins/photoswipe.js'></script>
<script src='js/plugins/hammer.js'></script>
<script src='js/plugins/flexslider.js'></script>
<script src='js/plugins/h5validate.js'></script>
<script src='js/plugins/responsivetables.js'></script>
<script src='js/plugins/prism.js'></script>
<script src='js/script.js'></script>

<!-- =Custom Scripts -->


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

<script>
	var _gaq = [
		['_setAccount', 'UA-XXXXX-X'],
		['_trackPageview']
	];
	(function (d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	}(document, 'script'));
</script>

<!-- =Google Analytics -->


</body>
</html>