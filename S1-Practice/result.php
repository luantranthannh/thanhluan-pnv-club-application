
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-color: #f4f4f4;
    margin: 0;
}

.container {
    max-width: 500px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 2px dashed palevioletred;
}
 p  {
     margin-bottom: 15px;
     font-size: 20px;
     text-align: center;
 }

 h1{
    font-size: 34px;
    text-align: center;
 }
    </style>
</head>
<body>
    <div class="container">
    <center>
    <img src="huychuong.png" alt="" width="200px">
    </center>
    <h1>Thank you  <?php if(isset($_POST["fullname"])) { echo $_POST["fullname"]; } ?></h1>

    <p>We receive your application <?php if(isset($_POST["club"])) { echo $_POST["club"]; } ?> 

    <p>Skills 
    <?php 
        $selectedSkills = array(); 
        for ($i = 1; $i <= 8; $i++) {
            $fieldName = "skills" . $i;
            if (isset($_POST[$fieldName])) {
                $selectedSkills[] = $_POST[$fieldName];
            }
        }
        if (count($selectedSkills) > 1) { 
            for ($i = 0; $i < count($selectedSkills) - 1; $i++) {
                echo $selectedSkills[$i] . ', ';
            }
            echo "and " . end($selectedSkills);
        } else {
            echo implode(', ', $selectedSkills);
        }
    ?>
</p>
    <p>You will be avaible <?php if(isset($_POST["time"])) { echo $_POST["time"]; } ?></p></p>
    </div>
</body>
</html>


<!-- <p>Skills
     <?php if(isset($_POST["skills1"])) { echo $_POST["skills1"]; } ?>
 <?php if(isset($_POST["skills2"])) { echo "  " . $_POST["skills2"]; } ?>
            <?php if(isset($_POST["skills3"])) { echo "  " . $_POST["skills3"]; } ?>
            <?php if(isset($_POST["skills4"])) { echo "  " . $_POST["skills4"]; } ?>
            <?php if(isset($_POST["skills5"])) { echo "  " . $_POST["skills5"]; } ?>
            <?php if(isset($_POST["skills6"])) { echo "  " . $_POST["skills6"]; } ?>
            <?php if(isset($_POST["skills7"])) { echo "  " . $_POST["skills7"]; } ?>
            <?php if(isset($_POST["skills8"])) { echo "  " . $_POST["skills8"]; } ?>

    </p>  -->





