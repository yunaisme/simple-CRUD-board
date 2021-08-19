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
            ?>
            <table>
                <?php
                    if($row = mysqli_fetch_array($result)) {
                ?>
                    <td>글 제목</td>
                    <td class="dtdt">
                        <?php
                            echo $row["board_title"];
                        ?>
                    </td>
                    <td>작성자</td>
                    <td class="dtdt">
                        <?php
                            echo $row["board_user"];
                        ?>
                    </td>
                    <td>작성 일자</td>
                    <td class="dtdt">
                        <?php
                            echo $row["board_date"];
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <br>
                    <td colspan="6" id="thattr">
                        <?php
                            echo $row["board_content"];
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <a id="gotoWrite" href="./board_list.php">리스트로 돌아가기</a>
        </div>
    </body>
</html>
