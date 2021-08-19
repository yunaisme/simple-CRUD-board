<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form method="POST" action="loginProcess.php"> 
            <div class="con">
                <div class="LoginLabel">
                    <label>이메일</label>
                    <input class="InfoInput" name="email" type="text" placeholder="email">
                </div>
                <div class="LoginLabel">
                    <label>비밀번호</label>
                    <input class="InfoInput" name="password" type="password" placeholder="password">
                </div>
                <button id="LoginButton" type="submit">로그인!</button>
                <a id="gotoBoard" href="/board/board_list.php">의견 남기러 가기</a>
            </div>
        </form>
    </body>
</html>