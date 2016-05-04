<!-- https://github.com/Theragor/survey.git -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>faranto exchange survey</title>
<style>
    body {
        font-family: Tahoma, Geneva, sans-serif;
        background: rgba(235, 235, 255, 1);
        font-size: 1em;
    }
    header {
        width: 99%;
    }
    div#wrapper {
        margin: 0 auto;
        padding: 10px;
        max-width: 1000px;
        background: #FFF;
        box-shadow: #099 0px 2px 5px 5px;
    }
    section {
        width: 99%;
    }
    br {
        clear: both;
    }
    textarea {
        display: block;
        width: 98%;
        min-height: 200px;
        margin: 0 auto;
        height: auto;
    }
    input.regular-radio {
        -webkit-appearance: none;        /* löscht die Browserstandarteinstellungen für die Radio-Button */
        background-color: #fafafa;
        border: 1px solid #cacece;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 9px;
        border-radius: 50px;
        display: inline-block;
        position: relative;
    }
    input.regular-radio:checked:after {
        content: ' ';
        width: 12px;
        height: 12px;
        border-radius: 50px;
        position: absolute;
        top: 3px;
        background: #99a1a7;
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-shadow: 0px;
        left: 3px;
        font-size: 32px;
    }
    input.regular-radio:checked {
        background-color: #e9ecee;
        color: #99a1a7;
        border: 1px solid #adb8c0;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 
                    inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05), 
                    inset 15px 10px -12px rgba(255, 255, 255, 0.1), 
                    inset 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    input.regular-radio:active, 
    input.regular-radio:checked:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 
                        inset 0px 1px 3px rgba(0, 0, 0, 0.1);
    }
    input.big-radio {
        padding: 16px;
    }
    input.big-radio:checked:after {
        width: 24px;
        height: 24px;
        left: 4px;
        top: 4px;
    }
    img {
        height: 100%;
        width: 100%;
    }
    header {
        vertical-align: center;
    }
    
    @media screen and (max-width: 980px) {
        input[type=Submit] {
            height: 50px;
            font-size: 2em;
        }
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
                        Your first- and surname:
                        <br>
                        <input name="name" type="text" formnovalidate placeholder="optional" />
                    </label>
                </p>

                <p>
                    <!-- Erster Abschnitt: Der Tutor -->
                    <hr />
                    <h3>Pt1: The Tutor</h3>

                    <h4>Do you know your faranto Tutor personally?</h4>
                    <!-- Kennst du deinen faranto Tutor persönlich? -->
                    <label>
                        <input name="knowntutor" type="radio" class="regular-radio big-radio" value="ja" required /> yes</label>
                    <!-- Pflichtauswahl -->
                    <label>
                        <input name="knowntutor" type="radio" class="regular-radio big-radio" value="nein" required /> no </label>

                    <h4>How good was/is the support of your Tutor?</h4>
                    <!-- Wie gut war die Unterstützung deines Tutors -->
                    <label>
                        <input name="comtutor" type="radio" class="regular-radio big-radio" value="1" /> very good </label>
                    <label>
                        <input name="comtutor" type="radio" class="regular-radio big-radio" value="2" /> good </label>
                    <label>
                        <input name="comtutor" type="radio" class="regular-radio big-radio" value="3" /> ok </label>
                    <label>
                        <input name="comtutor" type="radio" class="regular-radio big-radio" value="4" /> bad </label>
                    <label>
                        <input name="comtutor" type="radio" class="regular-radio big-radio" value="5" /> very bad </label>

                    <h4>How good was/is the language of your Tutor?</h4>
                    <!-- Wie gut waren die Komunikationsskills deinens Tutors -->
                    <label>
                        <input name="speachtutor" type="radio" class="regular-radio big-radio" value="1" /> very good </label>
                    <label>
                        <input name="speachtutor" type="radio" class="regular-radio big-radio" value="2" /> good </label>
                    <label>
                        <input name="speachtutor" type="radio" class="regular-radio big-radio" value="3" /> ok </label>
                    <label>
                        <input name="speachtutor" type="radio" class="regular-radio big-radio" value="4" /> bad </label>
                    <label>
                        <input name="speachtutor" type="radio" class="regular-radio big-radio" value="5" /> very bad </label>
                </p>

                <p>
                    <!-- Zweiter Abschnitt: Die Erst-Semester-Woche -->
                    <hr />
                    <h3>Pt2: The First-Semester-Week</h3>
                </p>

                <p>
                    <!-- Dritter Abschnitt: Allgemein -->
                    <hr />
                    <h3>Pt3: Generel</h3> 150,2-16 81%
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

                <input type="submit" value="Submit">
            </form>
        </section>
    </div>

    <?php include 'post.php'; ?>

</body>

</html>
