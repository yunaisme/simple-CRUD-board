<html>
    <head>
    <meta charset="UTF-8">
        <title>WhatToDo</title>
    </head>
    <body>
        <h1>board_delete_action.php</h1>
        <?php
            $board_no = $_POST["board_no"];
            $board_pw = $_POST["board_pw"];
            echo "board_no : " . $board_no . "<br>";
            echo "board_pw : " . $board_pw . "<br>";
            $conn = mysqli_connect("localhost","root","2433262","test");
            $sql = "DELETE FROM board WHERE board_pw='".$board_pw."'AND board_no=".$board_no."";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("Location: http://54.180.156.116/board/board_list.php");
        ?>
    </body>
</html>