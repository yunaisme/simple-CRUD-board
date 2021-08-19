<html>
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
    </head>
    <body>
        <?php
            $board_no = $_POST["board_no"];
            $board_title = $_POST["board_title"];
            $board_content = $_POST["board_content"];
            $conn = mysqli_connect("localhost","root","2433262","test");
            $sql = "UPDATE board SET board_title='".$board_title."',board_content='".$board_content."',board_date=now() WHERE board_no=".$board_no."";
            $result = mysqli_query($conn,$sql);  
            mysqli_close($conn);
            header("Location: http://54.180.156.116/board/board_list.php"); 
        ?>
    </body>
</html>