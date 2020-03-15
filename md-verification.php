<?php
    // $years에 생년 숫자 4자리 저장
    $years = $_POST['years'];

    // $years 값에서 맨 끝자리 수 $syears 저장
    $syears = substr($years, 3);

    // $years 값의 자릿 수 $ssyears 저장
    $ssyears = strlen($years);

    // $ssyears가 4가 아닐 시 if 종료    
    if($ssyears != "4") {
        echo '<script>alert("생년 4자리를 입력하세요.");</script>';
        echo '<script>location.href="/";</script>';
        exit;
    } else if($syears == "1") {
        echo '<script>alert("월요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "6") {
        echo '<script>alert("월요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "2") {
        echo '<script>alert("화요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "7") {
        echo '<script>alert("화요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "3") {
        echo '<script>alert("수요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "8") {
        echo '<script>alert("수요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "4") {
        echo '<script>alert("목요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "9") {
        echo '<script>alert("목요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "5") {
        echo '<script>alert("금요일에 구매할 수 있습니다.");</script>';
    } else if($syears == "0") {
        echo '<script>alert("금요일에 구매할 수 있습니다.");</script>';
    } else {
        echo '<script>alert("올바른 생년을 입력하세요.");</script>';
    }

    // 검토가 끝나면 / 으로 이동
    echo '<script>location.href="/";</script>';
?>
