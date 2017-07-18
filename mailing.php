<?php
	// Meldung ausgeben
	echo "<script type='text/javascript'>alert('Vielen Dank für Ihre Nachricht. Wir werden uns umgehend mit Ihnen in Verbindung setzen. Sie werden nun weitergeleitet.');</script>";
	// zurück zur Startseite
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

	// Variablen aus Form
	$firma = $_POST["firma"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$telefon = $_POST["telefon"];
	$anschrift = $_POST["anschrift"];
	$betreff = $_POST["betreff"];
	$nachricht = nl2br($_POST["nachricht"]);

	// Mail an mich
	$sender            = "MAIL-AUTOMAT";
	$sendermail        = "info@kettelgerdes.de";
	$subject         = "Anfrage über Webseite";
	$header = 'Content-type: text/html; charset=utf-8' . "\r\n";
	$header .= "From: $sender <$sendermail>\r\n";

	$mail = "info@kettelgerdes.de";



	$text = "
	<p>
	Hallo,
	</p>
	<p>
	soeben ist eine Anfrage über kettelgerdes.de eingegangen:
	</p>
	<hr/>
	<p>
	Firma: $firma
	</p>
	<p>
	Name: $name
	</p>
	<p>
	E-Mail: $email
	</p>
	<p>
	Telefon: $telefon
	</p>
	<p>
	Anschrift: $anschrift
	</p>
	<p>
	Betreff: $betreff
	</p>
	<p>
	$nachricht
	</p>
	<hr/>
	<p>
	Beste Grüße
	</p>
	<p>
	Dein Mail-Automat
	</p>
	";

	mail($mail, $subject, $text, $header);


	// Mail an den Interessenten
	$sender            = "Kettelgerdes Marmor GmbH & Co KG";
	$sendermail        = "info@kettelgerdes.de";
	$subject         = "Ihre Anfrage";
	$header = 'Content-type: text/html; charset=utf-8' . "\r\n";
	$header .= "From: $sender <$sendermail>\r\n";

	$text = "
	<p>
	Hallo $name,
	</p>
	<p>
	vielen Dank für Ihre Nachricht.
	</p>
	<p>
	Wir haben folgende Daten erhalten und werden uns umgehend mit Ihnen in Verbindung setzen:
	</p>
		<hr/>
		<p>
		Firma: $firma
		</p>
		<p>
		Name: $name
		</p>
		<p>
		E-Mail: $email
		</p>
		<p>
		Telefon: $telefon
		</p>
		<p>
		Anschrift: $anschrift
		</p>
		<p>
		Betreff: $betreff
		</p>
		<p>
		$nachricht
		</p>
	<hr/>
	<p>
	Beste Grüße
	</p>
	<p>
	Ihr Team von Kettelgerdes Marmor
		</p>
	";

	mail($email, $subject, $text, $header);

?>
