function sendXMLRequest() {
    var form = document.getElementById("xmlForm");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            document.getElementById("responseMessage").innerHTML = xhr.responseText;
        } else {
                document.getElementById("responseMessage").innerHTML = "Error: " + xhr.status + " " + xhr.statusText;
        }
    };

    var xmlPayload = payload(formData);
    xhr.send(xmlPayload);
}

function payload(data) {
    var xml = '<?xml version="1.0" encoding="UTF-8"?>';
    xml += '<root>';

    for(var pair of data.entries()) {
        var key = pair[0];
        var value = pair[1];

        xml += '<' + key + '>' + value + '</' + key + '>';
    }

    xml += '</root>';
    return xml;
}
