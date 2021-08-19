<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        if (isset($_SESSION['userId'])) {
        ?>
        <div class="container">
            <a id="BoardButton" href="/board/board_list.php">의견 남기러 가기</a>
            <button id="LogoutButton" onclick="logout()">로그아웃</button>
            <h2>대기중 (<span id="count-waiting"></span>)</h2>
            <ul class="list waiting"></ul>
            <h2>완료됨 (<span id="count-complete"></span>)</h2>
            <ul class="list complete"></ul>
            <form id="todo-form">
                <input id="todo-input" type="text" placeholder="새로운 할일 추가">
                <input id="todo-submit" type="submit" value="+">
            </form>
        </div>    
        <?php
        } else {
        ?>
        <a id="loginPlz" href="login.php">로그인 해주세요!</a>
        <?php
        }
        ?>
    </body>
    <script src="script.js"></script>
</html>