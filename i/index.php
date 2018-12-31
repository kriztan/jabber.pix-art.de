<!DOCTYPE html>
<?php
if (empty($_GET['user']) || empty($_GET['domain'])) {
	header('location: https://jabber.pix-art.de/');
	exit(1);
} else {
	include('/var/www/virtual/pixart/html/jabber/init.php');
	include(BASE_PATH.'/lib/head.php');
	$user = $_GET['user'];
	$domain = $_GET['domain'];
	$preauth = ''; //$_GET['preauth'];
	if (isset($preauth)) {
		$preauth = '?preauth='.$preauth;
	}
}
?>
<body>
	<?php include(BASE_PATH.'/lib/header.php'); ?>
	<div id="content-wrapper">
		<div class="inner clearfix">
			<section id="main-content">
				<h2>
					<a id="Einladung" class="anchor" href="#einladung" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Einladung
				</h2>
				<p>Der Benutzer <b><?php echo $user; ?></b> hat dich zu einem Chat eingeladen.</p>
				<p>Falls du Android Nutzer bist, lade dir den <b><a href="<?php echo $downloadlink; ?>" target="_blank">Pix-Art Messenger</a></b>
					herunter und erstelle dein Benutzerprofil, damit du alle Funktionen nutzen kannst. Gehe anschlie&szlig;end
				zur&uuml;ck zu dieser Seite und f&uuml;ge <b><?php echo $user; ?></b> zu deiner Kontaktliste hinzu, indem du folgenden Link anklickst:</p>
					<a href="xmpp:<?php echo $user;?>@<?php echo $domain.$preauth; ?>"><button type="button"><?php echo $user; ?> hinzuf&uuml;gen</button></a>
					<p>
						<p>Weitere Informationen &uuml;ber Pix-Art Messenger findest du auf <a href="https://jabber.pix-art.de">jabber.pix-art.de</a></p>
					</section>
					<?php include(BASE_PATH.'/lib/sidebar.php'); ?>
				</div>
			</div>
		</body>
	</html>