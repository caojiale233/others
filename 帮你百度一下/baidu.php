<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head><title>我来帮你百度一下</title></head>
<link rel="shortcut icon" href="https://gss0.bdstatic.com/5bd1bjqh_Q23odCf/static/wiseindex/img/favicon64.ico" type="image/x-icon" />
<style>
.keyword{
display:none;
}
.mobile{
position:absolute;
top:0;
left:0;
width:100vw;
height:100vh;
text-align:center;
}
.mobile_logo{
width:38vw;
height:auto;
margin:4vh;
margin-top:7vh;
}
.mobile_inputArea{
margin:0 auto;
width:93vw;
height:6vh;
border:2px solid #000;
}
.mobile_input{
margin:1vw;
margin-right:0;
background:rgba(0,0,0,0);
width:59vw;
border:0;
outline:none;
height:calc(100% - 2vw);
float:left;
font-size:calc(6vh - 5vw);
line-height:calc(100% - 2vw);
}
.mobile_icon{
width:5vw;
margin:1.25vw;
margin-top:2.5vw;
float:left;
}
.mobile_icon:first-of-type{
border-right:1px solid;
}
.mobile_button{
width:17.5vw;
height:6vh;
float:right;
background:rgba(0,0,0,0);
border:0;
border-left:1px solid rgba(0,0,0,0.5);
outline:none;
font-size:2vh;
color:#2196f3;
}
.tip{
position:absolute;
padding:2vw;
border-radius:5px;
color:#f44336;
box-shadow:2px 2px 15px  rgba(0,0,0,0.5);
font-size:30pt;
text-align:left;
background:#ffffff;
display:none;
opacity:0;
transition:opacity 1s;
}
.m1{
top:55vh;
left:10vw;
width:76vw;
text-align:center;
}
.m2{
top:30vh;
left:5vw;
width:41vw;
}
.m3{
top:30vh;
left:55vw;
width:36vw;
text-align:right;
}
.pc{
position:absolute;
top:0;
left:0;
width:100vw;
height:100vh;
text-align:center;
display:none;
}
.pc_logo{
width:20vw;
margin:4vh;
margin-top:8vh;
}
.pc_inputArea{
margin:0 auto;
width:45vw;
height:4.5vh;
border:1px solid rgba(0,0,0,0.37);
}
.pc_input{
margin:0.5vh;
margin-right:0;
background:rgba(0,0,0,0);
width:33vw;
border:0;
outline:none;
height:calc(100% - 1vh);
float:left;
font-size:calc(4.5vh - 2vh);
line-height:calc(100% - 1vh);
}
.pc_icon{
height:2.5vh;
margin:1vh;
float:right;
}
.pc_button{
width:8vw;
height:4.5vh;
float:right;
background:#2196f3;
border:0;
outline:none;
font-size:2vh;
color:#ffffff;
}
.p1{
top:70vh;
left:20vw;
width:56vw;
text-align:center;
}
.p2{
top:40vh;
left:5vw;
width:41vw;
}
.p3{
top:40vh;
left:65vw;
}
</style>
<body>
<?php
$keyword="如何使用百度搜索";
if(!empty($_GET["kw"])){$keyword=$_GET["kw"];};
echo "<input class='keyword' value='$keyword' type='text'>";
?>
<div class="mobile">
<img class="mobile_logo" src="https://m.baidu.com/se/static/img/iphone/logo.png">
<div class="mobile_inputArea"><input class="mobile_input" type="text">
<img class="mobile_icon" src="https://img.icons8.com/material/96/000000/microphone.png">
<img class="mobile_icon" src="https://img.icons8.com/ios-glyphs/30/000000/camera.png">
<button class="mobile_button"><strong>百度一下</strong></button>
</div></div>
<div class="tip m1"><h1>你就非要我来教你怎么用百度吗！</h1></div>
<div class="tip m2">↑↑↑<br>第一步：<br>在这里输入你要搜索的内容</div>
<div class="tip m3">↑↑↑<br>第二步：<br>点下这个按钮</div>

</div>
<div class="pc">
<img class="pc_logo" src="https://www.baidu.com/img/bd_logo1.png?qua=high&where=super ">
<div class="pc_inputArea"><input class="pc_input" type="text">
<button class="pc_button"><strong>百度一下</strong></button>
<img class="pc_icon" src="https://img.icons8.com/ios/90/88888888/screenshot.png">
</div></div>
<div class="tip p1"><h5>你就非要我来教你怎么用百度吗！</h5></div>
<div class="tip p2"><span style="float:right">↑↑↑</span><br>第一步：<br>在这里输入你要搜索的内容</div>
<div class="tip p3">↑↑↑<br>第二步：<br>点下这个按钮</div>

</div>
</body>
<script>
var mobile=true;
if(document.documentElement.clientWidth>document.documentElement.clientHeight){mobile=false;$(".pc").style.display="block";$(".mobile").style.display="none";}
function hide($element$1){
	$($element$1).style.opacity="0";
	setTimeout(function (){$($element$1).style.display="none";},300);
}
function show($element$1){
	$($element$1).style.display="block";
	setTimeout(function (){$($element$1).style.opacity="1";},50);
}
function $($__$){return document.querySelector($__$);}
window.onload=function (){
if(mobile){mobileF();}else{pcF();}
}
function mobileF(){
show(".m1");
setTimeout("show('.m2')",1500);
setTimeout("input()",2500);
}
function pcF(){
show(".p1");
setTimeout("show('.p2')",1500);
setTimeout("input()",2500);
}
var text=$(".keyword").value.split(""),i=0;
function input(){
$(".pc_inputArea").style.border="2px solid #2196f3";
if(i<text.length){
$(".mobile_input").value+=text[i];
$(".pc_input").value+=text[i];
setTimeout("input()",300);
}else{
if(mobile){show(".m3");}else{show(".p3")}
setTimeout("$('.mobile_button').style.background='rgba(0,0,0,0.2)';$('.pc_button').style.background='#1565C0';go()",500);
}i++;
}
function go(){
setTimeout("location.href='https://baidu.com/s?word='+$('.keyword').value",1000);
}
</script>
</html>
