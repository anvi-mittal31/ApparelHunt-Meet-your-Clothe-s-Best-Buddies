<?php
if(isset($_POST['submit']))
{
$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><details></details>");

    $xml->addChild('ProductID', $_POST['ProductID']);
    $xml->addChild('ProductName', $_POST['ProductName']);  
    $xml->addChild('ProductPrice', $_POST['ProductPrice']); 
    $xml->addChild('Productdescription', $_POST['Productdescription']); 

    $asXML = $xml->asXML();
    $file = fopen("Product.xml","w+");
    fwrite($file,$asXML);
    fclose($file); 
    print_r(error_get_last());

    if(file_exists('./Product.xml'))
    {
        $myXML = file_get_contents('./Product.xml');
        $xml = new SimpleXMLElement($myXML);
        $xmlpretty = $xml->asXML();

        // pretty print the XML in browser
        header('content-type: text/xml');
        echo $xmlpretty;
    }

}
?>