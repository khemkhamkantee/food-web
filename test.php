<!DOCTYPE html>
<html>

<head>
    <style>
        body,
        html,
        .main {
            height: 100%;
        }

        section {
            min-height: 100%;
        }
    </style>
</head>

<body>

    <a href="#promotion">Click Me to Smooth Scroll to Section 2 Below</a><br>
    <a href="#section3">Click Me to Smooth Scroll to Section 2 Below</a>

    <div class="main">
        <section>sdasdasdads</section>
    </div>

    <div class="main" id="promotion">
        <section style="background-color:blue"></section>
    </div>
    <div class="main" id="section3">
        <section style="background-color:red"></section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

</body>

</html>