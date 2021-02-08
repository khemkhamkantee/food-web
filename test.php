<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Autocomplete - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>

<body>

    <div class="ui-widget">
        <label for="tags">Tags: </label>
        <input id="tags">
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            var availableTags = [
                "ข้าวกระเพราหมู",
                "กระเพราหมู",
                "ข้าวกระเพราหมู ไก่",
                "ข้าวกระเพราหมู เนื้อ",
                "หมูกระเทียม",
                "ก๋วยเตี๋ยว",
                "ไอติม",
                "หดักอๆไพส)ฉ็ญ",
                "11111",
                "121212",
                "232323",
                "123456789",
                "4532",
                "123",
                "212",
                "147",
                "191",
                "132",
                "1756",
                "127888",
                "19999",
                "1997"
            ];
            $("#tags").autocomplete({
                source: availableTags
            });
        });
    </script>
</body>

</html>