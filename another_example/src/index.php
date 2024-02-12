<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Request</title>
</head>
<body>
    <form id="xmlForm">
        <label for="item1">Select Item 1:</label>
        <select id="item1" name="item1" required>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <br>
        <label for="item2">Select Item 2:</label>
        <select id="item2" name="item2" required>
            <option value="optionA">Option A</option>
            <option value="optionB">Option B</option>
            <option value="optionC">Option C</option>
        </select>
        <br>
        <button type="button" onclick="sendXMLRequest()">Submit</button>
    </form>

    <p id="responseMessage"></p>

    <script src="script.js"></script>
</body>
</html>