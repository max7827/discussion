<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>English to Hindi Typing Online - English2Hindi Converter </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>


    <!-- must include main js file -->
    <script type="text/javascript" src="http://typing.iamrohit.in/jsapi.js"></script>

    <!-- -----------------------------------------------Load the Google Transliterate API -->
    <script type="text/javascript">
        google.load("elements", "1", {
            packages: "transliteration"
        });

        function onLoad() {
            var options = {
                sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
                shortcutKey: 'ctrl+g',
                transliterationEnabled: true
            };

            // Create an instance on TransliterationControl with the required
            // options.
            var control =
                new google.elements.transliteration.TransliterationControl(options);

            // Enable transliteration in the textbox with id
            // 'transliterateTextarea'.
            control.makeTransliteratable(['tp']);
        }
        google.setOnLoadCallback(onLoad);
    </script>
    <!-- -----------------------------------------------------google script ends here -->


    <!-- ----------------preloader starts here-------------- -->
    <script type="text/javascript">
        $(window).load(function() {
            $(".preloader").fadeOut("slow");
        })
    </script>
    <style>
        .preloader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('http://lab.iamrohit.in/loader/loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
            opacity: .8;
        }
    </style>

    <!-- ------------------------------- for preloader -->
</head>

<body>
    <div class="preloader"></div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9">



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="text-align:center"> <b>English to Hindi Typing Online</b></h1>
                    </div>
                    <div class="panel-body">
                        <textarea id="tp" name="tp" class="form-control" rows="8" placeholder='Start Typing...'></textarea>
                        <b style="color:red">Note: </b>Use <b>Ctrl+g</b> to toggle between English and Hindi


                    </div>
                </div>

            </div>

        </div>

</body>

</html>