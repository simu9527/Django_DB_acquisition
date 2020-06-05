<!-- 
    <input type="submit" name="btn" onclick="submitNice()" value="发送">
    <textarea>文字内外边距
    css命名规范
 -->



<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=500px, initial-scale=1.0"> -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <title>MCC</title>

    <style>
        #otxtSpan{
            margin: 1px;
            padding: 1px;
        }
    </style>
</head>
<body>
    <div>
        <p id="bt">联系我们</p>
        <p id="bt2">这是我们的联系方式，欢迎加入我们！</p>
        <div class="div1">
            <p><i class="fa fa-map-pin" aria-hidden="true"></i>云南新华电脑学校</p>
            <p><i class="fa fa-envelope-square" aria-hidden="true"></i>151 2600 2971</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>1914429139@qq.com</p>
        </div>
        <div class="div2">
            <form action="use.php"  method="POST" onsubmit="return checkL()">
                <input 
                    type="text" 
                    name="user" 
                    placeholder="你的名字" 
                    required
                ><br>

                <input 
                    type="email" 
                    name="email" 
                    placeholder="输入邮箱" 
                    required                    
                ><br>

                <input 
                    type="text"
                    name="title"
                    placeholder="标题"
                    required                  
                ><br>
                <p id="txtSpan"></p>
                <textarea
                    id="texta"
                    name="content" 
                    type="text" 
                    placeholder="内容 (最多只能输入50个字符)" 
                    required                   
                    nokeydonw="submitNice()"
                ></textarea> 
                <br>
                <!-- <button id name="btn" onclick="" type="submit">发送</button> -->
                <input type="submit" name="btn" id="btn" onclick="return submitNice()" value="发送">
            </form>
        </div>
    </div>  
</body>
</html>
<script>

        var oTx=document.getElementById('texta');
   // alert( oTx.value )
        var otxtSpan=document.getElementById('txtSpan');
        var oBtn=document.getElementById('btn');
   
        oBtn.onclick=function submitNice(){
       
        if(oTx.value.length>50){
            otxtSpan.style.color = "red";
            otxtSpan.innerHTML="内容不能超过50字符！";
            return false;
        }else{
            otxtSpan.innerHTML="正确！";
            return true;
        }
    }

    function checkL(){
        var flg=submitNice();
        return flg;
    }
  /*
    if (condition) {
        
    } else {
        
    }*/
</script>