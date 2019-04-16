<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var commentCount=2;
     $("button").click(function(){
         commentCount=commentCount+2;
      $("#comments").load("load-comments.php",{
            commentNewCount:commentCount

      });
     });
    });
    </script>
</head>

<body>
    <div id="comments">
        <?php 
        $sql="SELECT * FROM comments LIMIT 2";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<p>";
                echo $row["author"];
                echo "<br>";
                echo $row["comments"];
                echo "</p>";
            }
        }else{
            echo "There are no comments";
        }
        ?>
       
    </div>
    <button>Show Comments</button>
</body>
</html>