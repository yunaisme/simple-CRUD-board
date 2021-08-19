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
            <form action="./board_add_action.php" method="post">
                <div class="flexcon">
                    <label for="exampleInputTitle1">글 제목  </label>
                    <div style="text-align: left; padding-left: 20px">
                        <input name="boardTitle" id="Title" type="text" placeholder="Title"/>
                    </div>
                </div>
                <div class="flexcon">
                    <label for="exampleInputName1">누가 씀  </label>
                    <div style="text-align: left; padding-left: 20px">
                        <input name="boardUser" id="name" type="text" placeholder="Name"/>
                    </div>
                </div> 
                <div class="flexcon">
                    <label for="exampleInputContent1">글 내용  </label>
                    <div style="text-align: left; padding-left: 20px">
                        <textarea style="background-color:#2ec1ac; opacity: 0.5; border: none; padding: 5px;" name="boardContent" id="content" rows="5" cols="50" placeholder="여기다 글 쓰세여"></textarea>
                    </div>
                </div>
                <div class="flexcon">
                    <label for="exampleInputPassword1">비밀번호  </label>
                    <div style="text-align: left; padding-left: 20px">
                        <input name="boardPw" id="password" type="password" placeholder="Password"/>
                    </div>
                </div>
                <div>
                    <button id="submitButton" type="submit" value="글 입력">글 작성하기</button>
                    <button id="submitButton" type="reset" value="초기화" style="left: 75px;">글 날려버리기</button>
                    <a id="gotoWrite" href="./board_list.php">리스트로 돌아가기</a>
                </div>
            </form>
        </div>
    </body>
</html>
