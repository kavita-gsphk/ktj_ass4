<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <title>Result</title>
</head>

<body>



    <?php

  $db = mysqli_connect('fdb28.awardspace.net', '3508469_practice', 'qwe123qwe', '3508469_practice') or die("dont connect");

    $q = "SELECT * FROM question";
    $query = mysqli_query($db, $q);
    $result = 0;
    $i = 0;
    if (isset($_POST['submit'])) {
        if (!empty($_POST['check'])) {
            $count = count($_POST['check']);
            $selecte = $_POST['check'];


            while ($row = mysqli_fetch_array($query)) {
                $i++;
                if (isset($selecte[$i])) {

                    if ($selecte[$i] == $row[2]) {
                        $result++;
                    }
                }
            }
    ?>
            <div class="form_2 form_3">
                </br>
                </br>
                </br>
                <label>
                    <h3>
                        Your Marks:-
                        <?php
                        print $result;
                        ?>
                        Out of 20
                    </h3>
                </label>
                </br>
                </br>
                </br>

            </div>

    <?php




        }
    }
    ?>
</body>

</html>
