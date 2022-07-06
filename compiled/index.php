<!doctype html>
<html lang="de">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<link rel="stylesheet" href="./css/main.css">
	</head>
	<body>
		        <div id="content">
			<div id="logo"><img src="./res/logo.png" /></div>
			<strong>Willkommen im Feedback-Tool von Fridays For Future Rhein-Sieg.</strong><br />
            Du kannst den Delis von Rhein-Sieg hiermit Feedback mitteilen, egal, ob negativ oder positiv.<br />
            Wichtig dabei: Jedes Feedback muss konstruktiv sein. Das bedeutet:<br />
            <ul>
                <li>Es werden keine Beleidigungen oder sonstige respektlose Äußerungen benutzt. Feedback mit Beleidigungen wird konsequent aussortiert, ohne sich damit zu beschäftigen.</li>
                <li>Es sollte, wenn möglich, eine mögliche Lösungsoption mitgegeben werden. Z.B.: "Die Plena sind viel zu häufig. Mein Vorschlag ist es, sie nur zweiwöchentlich zu veranstalten."</li>
            </ul>
			<strong>Wichtig: Der Name ist optional. Du kannst ihn angeben, musst aber nicht. Das Feedback wird dennoch gespeichert. :)</strong>
			<div id="feedback-form">
				<form action="index.php" method="POST">
					<input type="text" name="name" id="name" placeholder="Name (optional)" multiple /><br />
					<textarea name="feedback" id="feedback" placeholder="Dein Feedback"></textarea>
					<input type="submit" value="Absenden" />
				</form>
			</div>
		</div>
	    </body>
</html>