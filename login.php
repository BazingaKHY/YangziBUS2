<?php
	/****˵��,
	����һ����½ҳ
	�ж���û�� session ,����� session ��ֱ��ת�� main.html
	����ת����½��ҳ����
	****/
	include 'config.inc.php';
	/*echo $_SESSION["UserName"];
	if($_SESSION["UserName"]!=""){
		
		header("location:main.php");
	}*/
	$_SESSION["UserName"]="";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
*{overflow:hidden; font-size:9pt;}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg.gif);
	background-repeat: repeat-x;
}
#frmLogin table tr td table tr td table tr td h1 strong font {
	font-size: 30pt;
	color: #06F;
}
-->
</style></head>
<script src="lib/jquery/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="lib/jquery.md5.js" type="text/javascript"></script>
<link href="lib/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
<!--<link href="lib/ligerUI/skins/ext/css/ligerui-fix.css" rel="stylesheet" type="text/css" />-->
<script src="lib/json2.js" type="text/javascript"></script>
<script src="lib/ligerUI/js/core/base.js" type="text/javascript"></script>   
<script src="lib/ligerUI/js/core/inject.js" type="text/javascript"></script>   
<script src="lib/ligerUI/js/ligerui.all.js" type="text/javascript"></script>        

<script>
function f_redirect()
{
	window.location.href="main.php";
}

function f_error()
{
	return;
	$.ligerDialog.confirm("��½ʧ�ܣ��������룿", function (yes) {
                    if (yes){
							window.location.href="main.php";
					}
	});	
}
function LoginSystem()
{
	//
	var userid=document.getElementById("userid").value;
	var userpass=document.getElementById("userkey").value;
	userpass=$.md5(userpass);
	if(userid==""){
		//alert("ee");
		top.$.ligerDialog.error(' �������û���!');
		//document.getElementById("userid").focus();
		return;
	}
	
	//���￪ʼ��½
	$.ajax({
		url: "ajaction/v1/?menuid=0", type: "POST",
        data: { cmd:"login",userid: userid,password:userpass ,rnd: Math.random() },
        success: function (responseText) {
								//
			responseText=$.trim(responseText);
			
			if(typeof(responseText)=="undefined" || responseText=="" || responseText==null){
				//������û�����ݷ���
				top.$.ligerDialog.error("δ֪����");
				f_error();
			}else{
				var dataObj = eval("("+responseText+")");
									
					if (dataObj.status == "OK") {
							f_redirect();
					}else {
						top.$.ligerDialog.error(dataObj.reason);
						f_error();
					}
			}
        },
        error: function () {
			top.$.ligerDialog.error('��½ʧ��!��������');
			f_error();
        }
    });
	
	
	
}
</script>
<body>
	
<table width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    	
    	<table width="1732" height="1040" border="0" cellspacing="0" cellpadding="0" filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";
   -moz-background-size="100% 100%"; background-size="100% 100%";>
      <tr>
        <td style="background:url(images/background1.png)">
        <table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="238" align="center" style="background:url(images/login01.jpg)"><div style="width: 450px; float: center; font-size:38px; color:#06F">
                    ��̥ȫ�������ڹ���ϵͳ
                </div></td>
          </tr>
          <tr>
            <td height="190">
            	
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="208" height="190" style="background:url(images/login02.jpg)">&nbsp;</td>
                <td width="518" style="background:url(images/login03.jpg)"><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="40" height="50"><img src="images/user.gif" width="30" height="30"></td>
                    <td width="38" height="50">�û�</td>
                    <td width="242" height="50"><input type="text" name="userid" id="userid" style="width:164px; height:32px; line-height:34px; background:url(images/inputbg.gif) repeat-x; border:solid 1px #d1d1d1; font-size:9pt; font-family:Verdana, Geneva, sans-serif;"></td>
                  </tr>
                  <tr>
                    <td height="50"><img src="images/password.gif" width="28" height="32"></td>
                    <td height="50">����</td>
                    <td height="50"><input type="password" name="userkey" id="userkey" style="width:164px; height:32px; line-height:34px; background:url(images/inputbg.gif) repeat-x; border:solid 1px #d1d1d1; font-size:9pt; "></td>
                  </tr>
                  <tr>
                    <td height="40">&nbsp;</td>
                    <td height="40">&nbsp;</td>
                    <td height="60">
                    	<!--<input type="submit" name="submit">tijiao</>-->
                    	<input name="imgbtn" type="image" style="cursor:hand" src="images/login.gif" width="95" height="34" border="0" onclick="LoginSystem();">
                    	<!--<img src="images/login.gif"  style="cursor:hand" width="95" height="34" onclick="document.frmLogin.submit;"/>--></td>
                  </tr>
                </table></td>
                <td width="214" style="background:url(images/login04.jpg)" >&nbsp;</td>
              </tr>
            </table>            
            </td>
          </tr>
          <tr>
            <td height="133" style="background:url(images/login05.jpg)">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>



