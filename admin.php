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
  <style>
      body{
        font: 14px sans-serif;
        color: #fff;
        background-color: #191d2b;
        caret-color: rgba(0, 0, 0, 0);
      }
      .visit{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 40px 40px;
      }
      h2{
          font-size: 35px;
      }
      table, td {
        
        padding: 10px 10px;
      }
      table {
        border-spacing: 40px 0px;
      }
      td:first-child {
          text-align: center;
      }
      td:last-child {
        padding: 10px 10px;
        margin: 10px 100px; 
      }
      .tr1 > td{
        font-size: 15px;
        font-weight: 800;
        text-decoration: underline;
      }
      tr:not(:first-child):hover{
        background-color: #63a1b4;
        cursor: pointer;
      }
      .back{
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .admin-back{
        background: #34495e;
        padding: 10px 15px;
        color: #fff;
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 18px;
        border-radius: 5px;
        box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.75);
        margin-top: 15px;
        text-decoration: none;
        transition: 0.4s;
      }
      .admin-back:hover {
          background: #fff;
          color: #34495e;
        }
  </style>
</head>
<body>
<div class="visit">
    <h2>Felkeresések</h2>
        <table>
            <tr class="tr1">
                <td>Sorrend</td>
                <td>Dátum [ Új -> Régi ]</td>
                <td>Név</td>
                <td>E-mail</td>
                <td>Tárgy</td>
                <td>Megjegyzés</td>
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
                            <td>{$row['submited_at']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['subject']}</td>
                            <td><textarea>{$row['textarea']}</textarea></td>
                            
                        </tr>  
                        ";
                        $ranking++;
                    }
                }
            ?>
    </table>
    <div class="back">
        <a href="logout.php" class="admin-back"
        >Vissza</a>
    </div> 
</div>
</body>
</html>