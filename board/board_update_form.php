<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
        <link rel="stylesheet" href="board_style.css"/>
    </head>
    <body>
        <div class="container">
            <h1>게시판임둥</h1>
            <?php
                $conn = mysqli_connect("localhost","root","2433262","test");
                $board_no = $_GET["board_no"];
                $sql = "SELECT board_no, board_title, board_content, board_user, board_date FROM board WHERE board_no = '".$board_no."'";
                $result = mysqli_query($conn,$sql);
                if($row = mysqli_fetch_array($result)){
            ?>
            <br>
            <form action="./board_update_action.php" method="post">
                <table>
                    <tr>
                        <td>글 번호</td>
                        <td style="text-align: left; padding-left: 20px">
                            <input type="text" name="board_no" value="<?php echo $row["board_no"]?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>글 제목</td>
                        <td style="text-align: left; padding-left: 20px">
                            <input type="text" name="board_title" value="<?php echo $row["board_title"]?>">
                        </td>
                    </tr>
                    <tr>
                        <td>글 내용</td>
                        <td style="text-align: left; padding-left: 20px;">
                            <input type="text" name="board_content" value="<?php echo $row["board_content"]?>">
                        </td>
                    </tr>
                </table>
                <br>
            <?php
                }
                mysqli_close($conn);
            ?>
                <button id="submitButton" type="submit">글 수정</button>
                <a id="gotoWrite" href="./board_list.php"> 리스트로 돌아가기</a>
            </form>
        </div>
    </body>
</html>
