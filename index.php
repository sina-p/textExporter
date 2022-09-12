<?php include "process.php" ; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - HTML Form Challenge</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-container">
    <main class="component-viewport">
        <h2 class="form-title">Submit Your Pupper</h2>
        <!-- need to impliment this php script after export -->
        <form class="dog-measurments form" action="" method="POST">
            <div class="nameage-container">
                <input class="name validate-field" type="text" name="title" placeholder="Title"></input>
                <input class="age validate-field" type="text" name="content" placeholder="Content Here"></input>

                <select class="breed validate-field" type="text" name="format">
                    <!-- <option value="none"></option> -->
                    <option value="Text">Text</option>
                    <option value="Pdf">PDF</option>
                    <option value="Json">Json</option>
                </select>
                <button class="submit" type="submit">Export</button>
        </div>
        </form>
    </main>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
