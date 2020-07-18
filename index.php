<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['img'] = 'you must log in';
    header('location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
$use = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <title>Online-test</title>
    <script>
        var XMLHttpRequestObject = false;
        if (window.XMLHttpRequest) {
            XMLHttpRequestObject = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
        }

        function processData(returnedData) {
            if (returnedData.substr(0, 5) == "ERROR") {
                var errordiv = document.getElementById("errordiv");
                errordiv.innerHTML = "ERROR ON DATABASE";
            } else {
                console.log(returnedData);
            }
            return false;
        }

        function add() {
            if (XMLHttpRequestObject) {
                XMLHttpRequestObject.open("POST", "ajax_add.php");
                XMLHttpRequestObject.setRequestHeader(
                    "Content-Type",
                    "application/x-www-form-urlencoded"
                );
                XMLHttpRequestObject.onreadystatechange = function() {
                    if (
                        XMLHttpRequestObject.readyState == 4 &&
                        XMLHttpRequestObject.status == 200
                    ) {
                        var returnedData =
                            XMLHttpRequestObject.responseText;
                        processData(returnedData);
                    }
                };
                let check_1 = document.querySelector('input[name="check[1]"]:checked');
                let check_2 = document.querySelector('input[name="check[2]"]:checked');
                let check_3 = document.querySelector('input[name="check[3]"]:checked');
                let check_4 = document.querySelector('input[name="check[4]"]:checked');
                let check_5 = document.querySelector('input[name="check[5]"]:checked');
                let check_6 = document.querySelector('input[name="check[6]"]:checked');
                let check_7 = document.querySelector('input[name="check[7]"]:checked');
                let check_8 = document.querySelector('input[name="check[8]"]:checked');
                let check_9 = document.querySelector('input[name="check[9]"]:checked');
                let check_10 = document.querySelector('input[name="check[10]"]:checked');
                let check_11 = document.querySelector('input[name="check[11]"]:checked');
                let check_12 = document.querySelector('input[name="check[12]"]:checked');
                let check_13 = document.querySelector('input[name="check[13]"]:checked');
                let check_14 = document.querySelector('input[name="check[14]"]:checked');
                let check_15 = document.querySelector('input[name="check[15]"]:checked');
                let check_16 = document.querySelector('input[name="check[16]"]:checked');
                let check_17 = document.querySelector('input[name="check[17]"]:checked');
                let check_18 = document.querySelector('input[name="check[18]"]:checked');
                let check_19 = document.querySelector('input[name="check[19]"]:checked');
                let check_20 = document.querySelector('input[name="check[20]"]:checked');
                if (check_1) {
                    check_1 = check_1.value;
                }
                if (check_2) {
                    check_2 = check_2.value;
                }

                if (check_3) {
                    check_3 = check_3.value;
                }
                if (check_4) {
                    check_4 = check_4.value;
                }
                if (check_5) {
                    check_5 = check_5.value;
                }

                if (check_6) {
                    check_6 = check_6.value;
                }
                if (check_7) {
                    check_7 = check_7.value;
                }
                if (check_8) {
                    check_8 = check_8.value;
                }
                if (check_9) {
                    check_9 = check_9.value;
                }
                if (check_10) {
                    check_10 = check_10.value;
                }

                if (check_11) {
                    check_11 = check_11.value;
                }
                if (check_12) {
                    check_12 = check_12.value;
                }
                if (check_13) {
                    check_13 = check_13.value;
                }

                if (check_14) {
                    check_14 = check_14.value;
                }
                if (check_15) {
                    check_15 = check_15.value;
                }
                if (check_16) {
                    check_16 = check_16.value;
                }
                if (check_17) {
                    check_17 = check_17.value;
                }
                if (check_18) {
                    check_18 = check_18.value;
                }
                if (check_19) {
                    check_19 = check_19.value;
                }
                if (check_20) {
                    check_20 = check_20.value;
                }
                var data = check_1 + "|" + check_2 + "|" + check_3 + '|' + check_4 + "|" + check_5 + "|" + check_6 + "|" + check_7 + "|" + check_8 + "|" + check_9 + "|" + check_10 + "|" + check_11 + "|" + check_12 + "|" + check_13 + "|" + check_14 + "|" + check_15 + "|" + check_16 + "|" + check_17 + "|" + check_18 + "|" + check_19 + "|" + check_20 + "|";
                XMLHttpRequestObject.send("data=" + data);
            }
            return false;
        }
    </script>
</head>

<body>
    <div class="head_1">
        <header>
            <img src="images/logo.jpg" alt="logo" class="logo">
            <nav>
                <ul class="nav_link">
                    <li><a>
                            <h3>Welcome <b style="color:brown"><?php print $_SESSION['username'] ?></b></h3>
                        </a></li>
                </ul>
            </nav>
            <a href="index.php?logout='1'"><button type="button" onclick="add();">LogOut</button></a>
        </header>
    </div>
    <div class="head_2">
        <header>
            <nav>
                <ul class="nav_link">
                    <li><a>
                            <h3>Welcome <b style="color:brown"><?php print $_SESSION['username'] ?></b></h3>
                        </a></li>
                </ul>
            </nav>
            <a href="index.php?logout='1'"><button>LogOut</button></a>
        </header>
    </div>
    <form action="check.php" method="POST" class="check_form">
        <div class="pad_form">
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'practice') or die("dont connect");
            if (!$db) {
                print "<h1>Unable to select the Database</h1>";
            }
            for ($i = 1; $i < 21; $i++) {
                if ($i == 1) {
            ?>
                    <label class="color">
                        <h2>----- Section 1 -----</h2>
                    </label>
                <?php
                }
                if ($i == 6) {
                ?>
                    <label class="color">
                        <h2>----- Section 2 -----</h2>
                    </label>
                <?php
                }
                if ($i == 11) {
                ?>
                    <label class="color">
                        <h2>----- Section 3 -----</h2>
                    </label>
                <?php
                }
                if ($i == 16) {
                ?>
                    <label class="color">
                        <h2>----- Section 4 -----</h2>
                    </label>
                <?php
                }


                # code...
                $q = "SELECT * FROM question where q_id='$i'";
                $query = mysqli_query($db, $q);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="que">
                        <h4><?php print "$i $row[1] " ?></h4>
                        <?php
                        $q = "SELECT * FROM answer where q_id='$i'";
                        $query = mysqli_query($db, $q);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <input type="radio" name="check[<?php print $row[2] ?>]" value="<?php print $row[0] ?>" id="check[<?php print $row[0] ?>]" onclick="change()">
                            <?php print $row[1] ?>
                            </br>
                        <?php
                        }
                        ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <input type="submit" name="submit" id="button">
    </form>
    <?php
    $db = mysqli_connect('localhost', 'root', '');
    if (!$db) {
        print "<h1>Unable to connect to MYSQL</h1>";
        # code...
    }
    $dbname = 'practice';
    $btest = mysqli_select_db($db, $dbname);
    if (!$btest) {
        print "<h1>Unable to select the Database</h1>";
    }
    $sql_statement = "SELECT * FROM base WHERE username='$use'ORDER BY id DESC";
    $result = mysqli_query($db, $sql_statement);
    $print = mysqli_fetch_array($result);

    for ($i = 2; $i < 22; $i++) {
        if ($print[$i] != 'null') {

    ?>
            <script>
                var change = (function() {

                    var executed = false;
                    return function() {
                        if (!executed) {
                            executed = true;
                            // do something

                            document.getElementById('check[<?php print("$print[$i]") ?>]').checked = "checked";
                        }
                    };
                })();
                change();
            </script>
    <?php
        }
    }


    ?>

</body>

</html>
