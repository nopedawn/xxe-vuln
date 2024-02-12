<?php
    //libxml_disable_entity_loader(true);

    $xmlfile = file_get_contents('php://input');

    if (!empty($xmlfile)) {
        $dom = new DOMDocument();

        try {
            $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
            $credentials = simplexml_import_dom($dom);
            $item1 = $credentials->item1;
            $item2 = $credentials->item2;
            echo "<pre>As you wish: $item2</pre>";
            echo '<script>document.getElementById("responseMessage").innerHTML = "As you wish: ' . $item2 . '";</script>';
            // exit; // Stop further execution to avoid HTML output interference
        } catch (Exception $e) {
            echo "<pre>Error processing XML: " . $e->getMessage() . "</pre>";
            echo '<script>document.getElementById("responseMessage").innerHTML = "Error processing XML: ' . $e->getMessage() . '";</script>';
        }
    } else {
        echo "<pre>Error: Empty XML file.</pre>";
        echo '<script>document.getElementById("responseMessage").innerHTML = "Error: Empty XML file.";</script>';
    }
    libxml_clear_errors();
?>
