<!DOCTYPE html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Pix-Art Messenger">
	<meta name="application-name" content="Pix-Art Messenger">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--icons ende-->
	<!--[if lt IE 9]>
	<script
	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--conversejs-->
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.conversejs.org/css/converse.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/pix-art.css">
	<script src="https://cdn.conversejs.org/dist/converse.min.js" charset="utf-8"></script>
	<script src="OMEMO/libsignal-protocol.js"></script>
	<!--conversejs Ende-->
	<title>Pix-Art Messenger</title>
</head>
<body>
</body>
<script>
	converse.initialize({
		bosh_service_url: 'https://xmpp.pix-art.de:65004/http-bind/',
		view_mode: 'fullscreen',
		i18n: 'de',
		allow_otr: false,
		auto_reconnect: true,
		auto_register_muc_nickname: true,
		auto_join_on_invite: true,
		default_domain: 'pix-art.de',
		registration_domain: 'pix-art.de',
		domain_placeholder: 'pix-art.de',
		forward_messages: true,
		message_archiving: 'always',
		message_carbons: true,
		muc_disable_moderator_commands: true,
		muc_show_join_leave : false,
		show_chatstate_notifications: true,
		allow_contact_removal: false,
		show_send_button: true,
	});
</script>
<?php?>