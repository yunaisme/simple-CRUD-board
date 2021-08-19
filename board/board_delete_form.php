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
                $board_no = $_GET["board_no"];
            ?>
            <form action="./board_delete_action.php" method="post" style="text-align: center;">
                <table style="margin: auto;">
                    <tr>
                        <td style="opacity: 0.5">삭제하려면 비밀번호를 입력하시오~</td>
                    </tr>
                    <tr style="height: 80px;">
                        <td>
                            <input type="text" name="board_pw" style="background-color: #2ec1ac;
                            opacity: 0.5; height: 50px;">
                            <input type="hidden" name="board_no" value="<?php echo $board_no ?>">
                        </td>
                    </tr>
                </table>
                <button id="submitButton" type="submit">삭제고고</button>
                <a id="gotoWrite" href="./board_list.php">리스트로 돌아가기</a>
            </form>
        </div>
    </body>
</html>
