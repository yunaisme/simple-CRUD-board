<html>
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
    </head>
    <body>
        <h1>boardAddAction.php</h1>
        <?php
            $board_pw = $_POST["boardPw"];
            $board_title = $_POST["boardTitle"];
            $board_content = $_POST["boardContent"];
            $board_user = $_POST["boardUser"];
            echo "board_pw : " . $board_pw . "<br>";
            echo "board_title : " . $board_title . "<br>";
            echo "board_content : " . $board_content . "<br>";
            echo "board_user : " . $board_user . "<br>";
            $conn = mysqli_connect("localhost","root","2433262","test");
            $sql = "INSERT INTO board (board_pw, board_title, board_content, board_user, board_date) values ('".$board_pw."','".$board_title."','".$board_content."','".$board_user."',now())";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("Location: http://54.180.156.116/board/board_list.php");
        ?>
    </body>
</html>