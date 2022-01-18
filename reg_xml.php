<?php
if(isset($_POST['submit']))
{
$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><info></info>");

    $xml->addChild('name', $_POST['name']);
    $xml->addChild('password', $_POST['password']);  
    $xml->addChild('cpassword', $_POST['cpassword']); 
    $xml->addChild('birthday', $_POST['birthday']); 
    $xml->addChild('gender', $_POST['gender']); 
    $xml->addChild('country', $_POST['country']); 
    $xml->addChild('phone', $_POST['phone']);  
    $xml->addChild('email', $_POST['email']);  
    $xml->addChild('instructions', $_POST['instructions']);  


    $asXML = $xml->asXML();
    $file = fopen("data.xml","w+");
    fwrite($file,$asXML);
    fclose($file); 
    print_r(error_get_last());

    if(file_exists('./data.xml'))
    {
        $myXML = file_get_contents('./data.xml');
        $xml = new SimpleXMLElement($myXML);
        $xmlpretty = $xml->asXML();

        // pretty print the XML in browser
        header('content-type: text/xml');
        echo $xmlpretty;
    }

}
?>