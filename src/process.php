<?php
    // libxml_disable_entity_loader(false);

    $xmlfile = file_get_contents('php://input');

    if (!empty($xmlfile)) {
        $dom = new DOMDocument();

        try {
            $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
            $credentials = simplexml_import_dom($dom);
            $item1 = $credentials->item1;
            $item2 = $credentials->item2;
            echo "<pre>As you wish: $item2</pre>";
        } catch (Exception $e) {
            echo "Error processing XML: " . $e->getMessage();
        }
    } elseif (empty($xmlfile)) {
        // $cond = "";
    } else {
        echo "Error: Empty XML file.";
    }
    libxml_clear_errors();
?>