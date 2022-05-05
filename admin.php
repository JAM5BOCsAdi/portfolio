<?php
    // Initialize the session
    session_start();

    // Include config file
    require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles.css" />
  <title>Admin</title>
</head>
<body>
<canvas id="canvas" style="display: none"></canvas>
<div id="score" class="">
    <h2>Felkeresések</h2>
    <h3>Sorrend: 
        Legújabb felkereséstől a legrégebbiig
    </h3>
        <table>
            <tr>
                <td>Sorrend</td>
                <td>Név</td>
                <td>E-mail</td>
                <td>Tárgy</td>
                <td>Megjegyzés</td>
                <td>Dátum [ Új -> Régi ]</td>
            </tr>
            <?php
                /* Mysqli query to fetch rows 
                in descending order of scores */
                $result = mysqli_query($link, "SELECT name, email, subject, textarea, submited_at  FROM connection_portfolio ORDER BY submited_at DESC");

                /* First rank will be 1 and 
                    second be 2 and so on */
                $ranking = 1;
                
                /* Fetch Rows from the SQL query */
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                        <tr>
                            <td>{$ranking}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['subject']}</td>
                            <td>{$row['textarea']}</td>
                            <td>{$row['submited_at']}</td>
                        </tr>  
                        ";
                        $ranking++;
                    }
                }
                
                /*$phpWinner = "<script>let winner = (parseInt(playerScoreElem.textContent) === 5) ? 'Player' : 'Computer'</script>";
                $phpWinner = $_COOKIE['winner'];
                $phpWinner = "<script>document.write(winner);</script>";
                $phpWinner = $_COOKIE['winner'];
                echo $phpWinner;
                $phpWinner = $_GET['winner'];*/

            ?>
    </table>
    <div id="buttons">
        <a href="logout.php">Back</a>
    </div>   
</div>
</body>
</html>