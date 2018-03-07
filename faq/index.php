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
					<a id="FAQ" class="anchor" href="#FAQ" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Hilfe
				</h2>
				
				<h3><a href="#backup">Wie kann ich meine Nachrichten sichern und wiederherstellen?</a></h3>
				<h3><a href="#blockcontacts">Wie kann ich Kontakte sperren oder entsperren?</a></h3>
				<h3><a href="#addcontacts">Wie füge ich Kontakte oder Konferenzen zu meiner Kontaktliste hinzu?</a></h3>
				<h3><a href="#delcontacts">Wie lösche ich Kontakte von meiner Kontaktliste?</a></h3>
				<h3><a href="#delaccount">Wie lösche ich meine Profil?</a></h3>
				<h3><a href="#downloads">Wie konfiguriere ich die Download Einstellungen?</a></h3>
				<h3><a href="#avatar">Wie ändere ich mein Profilbild?</a></h3>
				<h3><a href="#status">Wie ändere ich meinen Status?</a></h3>
				<h3><a href="#hooks">Was bedeuten die farbigen Häkchen in den Chats?</a></h3>
				<h3><a href="#password">Wie ändere ich mein Passwort?</a></h3>
				<h3><a href="#passwordlost">Ich habe mein Passwort vergessen, wie geht es nun weiter?</a></h3>
				<h3><a href="#encprobs">Ich habe Probleme mit dem Versand/Empfang von verschlüsselten Nachrichten.</a></h3>
				<h3><a href="#onlinestatus">Wie kann ich meinen Online-Status freigeben und diesen von anderen Kontakten anfragen?</a></h3>
				<h3><a href="#actionbar">Was ist die Actionbar?</a></h3>
				<h3><a href="#menu">Wo finde ich die Menütaste?</a></h3>

				<hr>

				<h3 id="backup">Wie kann ich meine Nachrichten sichern und wiederherstellen?</h3>
				<h4>Sicherung erstellen</h4>
				Pix-Art Messenger erstellt regelmäßig lokale Backups. Diese werden automatisch jeden Morgen um 4 Uhr in den Speicher deines Telefons geschrieben. Dabei wird die Datenbank mit deinem
				Profilpasswort verschlüsselt, sodass diese nicht von Dritten eingesehen werden kann.
				<br>
				Warnung: Solltest du dein Passwort geändert haben, musst du die Datenbank neu sichern, bevor du sie wieder importieren kannst.
				<br>
				Du kannst die Sicherung über <b><a href="#menu">Menütaste</a> > Einstellungen > Sicherheit und Datenschutz > Chats exportieren</b> manuell anstoßen. Während der Sicherung wird eine Benachrichtig in der
				Benachrichtigungsleiste deines Gerätes angezeigt. Die Sicherung ist fertig, sobald die Benachrichtigung verschwindet.
				<h4>Sicherung wiederherstellen</h4>
				Wenn du eine vorhandene Sicherung importieren möchtest, musst du Pix-Art Messenger deinstallieren und neu installieren. Beim ersten Start wird nach einer vorhandenen Sicherung gesucht.
				Sobald eine Sicherung gefunden wird, besteht die Möglich diese zu importieren (ein Button wird angezeigt). Anschließend wirst du nach deinem Passwort gefragt, um die verschlüsselte Datenbank
				zu entschlüsseln und importieren zu können. Dazu ist dein Profilpasswort zu verwenden. Solltest du dein <a href="#passwordlost">Passwort vergessen</a> haben, kann die Sicherung nicht importiert werden.

				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>

				<h3 id="blockcontacts">Wie kann ich Kontakte sperren oder entsperren?</h3>
				<h4>Kontakt sperren</h4>
				Wenn du einen Kontakt sperren möchstest, gehe in die Kontakt-Details, dort findest du das Symbol zum Sperren <i class="material-icons">speaker_notes_off</i>. Mit einem Klick auf dieses Symbol, fügst du
				diesen Kontakt zu deiner Sperrliste hinzu.
				<br>
				Wenn du einen Kontakt gesperrt hast, erhältst du keine Nachrichten mehr von diesem Kontakt und du selbst kannst diesem Kontakt ebenfalls keine Nachrichten mehr senden, bis du ihn wieder entsperrt hast.
				<h4>Kontakt entsperren</h4>
				Wenn du einen Kontakt entsperren möchstest, gehe in die Kontakt-Details des zu entsperrenden Kontaktes, dort findest du das Symbol zum Entsperren <i class="material-icons">speaker_notes</i>.
				Mit einem Klick auf dieses Symbol, entfernst du diesen Kontakt von deiner Sperrliste.
				<h4>Wo sehe ich, welche Kontakte auf meiner Sperrliste sind?</h4>
				Um deine Sperrliste einzusehen, musst du in deine Profil-Einstellungen <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b> gehen. Ein klick auf das Symbol <i class="material-icons">speaker_notes_off</i>
				öffnet deine Sperrliste. Um einen Kontakt von der Sperrliste zu entfernen, klicke und halte diesen Kontakt so lange, bis sich ein Dialogfenster zum Entsperren öffnet.

				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>

				<h3 id="addcontacts">Wie füge ich Kontakte oder Konferenzen zu meiner Kontaktliste hinzu?</h3>
				Im Hauptfenster von Pix-Art Messenger findest du oben ein <i class="material-icons">add</i> Symbol. Mit einem Klick darauf gelangst du in deine Kontaktliste, in der zwischen Kontakten und Konferenzen unterschieden wird.
				<h4>Kontakt hinzufügen</h4>
				Mit einem Klick auf <i class="material-icons">person_add</i> öffnet sich ein Dialogfenster, in welches du die JID deines Kontaktes eintragen musst. Die JID sieht in etwa so aus: <code>kontakt@domain.de</code>
				<h4>Konferenz hinzufügen</h4>
				Mit einem Klick auf <i class="material-icons">group_add</i> öffnet sich ein Menü, dort wählst du aus, ob du einer <b>Konferenz beitreten</b> oder eine <b>Konferenz erstellen</b> möchtest. 
				<h5>Konferenz beitreten</h5> 
				Es öffnet sich ein Dialogfenster, in welches du die JID der Konferenz eintragen musst. Die JID sieht in etwa so aus: <code>gruppe@conference.domain.de</code>
				<h5>Konferenz erstellen</h5> 
				Es öffnet sich ein Dialogfenster, in welches du den Titel der Konferenz eingibst. Weiterhin musst du Mitglieder auswählen. 
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="delcontacts">Wie lösche ich Kontakte oder Konferenzen von meiner Kontaktliste?</h3>
				Im Hauptfenster von Pix-Art Messenger findest du oben ein <i class="material-icons">add</i> Symbol. Mit einem Klick darauf gelangst du in deine Kontaktliste, in der zwischen Kontakten und Konferenzen unterschieden wird.
				<h4>Kontakt löschen</h4>
				In der Kontaktliste suchst du den zu löschenden Kontakt raus, klickst und hältst den Kontakt, bis sich ein Menü öffnet. Dort wählst du <b>Kontakt löschen</b> aus.
				<h4>Konferenz löschen</h4>
				In der Konferenzliste suchst du die zu löschende Konferenz raus, klickst und hältst die Konferenz an, bis sich ein Menü öffnet. Dört wählst du <b>von Kontaktliste entfernen</b> aus.

				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="delaccount">Wie lösche ich mein Profil?</h3>
				Wenn du Pix-Art Messenger nicht länger benutzen und dein Profil löschen möchtest, brauchst du nichts weiter zu tun. Dein Profil mit sämtlichen Einstellungen usw. wird automatisch gelöscht, 
				wenn du 90 Tage nicht angemeldet/online warst. 
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="downloads">Wie konfiguriere ich die Download Einstellungen?</h3>
				Du kannst Pix-Art Messenger so konfigurieren, dass Dateien bis zu einer bestimmten Größe automatisch heruntergeladen werden können. 
				<br>
				In der Standardeinstellung, werden im WLAN-Netz Dateien bis 10 MB und bei mobiler Datenverbindung bis 256 kb automatisch heruntergeladen. Wenn du bei mobiler Datenverbindung im Roaming bist, 
				werden standardmäßig keine Dateien automatisch heruntergeladen.
				<br>
				In den Einstellungen kannst du diese Dateigrößen anpassen, gehe dazu einfach hier hin <b><a href="#menu">Menütaste</a> > Einstellungen > Anhänge</b> und wähle unter dem entsprechenden Verbindunsgtyp die maximale 
				Dateigröße.
				<br>
				übersteigt eine empfangene Datei diese Größe, wird ein Button angezeigt. Mit einem Klick auf diesen Button kannst du die Datei manuell oder zu einem späteren Zeitpunkt herunterladen.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="avatar">Wie ändere ich mein Profilbild?</h3>
				Zum Ändern deines Profilbildes gehst du in dein Profil über <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b>. Mit einem Klick auf dein vorhandenes Profilbild bzw. auf das farbige Feld mit dem Anfangsbuchstaben 
				deines Benutzernamens gelangst du in ein neues Fenster. Dort kannst du entweder mit einem Klick auf dein Profilbild ein neues Bild wählen. Dabei wird das Bild rechteckig mittig zugeschnitten. Willst du einen anderen
				Ausschnitt wählen klicke in der Menüleiste auf <i class="material-icons">crop</i>, um einen Ausschnitt zu wählen und das Bild zuzuschneiden.
			
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="status">Wie ändere ich meinen Status?</h3>
				Zum Ändern deiner Statusnachricht gehst du in dein Profil über <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b>. Dort klicke in der Menüleiste auf <i class="material-icons">new_releases</i>, um deine 
				Statusnachricht zu veröffentlichen.
				<br>
				Bitte beachte, dass du deinen Status nur manuell ändern kannst, wenn in den Einstellungen <b><a href="#menu">Menütaste</a> > Einstellungen > Status > Status manuell festlegen</b> aktiviert ist.
				<br>
				In den Einstellungen kannst du außerdem deinen Status automatisch festlegen lassen.

				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="hooks">Was bedeuten die farbigen Häkchen in den Chats?</h3>
				Über farbige Häkchen kann der Status deiner gesendeten Nachricht abgelesen werden. Ein grünes Häkchen <img height="12px"  src="/images/received.png" title="Nachricht empfangen"> bedeutet, dass die 
				Nachricht von dem Gerät deines Kontaktes empfangen wurde. 
				<br>
				Ein grünes und ein blaues Häkchen <img height="12px"  src="/images/read.png" title="Nachricht gelesen"> zeigen an, dass dein Kontakt die Nachricht geöffnet bzw. gelesen hat. 
				<br>
				Bitte beachte, dass durch Netzunterbrechungen diese Häkchen nicht immer zuverlässig angezeigt werden können. Auch kann ein Kontakt das Senden von Lese- und Empfangsbestätigungen unterbinden. 
				Du kannst jedoch auch ohne diese Häkchen sicher sein, dass eine Nachricht empfangen wurde. Eine verlorene Nachricht wird immer mit dem Hinweis <font color="red"><i>Zustellung fehlgeschlagen</i></font> 
				gekennzeichnet.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="password">Wie ändere ich mein Passwort?</h3>
				Zum Ändern deines Passwortes gehst du in dein Profil über <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b>. Am obenren Rand findest du ein Schlüssel-Symbol <i class="material-icons">vpn_key</i>, mit einem Klick 
				darauf, kannst du dein Passwort ändern.
				<br>
				Solltest du dein derzeitiges <a href="#passwordlost">Passwort vergessen</a> haben, können wir für dich ein neues Passwort erstellen.
				<br>
				Bitte beachte, dass mit deinem Profilpasswort auch die <a href="#backup">Datensicherung</a> verschlüsselt wird.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="passwordlost">Ich habe mein Passwort vergessen, wie geht es nun weiter?</h3>
				<h4>Du hast dein Passwort vergessen, bist aber noch mit Pix-Art Messenger online</h4>
				<ol>
					<li>Schreibe eine Nachricht an <code>chris@pix-art.de</code> unter Angabe deiner eMail-Adresse.</li>
					<li>Ich werde dein altes Passwort zurücksetzen und dir per eMail ein neues Passwort zuschicken</li>
					<li>Das neue Passwort gibst du in deinem Profil unter <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b> in das Passwortfeld unterhalb des Avatars ein</li>
					<li>Du solltest aus Sicherheitsgründen dieses <a href="#password">Passwort erneut ändern</a>.</li>
				</ol>
				<h4>Du hast dein Passwort vergessen, und kannst dich in Pix-Art Messenger nicht mehr anmelden</h4>
				<ol>
					<li>Sende mir eine eMail unter Angabe deiner JID.</li>
					<li>Ich werde dein altes Passwort zurücksetzen und dir per eMail ein neues Passwort zuschicken</li>
					<li>Das neue Passwort gibst du in deinem Profil unter <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b> in das Passwortfeld unterhalb des Avatars ein</li>
					<li>Du solltest aus Sicherheitsgründen dieses <a href="#password">Passwort erneut ändern</a>.</li>
				</ol>
				<h4>Du hast bei der Registrierung das generierte Passwort beibehalten und möchtest dieses Passwort einsehen</h4>
				Das bei der Registrierung generierte Passwort kannst du in deinem Profil einsehen, gehe dazu über <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b>. Dein Passwort findest du unter 
				<b><a href="#menu">Menütaste</a> > Aktuelles Passwort</b>
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="encprobs">Ich habe Probleme mit dem Versand/Empfang von verschlüsselten Nachrichten.</h3>
				Wenn deine verschlüsselten Nachrichten nicht übertragen bzw. empfangen werden können, stelle bitte sicher, dass du und dein Kontakt euch gegenseitig verifiziert habt. Falls nicht
				holt dies nach und bestätigt gegenseitig eure Identitäten. Außerdem müsst ihr euch beide gegenseitig euren <a href="#onlinestatus">Online-Status</a> freigeben. 
				<br>
				Versucht anschließend erneut euch gegenseitig verschlüsselte Nachrichten zu senden.
				<br>
				Sollte das gegenseitige bestätigen der Identitäten nicht zum Erfolg führen, kann als letzter Ausweg die OMEMO-Identität zurückgesetzt werden. Dann müssen alle deine Kontakte neu bestätigt werden.
				Zum Zurücksetzen führst du folgendes aus <b><a href="#menu">Menütaste</a> > Einstellungen > Experteneinstellungen > OMEMO Identitäten zurücksetzen</b>
				<br>
				Du hast mehrere Geräte mit OMEMO im Einsatz, siehst aber deine eigenen Nachrichten nicht auf den anderen Geräten? Dann prüfe bitte in deinem Profil unter <b><a href="#menu">Menütaste</a> > Profil bearbeiten</b>, 
				ob du deine anderen Gerät verifiziert hast. Natürlich musst du deine anderen Geräte auch mit deinen Kontakten teilen und die Identitäten verifizieren lassen.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="onlinestatus">Wie kann ich meinen Online-Status freigeben und diesen von anderen Kontakten anfragen?</h3>
				In der Standardeinstellung werden die gegenseitigen Online-Status-Anfragen automatisch gestellt und auch erteilt. Falls du dies nicht möchtest, kannst diese Einstellung unter
				<b><a href="#menu">Menütaste</a> > Einstellungen > Sicherheit und Datenschutz > Online-Status</b> ändern, indem du das Häkchen entfernst.
				<h4>Wie erkenne ich, ob mein Kontakt mir seinen Online-Status frei gibt?</h4>
				Dazu gehst du in die <a href="#contactdetails">Kontakt-Details</a>. 
				<br>
				Wenn du unterhalb des Profilbildes <b>Online-Status empfangen</b> findest und dies mit einem Häkchen markiert ist, 
				gibt dein Kontakt seinen Online-Status frei.
				<h4>Wie frage ich den Online-Status meines Kontaktes an?</h4>
				Um den Online-Status deines Kontaktes sehen zu können, musst du deinem Kontakt eine Anfrage um Erlaubnis senden. Dazu gehst du in die <a href="#contactdetails">Kontakt-Details</a>.
				<br>
				Unterhalb des Profilbildes musst du nun ein Häkchen bei <b>Online-Status anfragen</b> setzen. Dein Kontakt wird nun gefragt, ob er dir seinen Online-Status mitteilen möchte. 
				Sobald dein Kontakt seinen Online-Status freigegeben hat ist ein Häkchen vor <b>Online-Status empfangen</b> gesetzt.
				<h4>Wie gebe ich meinen Online-Status frei?</h4>
				Solltest du die Standardeinstellung zur automatischen Freigabe deines Online-Status geändert haben, und diese nun wieder aktivieren wollen, führe folgendes aus
				<b><a href="#menu">Menütaste</a> > Einstellungen > Sicherheit und Datenschutz > Online-Status</b> und setze das Häkchen. Dein Online-Status wird künftig automatisch freigegeben.
				<br>
				Möchtest du deinen Online-Status nur für einen bestimmten Nutzer freigeben, gehe in die <a href="#contactdetails">Kontakt-Details</a> und setzen unter dem Profilbild 
				das Häkchen bei <b>Online-Status vorab erlauben</b>.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="contactdetails">Wo finde ich die Kontakt-Details?</h3>
				<h4>über die Kontaktliste</h4>
				Im Hauptfenster von Pix-Art Messenger findest du oben ein <i class="material-icons">add</i> Symbol. Mit einem Klick darauf gelangst du in deine Kontaktliste, in der zwischen Kontakten 
				und Konferenzen unterschieden wird.
				<br>
				In der Kontaktliste suchst du deinen Kontakt raus, klickst und hältst den Kontakt solange, bis ein Menü erscheint. Dort wählst du <b>Kontakt-Details anzeigen</b> aus.
				<h4>über den Chat</h4>
				Du öffnest den Chat mit deinem Kontakt, ein Klick auf den Namen deines Kontaktes in der <a href="#actionbar">Actionbar</a> öffnet die Kontakt-Details.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="conferencedetails">Wo finde ich die Konferenz-Details?</h3>
				<!--
				<h4>über die Kontaktliste</h4>
				Im Hauptfenster von Pix-Art Messenger findest du oben ein <i class="material-icons">add</i> Symbol. Mit einem Klick darauf gelangst du in deine Kontaktliste, in der zwischen Kontakten 
				und Konferenzen unterschieden wird.
				<br>
				In der Kontaktliste suchst du deinen Kontakt raus, klickst und hältst den Kontakt solange, bis ein Menü erscheint. Dort wählst du <b>Kontakt-Details anzeigen</b> aus.
				-->
				<h4>über den Chat</h4>
				Du öffnest den Chat der Konferenz, ein Klick auf den Namen dieser Konferenz in der <a href="#actionbar">Actionbar</a> öffnet die Konferenz-Details.
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="actionbar">Was ist die Actionbar?</h3>
				Die Actionbar ist die Leiste, in der z.B. der App-Name steht und verschiedene Symbole zu finden sind.
				<br>
				<img height="56px" src="/images/actionbar.png" title="Actionbar">
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
				<h3 id="menu">Wo finde ich die Menütaste?</h3>
				Die Menütaste kann in verschiedenen Android-Versionen auch unterschiedlich aussehen. Bei den meisten Geräten ist diese eine Physikalische Taste und links oder rechts neben dem Home-Button zu finden.
				<br>
				Bei neuen Geräten ist diese aber oftmals nur noch als Softwaretaste in der <a href="#actionbar">Actionbar</a> zu finden und besteht aus drei übereinanderliegenden Punkten oder Strichen.
				<br>
				<img height="48px" src="/images/menu_s.png" title="Softwareseitige Menütaste">
				
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				
			</section>
			<?php include(BASE_PATH.'/lib/sidebar.php'); ?>
		</div>
	</div>
</body>
<?php include(BASE_PATH.'/lib/conversejs.php'); ?>
</html>