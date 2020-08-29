<html>

<head>
    <title>How to Convert Hindi Text into English Using JavaScript?</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <link href="http://www.google.com/uds/modules/elements/transliteration/api.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>How to Convert Hindi Text into English Using JavaScript?</h1><br>
    <h2>Type in Hindi (Press Ctrl+g to toggle between English and Hindi)</h2>
    <div id="Wrapper">
        <h2> Textarea </h2>
        <textarea id="transliterateTextarea" style="width:650px;height:300px"></textarea>
    </div>
</body>
<script type="text/javascript">
    // Load the Google Transliteration API
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage: google.elements.transliteration.LanguageCode.HINDI,
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        var control =
            new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(['transliterateTextarea']);
    }
    google.setOnLoadCallback(onLoad);
</script>

</html>