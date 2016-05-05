<!-- https://github.com/Theragor/survey.git -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>faranto exchange survey</title>
<link href="stylesheed.css" type="text/css" />
<style>
    body {
        font-family: Tahoma, Geneva, sans-serif;
        background: rgba(235, 235, 255, 1);
        font-size: 1em;
    }
</style>
</head>

<body>
<div id="wrapper">
    <header>
        <img src="img/Logo_ESN_Faranto.svg" /><!-- faranto Logo -->
        <h1>faranto survey</h1>
    </header>
    
    <section>
        <!-- Einleitungstext -->
        <span>TEXT</span>

        <!-- Umfrageabschnitt -->
        <form action="umfrage.php" method="post">
        <!-- alte nicht umgesetzte Fragen -->
            <!-- Wenn du Noten verteilen könntest, welche würde dein Tutor bekommen? -->

        <p>
            <label>
                Your first- and surname: <br />
                <input name="name" type="text" formnovalidate placeholder="optional" />
            </label>
        </p>

        <p><!-- Erster Abschnitt: Der Tutor -->
            <hr />
            <h3>Pt1: The Tutor</h3>

            <h4>Do you know your faranto Tutor personally?</h4>
            <!-- Kennst du deinen faranto Tutor persönlich? -->
            <label><input name="knowntutor" type="radio" class="regular-radio big-radio" value="ja" required /> yes</label><!-- Pflichtauswahl -->
            <label><input name="knowntutor" type="radio" class="regular-radio big-radio" value="nein" required /> no </label>

            <h4>How good was/is the support of your Tutor?</h4>
            <!-- Wie gut war die Unterstützung deines Tutors -->
            <label><input name="comtutor" type="radio" class="regular-radio big-radio" value="1" /> very good </label>
            <label><input name="comtutor" type="radio" class="regular-radio big-radio" value="2" /> good </label>
            <label><input name="comtutor" type="radio" class="regular-radio big-radio" value="3" /> ok </label>
            <label><input name="comtutor" type="radio" class="regular-radio big-radio" value="4" /> bad </label>
            <label><input name="comtutor" type="radio" class="regular-radio big-radio" value="5" /> very bad </label>

            <h4>How good was/is the language of your Tutor?</h4>
            <!-- Wie gut waren die Komunikationsskills deinens Tutors -->
            <label><input name="speachtutor" type="radio" class="regular-radio big-radio" value="1" /> very good </label>
            <label><input name="speachtutor" type="radio" class="regular-radio big-radio" value="2" /> good </label>
            <label><input name="speachtutor" type="radio" class="regular-radio big-radio" value="3" /> ok </label>
            <label><input name="speachtutor" type="radio" class="regular-radio big-radio" value="4" /> bad </label>
            <label><input name="speachtutor" type="radio" class="regular-radio big-radio" value="5" /> very bad </label>
        </p>

        <p><!-- Zweiter Abschnitt: Die Erst-Semester-Woche -->
            <hr />
            <h3>Pt2: The First-Semester-Week</h3>
        </p>

        <p><!-- Dritter Abschnitt: Allgemein -->
            <hr />
            <h3>Pt3: Generel</h3>
            
            <h4>How good was/is the Tutorprogramm.</h4>
            <!-- Wie fandest Du das Tutorenprogramm im gesamten? -->
            <label><input name="programm" type="radio" class="regular-radio big-radio" value="1" /> very good </label>
            <label><input name="programm" type="radio" class="regular-radio big-radio" value="2" /> good </label>
            <label><input name="programm" type="radio" class="regular-radio big-radio" value="3" /> ok </label>
            <label><input name="programm" type="radio" class="regular-radio big-radio" value="4" /> bad </label>
            <label><input name="programm" type="radio" class="regular-radio big-radio" value="5" /> very bad </label>

            <h4>What was missing or what should we improve?</h4>
            <textarea name="bad_missing" type="text" placeholder="optional"></textarea>

            <h4>What did you really liked?</h4>
            <textarea name="good" type="text" placeholder="optional"></textarea>
        </p>

        <input type="submit" name="Submit">
    </form>
</section>
</div>

<?php include 'function/post.php'; ?>

</body>

</html>
