
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Sentiment Analyser for Hotel customer feedback</title>
    <link rel="stylesheet" type="text/css" href="./Sentiment Analyser_files/Styles.css">
    <script type="text/javascript" src="./Sentiment Analyser_files/jquery-1.5.2.min.js"></script>

</head>
<body>

    <div class="container">
<div class="analyse">
    
    <form method="post" action="./Sentiment Analyser_files/Sentiment Analyser.htm">

        <input type="text" name="text">
        <input type="submit" class="large awesome" value="Analyse">

    </form>

</div>

    <div class="results summary">


        Overall sentiment is <span class="neutral bold">neutral</span> 
        with probability of <span class="neutral bold">0.5217767</span>

    </div>

    <div class="results">

        <table border="0" cellspacing="10">
        
            <tbody><tr>
                <th>Word</th>
                <th>Sentiment</th>
                <th>Positive Hits</th>
                <th>Positive Total</th>
                <th>Negative Hits</th>
                <th>Negative Total</th>
            </tr>

            <tr>
            
                <td></td>
                <td><img src="./Sentiment Analyser_files/Neutral.png" }"=""></td>
                <td class="positive">58,943</td>
                <td class="positive">675,306</td>
                <td class="negative">36,677</td>
                <td class="negative">458,476</td>

            </tr>

        </tbody></table>

    </div>

    <script type="text/javascript">

        $(function () {
            $("input[type='text']").val("");
            $("input[type='text']").focus();
        });
    
    </script>

    </div>


</body></html>