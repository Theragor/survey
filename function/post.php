<?php
    date_default_timezone_set("Europe/Berlin");

    if( isset( $_POST['Submit'] ) ) {
    try {
        $surveyXML = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?> <survey></survey>');
        
        $submitTime = $surveyXML->addChild('timestamp', date('d.M.Y H:i', time() ) );
        $submitName = $surveyXML->addChild('name', $_POST['name'] );
        
        $tutor = $surveyXML->addChild('tutor');
            $known   = $tutor->addChild('known',   $_POST['knowntutor'] );
            $support = $tutor->addChild('support', $_POST['comtutor'] );
            $speach  = $tutor->addChild('speach',  $_POST['speachtutor'] );
        
        $introduction = $surveyXML->addChild('introduction');
        
        $general = $surveyXML->addChild('general');
            $tutProgramm = $general->addChild('tutProgramm', $_POST['programm'] );
            $hate        = $general->addChild('hate', $_POST['bad_missing'] );
            $like        = $general->addChild('like', $_POST['good'] );
        
        Header('Content-type: text/xml');
        
        //$handle = fopen ( "filename.xml", "w" ) or exit('<script type="text/javascript">alert("Error: Survey could not be stored!");</script>');
        //fwrite ( $handle, $newsXML->asXML() );
        echo $newsXML->asXML();
        //echo '<script type="text/javascript" style="font-size: 1em;">alert("Thank you for your assistance - Your responses is stored.");</script>';
        } 
        catch (Exception $e) { echo "bad xml"; } 
    }
?>
