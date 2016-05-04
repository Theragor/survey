<?php
    date_default_timezone_set("Europe/Berlin");
//echo '<script type="text/javascript" style="font-size: 1em;">alert("Thank you for your assistance - Your responses is stored.");</script>';
    
    if( isset($_POST['headline']) && isset($_POST['content']) ) {
    try {
        //$sxe = @new SimpleXMLElement($xmlstring);
        $newsXML = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?> <news></news>');
        //$newsXML->addAttribute('newsPagePrefix', 'value goes here'); // TODO wenn noch Zeit ist
        
        $newsTime = $newsXML->addChild('timestamp', date('d.M.Y H:i', time() ) );
        
        $newsIntro = $newsXML->addChild('headline', $_POST['headline'] );
        //$newsIntro->addAttribute('type', 'latest'); // Attribut nutzen zum auslesen der letzten posts?
        
        $newsContent = $newsXML->addChild('content', $_POST['content'] );
        
        Header('Content-type: text/xml');
        
        //$handle = fopen ( "filename.xml", "w" ) or exit('<script type="text/javascript">alert("Error: Survey could not be stored!");</script>');
        //fwrite ( $handle, $newsXML->asXML() );
        echo $newsXML->asXML();
        
        } catch (Exception $e) { echo "bad xml"; } 
    }
    else { echo 'error'; }
?>
