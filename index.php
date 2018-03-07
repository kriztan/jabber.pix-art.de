<!DOCTYPE html>
<?php
include('init.php');
include(BASE_PATH.'/lib/head.php');
?>
<body>
	<?php include(BASE_PATH.'/lib/header.php'); ?>
	<div id="content-wrapper">
		<div class="inner clearfix">
			<section id="main-content">
				<h2>
					<a id="willkommen" class="anchor" href="#willkommen" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Willkommen
				</h2>
				Seit 20. Feb. 2014 betreiben wir unseren eigenen privaten und kostenfreien XMPP-Dienst. Unser Server steht in Deutschland, in der Nähe von Frankfurt/Main bei uvensys im Rechenzentrum.
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="sicherheit" class="anchor" href="#sicherheit" aria- hidden="true"><span aria-hidden="true" class="octicon octicon- link"></span></a>Sicherheit und Datenschutz
				</h2>
				Verbindungssicherheit und der Schutz persönlicher Daten ist uns sehr wichtig,
				deshalb erzwingen wir verschlüsselte Verbindungen zwischen Messenger und Server,
				was es nahezu unmöglich macht, deine Nachrichten durch Fremde abzufangen und zu
				lesen.<br>
				Wem das nicht genug ist, kann auf die integrierte Nachrichtenverschlüsselung von Ende-zu-Ende, wie OMEMO, OTR oder OpenPGP, zurückgreifen.
				Damit lassen sich Nachrichten auf dem Sendergerät verschlüsseln und nur durch
				das für den Empfang bestimmte Empfangsgerät entschlüsseln.
				<br>
				Seit Version 1.20.0 wird ein Hinweis direkt im Chat angezeigt, sofern du unverschlüsselt schreibst und eine Verschlüsselung möglich ist. 
				<br>
				Für eine Registrierung benötigst du nur einen Nicknamen und ein Passwort, damit bleibst du in der Nutzerdatenbank anonym. Wir sammeln keine eMail-Adressen, Telefonnummern usw. und geben diese
				Daten selbstverständlich auch nicht an Dritte weiter.
				<br>
				Wie unser Server bezüglich der Verbindungssicherheit bewertet wird, könnt Ihr bei xmpp.net testen lassen. Derzeit sieht es bei uns so aus:<br>
				<a href='https://check.messaging.one/result.php?domain=pix-art.de&amp;type=client'>
  				<img src='https://check.messaging.one/badge.php?domain=pix-art.de' alt='IM observatory score' />
				</a>
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="features" class="anchor" href="#features" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Was bieten wir
				</h2>
				<h3>
					<a id="standard-features" class="anchor" href="#standard-features" aria- hidden="true"><span aria-hidden="true" class="octicon octicon- link"></span></a>Funktionen
				</h3>
				<ul>
					<li><i class="material-icons">lock_outline</i> Ende-zu-Ende Verschlüsselung entweder mit <a href="http://conversations.im/omemo/" target="_blank">OMEMO</a>,
						<a href="https://otr.cypherpunks.ca/" target="_blank">OTR</a> oder <a href="http://www.openpgp.org/about_openpgp/" target="_blank">OpenPGP</a>
					</li>
					<li><i class="material-icons">attach_file</i> Austausch von Bildern sowie anderen Dateien</li>
					<li><i class="material-icons">location_on</i> Standorte senden und empfangen</li>
					<li><i class="material-icons">keyboard_voice</i> Sprachnachrichten senden und empfangen</li>
					<li><i class="material-icons">face</i> Integration von Profilbildern (Avatare) deiner Kontakte</li>
					<li><i class="material-icons">cloud_queue</i> Synchronisiere Nachrichtenverlauf mit anderen Clients</li>
					<li><i class="material-icons">group</i> Konferenzen bzw. Gruppenchats</li>
					<li><i class="material-icons">contacts</i> Adressbuchintegration (ein Austausch deines Adressbuches mit dem Server findet nicht statt)</li>
					<li><i class="material-icons">battery_full</i> sehr geringe Akku-Belastung</li>
					<li><i class="material-icons">system_update</i> tägliche Suche nach Aktualisierungen</li>
					<li><i class="material-icons">new_releases</i> Status Nachrichten</li>
					<li><i class="material-icons">settings_backup_restore</i> tägliches Backup der Datenbank auf den lokalen Speicher</li>
				</ul><h3>
					<a id="screenshots" class="anchor" href="#screenshots" aria- hidden="true"><span aria-hidden="true" class="octicon octicon- link"></span></a>Screenshots
				</h3>
				<img class="screenshot" src="/images/screenshots/1.jpg" title="Willkommensbildschirm">
				<img class="screenshot" src="/images/screenshots/2.jpg" title="Konto erstellen">
				<br>
				<img class="screenshot" src="/images/screenshots/3.jpg" title="Konto erstellen">
				<img class="screenshot" src="/images/screenshots/4.jpg" title="Chatansicht">
				<br>
				<img class="screenshot" src="/images/screenshots/5.jpg" title="Kontakt-Details">
				<img class="screenshot" src="/images/screenshots/6.jpg" title="Chatansicht">
				<br>
				<img class="screenshot" src="/images/screenshots/7.jpg" title="Standortanzeige">
				<img class="screenshot" src="/images/screenshots/8.jpg" title="Sprachrecorder">
				<br>
				<img class="screenshot" src="/images/screenshots/9.jpg" title="Chatansicht mit Standort, Bild und Sprachnachricht">
				<img class="screenshot" src="/images/screenshots/10.jpg" title="Anlangenauswahl">
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="anleitung" class="anchor" href="#anleitung" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Kurzanleitung
				</h2>
				<h3>
					<a id="androidvorbereiten" class="anchor" href="#androidvorbereiten" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span>
					</a>Android vorbereiten
				</h3>
				Da die Installation des Messengers nicht über Google Play durchgeführt wird, geht Android im Normalfall ersteinmal auf die Barrikaden und blockiert die Installation.
				<ul>
					<li class="no-wrap">In den Android- bzw. Geräteeinstellungen gibt es unter dem Punkt <b>Sicherheit</b> eine Option, die sich <b>Unbekannte Quellen</b> nennt. Dort ist ein Häkchen zu setzen.<br>
					<img class="screenshot" src="/images/screenshots/1_2.jpg" title="Unbekannte Quellen aktivieren"></li>
					<li class="no-wrap">Nun öffnet sich ein Fenster mit einer Warnung. Diese Warnung kann getrost ignoriert werden und sollte mit einem entfernten Häkchen bei <b>Nur für diese Installation
					zulassen</b> mit OK bestätigt werden. Mal ganz davon abgesehen, dass niemand anderes ohne diese Bestätigung die Verantwortung für Datenverlust und/oder Schäden an deinem Gerät tragen würde ;-).<br>
				<img class="screenshot" src="/images/screenshots/1_3.jpg" title="Unbekannte Quellen aktivieren"></li>
				<li class="no-wrap">Das war alles, nun kann unser Messenger installiert werden.</li>
			</ul>
			<h3>
				<a id="benutzerkonto" class="anchor" href="#benutzerkonto" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span>
				</a>Wie erstelle ich ein Benutzerkonto
			</h3>
			<ul>
				<li class="no-wrap">Mit Android einfach unseren&nbsp;<a href="<?php echo $downloadlink; ?>" target="_blank" >Pix-Art Messenger</a>&nbsp;herunterladen und installieren.</li>
				<li class="no-wrap">Möglicherweise blockiert oder warnt Android vor der Installion und bietet die Möglichkeit direkt zur Einstellung zu springen, um die Installion zu erlauben.<br>
					<img class="screenshot" src="/images/screenshots/1_1.jpg" title="Installation blockiert"><br>
				Hier muss in den Einstellungen unbedingt die Installation von Apps aus <b>Unbekannten Quellen</b> erlaubt werden. Sollte Android nicht dahin springen, dann bitte <a href="#androidvorbereiten">hier</a> klicken.</li>
					<li class="no-wrap">Bei dem ersten Start erstellt Ihr ein Konto mit einem selbst gewählten&nbsp;<code>Nicknamen</code>. Bitte keine Leerzeichen und/oder Sonderzeichen verwenden und das Passwort gut merken.</li>
				</ul>
				<h3>
					<a id="und-weiter" class="anchor" href="#und-weiter" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span>
					</a>Wie geht's nun weiter?
				</h3>
				<ul>
					<li>Im Pix-Art Messenger findet Ihr bisher nur mich in Eurer Kontaktliste, neue Kontakte werden mit dem <i class="material-icons">contacts</i> Symbol oben rechts hinzugefügt. Dazu braucht ihr die Adresse (JID) eures Kontaktes z.B. <code>nickname@domain.de</code>, die ihr in den Dialog eingebt, der bei einem Klick auf <i class="material-icons">person_add</i> erscheint. Die Adressen sehen aus wie eMail-Adressen, aber es sind keine.</li>
					<li>Mit Gruppenchats (Konferenzen) verhält es sich ähnlich. Vorhandene Gruppen werden mit dem <i class="material-icons">contacts</i> Symbol oben rechts hinzugefügt. Ihr braucht dazu die Adresse (JID) der Gruppe z.B. <code>gruppe@conference.domain.de</code>.</li>
					<li>Wollt Ihr z.B. unserer Support-Gruppe beitreten klickt Ihr oben rechts auf das <i class="material-icons">contacts</i> Symbol und wählt dort Konferenzen aus. Dort dann auf das Symbol <i class="material-icons">group_add</i>. Nun öffnet sich ein Dialog, in dem Ihr die Konferenz-Adresse eingeben müsst, dort gebt Ihr <a href="xmpp:support@room.pix-art.de?join"><code>support@room.pix-art.de</code></a> ein und klickt auf beitreten oder ihr klickt vom Android Gerät aus auf die Gruppenadresse hier.</li>
				</ul>
				<br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="rights" class="anchor" href="#rights" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Was wir von dir brauchen
				</h2>
				Der Pix-Art Messenger benötigt folgende Berechtigungen
				<ul>
					<li><b>Audio aufnehmen</b> - um Sprachnachrichten aufzunehmen und zu verschicken</li>
					<li><b>GPS Standort</b> - um deinen Standort zu teilen</li>
					<li><b>Kontaktdaten lesen; Ihre Kontaktkarten lesen</b> - um die XMPP-Adresse auszulesen und dann das Kontaktbild im Messenger anzuzeigen (ein Austausch deines Adressbuches mit dem Server findet nicht statt)</li>
					<li><b>SD-Karteninhalt ändern, löschen, lesen</b> - für den Versand/Empfang von Dateien erforderlich</li>
					<li><b>Google-Servicekonfiguration lesen</b> - ist für den Betrieb der Google-Karte (Standortanzeige/Standortversand) erfoderlich</li>
					<li><b>Netzwerkstatus anzeigen; vollständiger Internetzugriff</b> - für die Verbinungsherstellung zwingend erforderlich</li>
					<li><b>NFC-Steuerung</b> - damit lassen sich Kontakte gegenseitig austauschen</li>
					<li><b>Beim Start ausführen</b> - damit wird Pix-Art Messenger nach einem Start des Gerätes automatisch gestartet</li>
					<li><b>Ruhezustand deaktivieren</b> - um wichtige Funktionen auszuführen</li>
					<li><b>Vibrationsfunktion steuern</b> - für den Vibrationsalarm</li>
				</ul>
				<br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="hilfe-und-unterstützung" class="anchor" href="#hilfe-und-unterst%C3%BCtzung" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Hilfe und Unterstützung
				</h2>
				Du brauchst Hilfe und kommst einfach nicht weiter? Dann schau dir unsere <a href="/faq">Hilfeseiten</a> an. Solltest du dort nicht fündig werden gibt es
				Hilfestellungen in unserer Support-Gruppe <a href="xmpp:support@room.pix-art.de?join"><code>support@room.pix-art.de</code></a>.
				<h2>
					<a id="issues" class="anchor" href="#issues" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Du hast einen Fehler gefunden
				</h2>
				Du hast einen Fehler in Pix-Art Messenger gefunden? Dann schreibe uns den Fehler in den <a href="https://github.com/kriztan/Pix-Art-Messenger/issues" target="_blank">Issue-Tracker</a>.
				<br><br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="privacypolicy" class="privacypolicy" href="#rights" aria-hidden="true"><span aria- hidden="true" class="octicon octicon-link"></span></a>Was wir von dir speichern und was nicht
				</h2>
				Fett geschriebene Zeilen sind für den Betrieb erforderlich.
				<h3>Profildaten</h3>
				<ul>
					<li><b>Deinen Benutzernamen und einen Hashwert deines Passwortes</b></li>
					<li>Weitere Daten, wie eMail-Adressen, Vor- und Zunamen, Web-Adressen, aber nur dann, wenn du diese selbst eingibst</li>
				</ul>
				<h3>Nachrichten</h3>
				<ul>
					<li><b>Offline-Nachrichten, damit du sie erhältst, wenn du das nächste mal online gehst. Die Nachrichten werden gelöscht sobald du dich eingeloggt hast.</b></li>
					<li>Das Nachrichtenarchiv (MAM) ist standardmäßig aktiviert, damit du Nachrichten auch von anderen Geräten oder zu einem späteren Zeitpunkt empfangen kannst (z.B. beim Wechsel eines Handys).
						Für OMEMO mit mehreren Geräten ist die Archivfunktion ebenfalls erfoderlich. Du kannst die Archivierungseinstellungen in deinem Profil im Messenger konfigurieren. Das Nachrichtenarchiv löscht
					automatisch Nachrichten, die älter als 30 Tage sind.</li>
				</ul>
				<h3>Dateien</h3>
				<ul>
					<li><b>sämtliche Bilder/Dateien, die du über den Messenger verschickst werden für den späteren Empfang 30 Tage lang gespeichert.</b></li>
				</ul>
				<h3>Sonstige Daten</h3>
				<ul>
					<li><b>Eine Liste deiner Kontakte und Gruppenzugehörigkeit (Roster, Buddylist). Du entscheidest im Messenger, wer auf dieser Liste steht und wer gelöscht wird.</b></li>
					<li><b>Profilbilder, öffentliche OMEMO Schlüssel</b></li>
					<li><b>Wann du dich das letzte Mal ein- oder ausgeloggt hast. Damit werden inaktive Profile erkannt und bei einer 180-tägigen Inaktivität ohne Vorwarnung dauerhaft gelöscht.</b></li>
				</ul>
				<h3>Was wir nicht speichern</h3>
				<ul>
					<li>Deine IP Adresse</li>
				</ul>
				<br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="Nutzungsbedingungen" class="anchor" href="#nutzungsbedingung" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Nutzungsbedingungen
				</h2>
				Bei Fehlern und/oder per Gesetz, Gerichtsbeschluss oder vergleichbaren Anordnungen mit Gesetzescharakter, für ungültig erklärte Passagen der folgenden Nutzungsbedigungen behalten bis auf 
				Diese alle anderen Passagen ihre Gültigkeit.
				<h3>Nutzung der Pix-Art Messenger - App (Android-App)</h3>
				<ul>
					<li>mit dem Download unserer App stimmst du diesen Nutzungsbedingungen zu</li>
					<li>die App ist kostenfrei, darf kopiert, verändert und an Dritte unentgeltlich verteilt werden (siehe auch Punkt <a href="#Lizenz">Lizenz</a>)</li>
					<li>die Nutzung der App geschieht auf eigene Verantwortung, wir prüfen den Quellcode nach bestem Wissen und Gewissen auf Fehler und schadhaften Code, dennoch können Fehler nicht 
						100%ig ausgeschlossen werden, für eventuell auftretende Schäden und/oder Datenverlust in jeglicher Form, die auf die App zurückzuführen sind, haften wir nicht</li>
						<li>soweit ein Haftungsausschluss nicht in Betracht kommt, haften wir lediglich für grobe Fahrlässigkeit und Vorsatz</li>
				</ul>
				<h3>Nutzung des Pix-Art Messenger - Dienstes (XMPP-Server-Dienste)</h3>
				<ul>
					<li>mit dem Erstellen eines Accounts bzw. Profils auf unserem Server stimmst du diesen Nutzungsbedingungen zu</li>
					<li>die angebotenen Server-Dienste sind kostenfrei; der Nutzer hat keinerlei Vergütungen (Honorare, Lizenzgebühren, Aufwendungsentschädigungen oder Ähnliches) an uns zu leisten</li>
					<li>die Nutzung der Server-Dienste geschehen auf eigene Verantwortung, wir prüfen die Serverkonfiguration nach bestem Wissen und Gewissen auf Fehler und Sicherheitslücken, dennoch können Diese nicht 
						100%ig ausgeschlossen werden, für eventuell auftretende Schäden und/oder Datenverlust in jeglicher Form, die auf die Nutzung unserer Server-Dienste zurückzuführen sind, haften wir nicht</li>
					<li>der Server wird privatfinanziert, der Nutzer hat grundsätzlich kein Recht oder Anspruch auf ein dauerhaftes Benutzerprofil auf unserem Server</li>
					<li>inaktive Benutzerprofile werden nach 180 Tagen Inaktivität automatisch ohne Vorwarnung gelöscht, damit werden auch von dir hochgeladenen, dem Benutzerprofil zuordenbare Daten 
						vollständig oder teilweise gelöscht; einen Anspruch auf vollständige Löschung der zum Benutzerprofil zugehörigen Daten nach Löschung des Profils besteht nicht</li>
					<li>der Nutzer hat das Recht sein Benutzerkonto nach Kontaktaufnahme durch uns löschen zu lassen; einen Anspruch auf vollständige Löschung der zum Benutzerprofil zugehörigen Daten nach Löschung 
						des Profils besteht nicht</li>
					<li>der Nutzer hat das Recht sämtliche von ihm gespeicherten Daten nach Kontaktaufnahme mit uns einzusehen und sich zusenden zu lassen, sofern der Aufwand für den Versand bzw. das Zusammenstellen
						der Daten zumutbar ist</li>
					<li>wir behalten uns jederzeit das Recht vor, den Server-Dienst ganz, teilweise oder zeitweilig ohne Vorwarnung abzuschalten und/oder alle oder einzelne Benutzerprofile ohne Vorwarnung zu löschen</li>
					<li>wir behalten uns jederzeit das Recht vor, die Server-Konfiguration und die damit angebotenen Funktionen ganz oder teilweise ohne Vorwarnung zu verändern; einen Anspruch auf bestimmte Funktionen, 
						Dienste oder Leistungen hat der Nutzer nicht</li>
					<li>hochgeladene Daten und/oder Informationen werden von uns nicht an Dritte weitergegeben solange dies nicht gerichtlich gefordert wird</li>
					<li>mit dem Hochladen von Daten, die über den Messenger ausgetauscht werden, räumst du uns ein uneingeschränktes Nutzungsrecht ein, nach 30 Tagen werden die Dateien im Regelfall automatisch 
						ohne Vorwarnung gelöscht</li>
					<li>der Nutzer hat keinen Anspruch auf eine Speicherung seiner hochgeladenen Daten, insbesondere dann nicht, wenn Rechtsverletzungen und/oder gerichtliche Beschlüsse die Bereitstellung
					  ausschließen und/oder verbieten</li>
					<li>der Nutzer haftet für seine hier hochgeladenen Daten selbst, wir schließen eine Haftung ausdrücklich aus</li>
					<li>die hochgeladenen Daten müssen frei von Rechten Dritter, insbesondere Urheber-, Marken- oder Persönlichekeitsrechten sein, dürfen keine Verfassungswidrigen Inhalte aufweisen oder sonstige Straftaten
						verherrlichen, darstellen und/oder zu Straftaten aufrufen</li>
					<li>soweit ein Haftungsausschluss nicht in Betracht kommt, haften wir lediglich für grobe Fahrlässigkeit und Vorsatz</li>
				</ul>
				<br><totop><a href="#top"><i class="material-icons">arrow_drop_up</i>nach oben</a></totop><hr>
				<h2>
					<a id="entwickler" class="anchor" href="#entwickler" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Entwickler
				</h2>
				<h3>
					<a id="entwickler-von-original-conversations" class="anchor" href="#entwickler-von-original-conversations" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Entwickler von original Conversations
				</h3>
				<ul>
					<li>
						<a href="https://github.com/inputmice" target="_blank">Daniel Gultsch</a>
					</li>
				</ul>
				<h3>
					<a id="entwickler-von-pix-art-messenger" class="anchor" href="#entwickler-
						von-pix-art-messenger" aria-hidden="true"><span aria-hidden="true"
						class="octicon octicon-link"></span></a>Entwickler von Pix-Art Messenger
					</h3>
					<ul>
						<li><a href="https://github.com/kriztan" target="_blank">Christian Schneppe</a></li>
					</ul>
					<h2>
						<a id="Lizenz" class="anchor" href="#lizenz" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Lizenz-Informationen
					</h2>
					<ul>
						<li>Pix-Art Messenger ist Open Source und unter GPLv3 lizensiert. Der Quellcode ist nicht nur öffentlich einsehbar, sondern kann auch nach eigenen Wünschen modifiziert werden.</li>
						<li><a href="https://de.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">Weitere Informationen über GPL</a></li>
					</ul>
				</section>
				<?php include(BASE_PATH.'/lib/sidebar.php'); ?>
			</div>
		</div>
	</body>
	<?php include(BASE_PATH.'/lib/conversejs.php'); ?>
</html>