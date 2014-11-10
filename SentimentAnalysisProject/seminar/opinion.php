
<!DOCTYPE html>
    <title>Sentiment Analyser for Hotel customer feedback</title>
    <link rel="stylesheet" type="text/css" href="./Sentiment Analyser_files/Styles.css">
    <script type="text/javascript" src="./Sentiment Analyser_files/jquery-1.5.2.min.js"></script>
<style>

body {
background-image:url("bg.jpg");
background-size: 100%;
}

</style>
</head>
<body>

    <div class="container">
<div class="analyse">
    
    <form method="post" action="back.php">

        <input type="text" name="opinion">
        <input type="submit" class="large awesome" value="Analyse">

    </form>

</div>

    <script type="text/javascript">

        $(function () {
            $("input[type='text']").focus();
        });
    
    </script>

    </div>


</body></html>