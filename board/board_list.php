<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WhatToDo</title>
        <link rel="stylesheet" href="board_style.css"/>
    </head>
    <body>
        <div class="container">
            <h1>게시판임둥</h1>
            <?php
                $currentPage = 1;
                if (isset($_GET["currentPage"])) {
                    $currentPage = $_GET["currentPage"];
                }
                $conn = mysqli_connect("localhost", "root", "2433262","test");
                $sqlCount = "SELECT count(*) FROM board";
                $resultCount = mysqli_query($conn,$sqlCount);
                if($rowCount = mysqli_fetch_array($resultCount)){
                    $totalRowNum = $rowCount["count(*)"]; 
                }
                if($resultCount) {
                    echo "<div style='margin-bottom: 30px; font-size: 20px; opacity: 0.5;'>현재 ".$totalRowNum."개의 글이 등록되어 있습니당</div>";
                } else {
                    echo "네? ".mysqli_error($conn);
                }
                $rowPerPage = 8;  
                $begin = ($currentPage -1) * $rowPerPage;
                $sql = "SELECT board_no, board_title, board_user, board_date FROM board order by board_no desc limit ".$begin.",".$rowPerPage."";
                $result = mysqli_query($conn,$sql);
            ?>
            <table>
                <tr>
                    <td class="tdtd">글 제목</td>
                    <td class="tdtd">누가씀?</td>
                    <td class="tdtd">날짜</td>
                    <td class="tdtd">수정</td>
                    <td class="tdtd">삭제</td>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result)){ 
                ?>
                    <tr>
                        <td>
                            <?php
                                echo "<a href='./board_detail.php?board_no=".$row["board_no"]."'>";
                                echo $row["board_title"];
                                echo "</a>";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row["board_user"];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row["board_date"];
                            ?>
                        </td>
                            <?php
                                echo "<td><a href='./board_update_form.php?board_no=".$row["board_no"]."'>수정</a></td>";
                                echo "<td><a href='./board_delete_form.php?board_no=".$row["board_no"]."'>삭제</a></td>";
                            ?>
                    </tr>
                <?php
                    }
                ?>
            </table>
            <?php
                if($currentPage > 1 ) { 
                    // echo "<a classhref ='./board_list.php?currentPage=".($currentPage-1)."'>이전</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                $lastPage = ($totalRowNum-1) / $rowPerPage;
                if (($totalRowNum-1) % $rowPerPage !=0) { 
                    $lastPage += 1;
                }
                if($currentPage < $lastPage) { 
                    // echo "<a href='./board_list.php?currentPage=".($currentPage+1)."'>다음</a>";
                }
                mysqli_close($conn);
            ?>
            <a id="gotoWrite" href="./board_add_form.php">글 쓰기</a>
            <a id="gotoWrite" href="../index.php" style="width: 100px; left: 75px; text-align: left;">메인으로</a>
        </container>
    </body>
</html>
