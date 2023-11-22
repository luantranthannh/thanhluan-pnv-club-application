


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Your Form</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <form action="result.php" method="post">

            <div class="form-group">
                <label for="fullname" class="title-label">Name</label>
                <input type="text" name="fullname" id="fullname" value="">
            </div>

            <div class="form-group">
                <label for="club" class="title-label">Club you want to apply</label>
                <select name="club" id="club">
                    <option value="Robotic club">Robotic club</option>
                    <option value="Hoang anh club">Hoang anh club</option>
                    <option value="Babminton club">Babminton club</option>
                </select>
            </div>

            <div class="form-group">
                <label class="title-label">Be time for you</label>
                <div class="radio-group">
                    <div class="radio-group1">
                        <input type="radio" name="time" id="time1" value="Saturday morning">
                        <label for="time1">Saturday morning</label>
                    </div>

                    <div class="radio-group2">
                        <input type="radio" name="time" id="time2" value="Saturday afternoon">
                        <label for="time2">Saturday afternoon</label>
                    </div>

                    <div class="radio-group3">
                        <input type="radio" name="time" id="time3" value="Saturday tonight">
                        <label for="time3">Saturday tonight</label>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label class="title-label">Your skills</label>
                <div class="checkbox-group">

                    <div>
                        <input type="checkbox" name="skills1" id="skills1" value="the best coder">
                        <label for="skills1">the best coder</label>
                    </div>

                    <div>
                        <input type="checkbox" name="skills2" id="skills2" value="good in arts">
                        <label for="skills2">good in arts </label>
                    </div>

                    <div>
                        <input type="checkbox" name="skills3" id="skills3" value="a super star">
                        <label for="skills3">a super star</label>
                    </div>

                    <div>
                        <input type="checkbox" name="skills4" id="skills4" value="a cazy dancer">
                        <label for="skills4">a cazy dancer</label>
                    </div>

                    <div>
                        <input type="checkbox" name="skills5" id="skills5" value="singer">
                        <label for="skills5">singer</label>

                    </div>


                    <div>
                        <input type="checkbox" name="skills6" id="skills6" value="good in design">
                        <label for="skills6">good in design</label>
                    </div>

                    <div>
                        <input type="checkbox" name="skills7" id="skills7" value="a best eater">
                        <label for="skills7">a best eater</label>

                    </div>

                    <div>
                        <input type="checkbox" name="skills8" id="skills8" value="good in speaches">
                        <label for="skills8">good in speaches</label>
                    </div>



                </div>
            </div>

            <button type="submit">SUBMIT!</button>
        </form>
    </div>

</body>

</html>