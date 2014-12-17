<?php
session_start();
$opinion = $_POST['opinion'];

$s = explode(" ",$opinion);

foreach ($s as $a=>$b) {    
    if( trim($b) ) {
        $connect = mysql_connect("localhost","rohan","lopes") or die("Couldn't connect MySql!");
        mysql_select_db("data") or die("Couldn't find MySql database!");
        $query   = mysql_query("SELECT * FROM review WHERE opinion='$b'");
        $numrows = mysql_num_rows($query);
        
        if ($numrows != 0) {
            $_SESSION['opinion'] = $opinion;
    		
            while ($row = mysql_fetch_assoc($query)) {
        		$id =$row['id'];
        		$opinion1 = $row['opinion'];
        		$points   = $row['points'];		
        		$sentiment = $row['sentiment'];
    		}	
        }
    }
}

?>
<!DOCTYPE html >
<html>
<head>
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

        <div class="results summary">
            Overall sentiment is 
            <span class="neutral bold">
                <?php
        			echo "".$opinion1;
        		?>
            </span> 
            with probability of 
            <span class="neutral bold">
                <?php
        			echo "".$points;
        		?>    
            </span> for Review 
                <?php 
                    echo "=<b><i>".$opinion."</b></i>";
                ?>
        </div>
        <div class="results">
            <table border="0" cellspacing="10">
                <tbody>
                    <tr>
                        <th>Word</th>
                        <th>Sentiment</th>
                        <th>Positive Hits/Negative Hits</th>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                echo "".$opinion1;
                            ?>
                        </td>
                        <td>
                            <?php
                    			echo "<b><font color='red'>".$sentiment;
                    			echo "</b></font>";
                            ?>
                        </td>
                        <td class="positive">
                            <?php
                                echo "".$points;
    			             ?>
                        </td>               
                    </tr>
                </tbody>
            </table>
            <table>
                <br><br><br>
                <tr>
                    <td><img src="pie.php"></td>
                </tr>
            </table>
            
            <?php
                echo "<form name='graph' method='post' action='pie.php'><input type=submit name=Click!> Here to see Opinion Visulization using bar chart.</form>";
                $_SESSION['points']=$points;
            ?>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $("input[type='text']").val("");
            $("input[type='text']").focus();
        });
    </script>
</body>
</html>



