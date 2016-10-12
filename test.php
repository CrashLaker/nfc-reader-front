<html>
<head>
	<script type="text/javascript" src="./jquery.js"></script>

	<script type="text/javascript">
		var lastid = 0;
		function run(){
			$.get("get.php", function (rs){
				if (rs == "") return;
				rs = rs.split("-");
				//$("body").append(">" + rs + "/" + rs.length + "<br>");
				for(i = 0; i < rs.length; i++){
					str = rs[i].replace(/\W/g, '');
					if (rs[i] == "") continue;
					data = rs[i].split(",");
					//$("body").prepend(data[0] + "<=" + lastid + " / ");
					if (parseInt(data[0]) <= parseInt(lastid)) continue;
					//$("body").append(rs[i] + "<br>");
					//$("#"+data[1]).append(data[0] + " " + data[1] + " " + data[2] + " " + data[3] + "<br>");				
					$("#nfc"+data[1]).append("<li class="+data[3]+"><img src='"+data[2]+"'/></li>");
					lastid = parseInt(data[0]);
				}
			});
		}
		//run();
		setInterval(run, 1000);
	</script>
</head>
<style type="text/css">
@font-face{
	font-family: 'Noto Sans';
	src: url(./NotoSans-Regular.ttf') format('truetype');
}
*{
font-family: 'Noto Sans', sans-serif;
margin:0;
padding:0;
}
h3{
	font-size:60px;
	clear:both;
	padding-left:70px;
	border-bottom:5px solid black;
	background:url("nfc.png");
	background-size:contain;
	background-position:left center;
	background-repeat:no-repeat;
}
#left{
	width:48%;
	float:left;
}

#right{
	width:50%;
	float:right;
}
ul{
	list-style-type:none;
}
li{
	position:relative;
	width:128px;
	height:128px;
	margin:3px;
	float:left;
}
li img{
	width:32px;
	height:32px;
	top:5px;
	right:5px;
}
.yellow{
	background:url("nfc-yellow.png");
}
.green{
	background:url("nfc-green.png");
}
.blue{
	background:url("nfc-blue.png");
}
.pink{
	background:url("nfc-pink.png");
}
</style>


<div id="left">
<h3>NFC 1</h3>
<ul id="nfcleft">
<!--<li class="yellow"><img src="dn.png"/></li>-->
</ul>

</div>


<div id="right">
<h3>NFC 2</h3>

<ul id="nfcright">
</ul>

</div>
