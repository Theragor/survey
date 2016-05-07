<?php
    date_default_timezone_set("Europe/Berlin");
	$time = time();

    if( isset( $_POST['submit'] ) ) { 

    try {
     	$filename = "../xml/".date('YmdHi', $time ).".xml";
		
        $surveyXML = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?> <survey></survey>');
        
        $submitTime = $surveyXML->addChild('timestamp', date('d.M.Y H:i', $time ) );
        $submitName = $surveyXML->addChild('name', $_POST['name'] );
        
        $tutor = $surveyXML->addChild('tutor');
            $known   = $tutor->addChild('known',   $_POST['knowntutor'] );
            $support = $tutor->addChild('support', $_POST['comtutor'] );
            $speach  = $tutor->addChild('speach',  $_POST['speachtutor'] );
        
        $introduction = $surveyXML->addChild('introduction');
        
        $general = $surveyXML->addChild('general');
            $tutProgramm = $general->addChild('tutProgramm', $_POST['programm'] );
			$hate 		 = $general->addChild('hate',  htmlspecialchars($_POST['bad_missing'], ENT_QUOTES, 'UTF-8') );
			$like 		 = $general->addChild('like',  htmlspecialchars($_POST['good'], ENT_QUOTES, 'UTF-8') );

        //Header('Content-type: text/xml'); // nur für Browserausgabe relevant 
		//echo $surveyXML->asXML();

		if( !$handle = fopen ( $filename, "w" ) ) 
			echo '<script type="text/javascript">alert("Error: Your responses can not be stored!<br> Please try again!");window.location = "../umfrage.php";</script>';
        else 
		{
			$dom = dom_import_simplexml($surveyXML)->ownerDocument;
			$dom->formatOutput = true;
			fwrite ( $handle, $dom->saveXML() );
        	echo '<script type="text/javascript">window.location = "../thanks.php";</script>';
        
        } 
      } catch (Exception $e) { echo "bad xml"; } 
    }
?>
