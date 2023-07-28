<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagentsdata</title>
    <link rel="stylesheet" href="samplefreezer1.css">
</head>
<body>
    <div class="header">
        <h1>REAGENTS</h1>
    </div>
    <div class="container">
        <div class="buttons">
            <a href="reagentform.php" class="submit">
                <input type="submit" value="Add New">
            </a>
            <a href="allreagents.php" class="submit">
                <input type="submit" value="View All">
            </a>
        </div>
        <div class="container2">
            <div class="formcontainer">
                <div class="formheading">
                    <h2>Add New Records</h2> 
                </div>
                <form action="addnewreagent.php" class="form" method="POST">
                    <label id="inputlabel" for="">Subject Id:</label> <br>
                    <input type="text" name="subject_id" > <br>
                    <label id="inputlabel" for="">Reagent Id:</label><br>
                    <input type="text" name="sample_id" > <br>
                    <label id="inputlabel" for="">Freezer Number:</label> <br>
                    <input type="text" name="freezer_No"><br>
                    <label id="inputlabel" for="">Box Id:</label> <br>
                    <input type="text" name="box_id"><br>
                    <label id="inputlabel" for="">Shelf Number: </label><br>
                    <input type="text" name="shelf_No"> <br>
                    <label id="inputlabel" for="">Box Number: </label><br>
                    <input type="text" name="box_No"> <br>
                    <label id="inputlabel" for="">Position:</label> <br>
                    <input type="text" name="sample_position"> <br>
                    <label id="inputlabel" for="">Comment:</label> <br>
                    <input type="text" name="sample_comment"> <br>
                    <div class="formsubmit">
                        <a href="#" class="submit">
                            <input type="submit" value="Submit">
                        </a>
                        <a href="allreagents.php" class="submit">
                            <input type="submit" value="view all" id="viewsaples">    
                        </a>
                    </div>
                </form>

        </div>
    </div>


    </div>
    <div class="footer">
      <h4>&copy Copywrite: Freezer.Com</h4>
    </div>
    
</body>
</html>