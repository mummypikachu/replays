<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//showdown-server.herokuapp.com/style/font-awesome.css?0.4878706801953552" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.30237013318359396" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8727689901732545" />
	<link rel="stylesheet" href="//showdown-server.herokuapp.com/style/battle.css?0.6770440634998323" />
	<link rel="stylesheet" href="//showdown-server.herokuapp.com/style/replay.css?0.7553717733230338" />
	<link rel="stylesheet" href="//showdown-server.herokuapp.com/style/utilichart.css?0.3251443202868194" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.09652859480947873"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6528412013613933" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//sigmatic-dex.herokuapp.com/testclient.html/?0.32328759754482617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06984470971529189">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9508046732596602">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9905078555878355">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//showdown-server.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12172664044099846"></script>
	<script src="//showdown-server.herokuapp.com/js/lib/lodash.core.js?0.8068734613328068"></script>
	<script src="//showdown-server.herokuapp.com/js/lib/backbone.js?0.2551997382881106"></script>
	<script src="//sigmatic-dex.herokuapp.com/testclient.html/js/panels.js?0.29011211060976216"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//showdown-server.herokuapp.com/js/lib/jquery-cookie.js?0.3458519371229838"></script>
	<script src="//showdown-server.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9342679967543264"></script>
	<script src="//showdown-server.herokuapp.com/js/battle-sound.js?0.7146335846474492"></script>
	<script src="//showdown-server.herokuapp.com/config/config.js?0.5846148489352503"></script>
	<script src="//showdown-server.herokuapp.com/js/battledata.js?0.41984478017826987"></script>
	<script src="//showdown-server.herokuapp.com/data/pokedex-mini.js?0.5362928470597166"></script>
	<script src="//showdown-server.herokuapp.com/data/pokedex-mini-bw.js?0.18354854583952007"></script>
	<script src="//showdown-server.herokuapp.com/data/graphics.js?0.6008181862855426"></script>
	<script src="//showdown-server.herokuapp.com/data/pokedex.js?0.35578464537475085"></script>
	<script src="//showdown-server.herokuapp.com/data/items.js?0.8014266565181085"></script>
	<script src="//showdown-server.herokuapp.com/data/moves.js?0.9564776881107673"></script>
	<script src="//showdown-server.herokuapp.com/data/abilities.js?0.1880408571207257"></script>
	<script src="//showdown-server.herokuapp.com/data/teambuilder-tables.js?0.38162572928298677"></script>
	<script src="//showdown-server.herokuapp.com/js/battle-tooltips.js?0.797135188012239"></script>
	<script src="//showdown-server.herokuapp.com/js/battle.js?0.9871840854675198"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
