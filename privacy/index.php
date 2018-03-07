<!DOCTYPE html>
<?php
include('/var/www/virtual/pixart/html/jabber/init.php');
include(BASE_PATH.'/lib/head.php');
?>
<body>
	<?php include(BASE_PATH.'/lib/header.php'); ?>
	<div id="content-wrapper">
		<div class="inner clearfix">
			<section id="main-content">
				<h2>
					<a id="PrivacyPolicy" class="anchor" href="#privacy" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Privacy Policy
				</h2>

				<p>
					Pix-Art Messenger is an XMPP client which will connect to almost any XMPP server. Pix-Art Messenger will never upload data to the developer automatically. The only execption to this rule is data collected after a crash, but you will be aksed to send the information. This data will be sent via your own XMPP account but never automatically without your consent.
				</p>
				<p>Pix-Art Messenger or its developers don't have control over the data you send through the messenger. However the following data might get uploaded to your XMPP provider:</p>
				<h3>Data uploaded to your XMPP provider</h3>
				<ul>
					<li>Messages. This includes text messages, images and any other files your share with the messenger</li>
					<li>Your avatar / profile picture</li>
					<li>Your public keys for the OMEMO encryption</li>
				</ul>
				<h3>What does not get uploaded</h3>
				<ul>
					<li>Your contacts will never be uploaded. Pix-Art Messenger only asks permissions to read your contact to show the profile pictures and names of the corresponding XMPP contacts. Your contacts are never published anywhere.</li>
				</ul>
				<h3>Using the pix-art.de provider</h3>
				<p><strong>Using the pix-art.de XMPP provider is optional. You can choose any other XMPP provider.</strong></p>
				<p><b>Bold</b> written parts are necessary.</p>
				<h4>What we store</h4>
				<ul>
					<li>
						Account data
						<ul>
							<li><b>Your user name and hash of your password</b></li>
							<li>Any other data you store within your profile/account e.g. your email address and pofile picture/avatar.</li>
							<li><b>The date of your account creation and the timestamp of your last activity to detect orphan profiles/accounts.</b></li>
						</ul>
					</li>
					<li>
						Messages
						<ul>
							<li><b>Offline messages. If someone sends you a message while you are offline that message will be stored until you get back online.</b></li>
							<li>The message archive (MAM) is activated by default. This will store your messages for 30 days in single chats for later retrieval by yourself e.g if you log in with a new device and want access to your message history. This is also required if you want to use the OMEMO encryption with multiple devices. You can opt-out of this by setting your archiving preferences with your XMPP client.</li>
						</ul>
					</li>
					<li><b>Files. Every file you share with a contact or a group chat will be uploaded and stored for 30 days for later retrieval by the recipients.</b></li>
					<li>Other data
						<ul>
							<li>A list of your contacts (Roster, Buddylist) and group chats. This list is maintained by you. You can decide if you want to store your contacts and group chats within your profile/account.</li>
							<li><b>Your OMEMO public keys.</b></li>
						</ul>
					</li>
				</ul>
				<h4>What we don't store</h4>
				<ul>
					<li>Your IP address</li>
				</ul>
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
			</section>
			<?php include(BASE_PATH.'/lib/sidebar.php'); ?>
		</div>
	</div>
</body>
<?php include(BASE_PATH.'/lib/conversejs.php'); ?>
</html>