<?php

date_default_timezone_set("PRC");

function submitMy_SQL($sql){
    $conn = mysqli_connect("127.0.0.1","root","17036673");
    if(! $conn )
    {
    die('连接失败: ' . mysqli_error($conn));
    }

    // 设置编码，防止中文乱码
    mysqli_query($conn , "set names utf8");
    mysqli_select_db( $conn, 'mcc' );
    $retval = mysqli_query( $conn, $sql );

    if(! $retval )
    {
        die("<script>"."window.alert('发生错误,无法提交！".mysqli_error($conn))."');"."</script>" ;
    }
    mysqli_close($conn);
}
if(isset($_POST["btn"])){
    $Time = date("Y-m-d H:i:s");
    // 获取信息
    $name = $_POST["user"];
    $email = $_POST["email"];
    $TextTitle = $_POST["title"];
    $text = $_POST["content"];
    $sql = "INSERT INTO mcc_test".
        "(name,email,TextTitle,Text,Time) ".
        "VALUES ".
        "('$name','$email','$TextTitle','$text','$Time')";

    submitMy_SQL($sql);
}else{
    echo "<h1拒绝post访问</h1>";
}
?>
<script>
    window.alert("提交成功!");
    window.location = "index.php"
</script>


