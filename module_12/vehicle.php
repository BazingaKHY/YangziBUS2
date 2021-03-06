﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>车辆维护</title>
    <link href="../jquery-easyui/themes/default/easyui.css" rel="stylesheet" type="text/css">
    <link href="../jquery-easyui/themes/icon.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../jquery-easyui/jquery.min.js"></script>
    <link href="../jquery-easyui/demo.css" rel="stylesheet" type="text/css">
  <link href="../css/homepagecss/usermanger.css" type="text/css" rel="stylesheet">
    <script src="../jquery-easyui/jquery.easyui.min.js" type="text/javascript"></script>
    <script src="../jquery-easyui/locale/easyui-lang-zh_CN.js" type="text/javascript"></script>
    <script type="text/javascript">
	 function addUser() {
            $('#addUser').dialog('open').dialog('setTitle', '新增车辆');
			
        };
		$(function(){
			$('#cancel').bind('click',function(){
				$('#alarm').dialog('close');
			});
			$('#close').bind('click',function(){
				$('#addUser').dialog('close');
			});
			$('#updata_close').bind('click',function(){
				$('#dlg').dialog('close');
			});
		})
        function formatOption(value, row, index) {
            return '<a href="#" style="text-decoration: none;color: #1c66dc; font-size: 12px; border:1px solid #1c66dc;padding:2px 10px; border-radius:4px; margin-left:20px;" onclick="editUser('+index+')">编辑</a> <a href="#" style="text-decoration: none;color: #efad2c; font-size: 12px; border:1px solid #efad2c;padding:2px 10px; border-radius:4px; margin-left:6px;" onclick="deletData('+index+')">删除</a>';
        }
        var url;
        function editUser(index) {
            $('#dg').datagrid('selectRow', index);
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','修改记录');
            }
        }
		function deletData(index){
			 $('#dg').datagrid('selectRow', index);
            var row = $('#dg').datagrid('getSelected');
			if(row){
				$('#alarm').dialog('open').dialog('setTitle','删除记录');
			}
		}
        $(function () {
            $('#kk').tabs({
                onSelect:function(index){
                    var p = $(this).tabs('getTab', index);
                    p.find('iframe').attr('src','vv.php');
                    console.log('ss',index);
                }
            });
          tab.panel('refresh'); // get selected panel

        })
    </script>
	<style>
	#toolbar button{
		 border: 1px solid #1c66dc;
    height: 25px;
    line-height: 2px;
    width: 100px;
    background-color: white;
    border-radius: 20px;
    vertical-align: middle;
    color: #1c66dc;
	}
		
        #sure{
            height: 25px;
            width: 60px;
            border: none;
            margin-right: 11px;
            background: url("../css/img/yes_normal.png") no-repeat;
        }
        #sure:visited,#sure:link{
            background: url("../css/img/yes_normal.png") no-repeat;
        } 
        #sure:hover,#sure:active{
            background: url("../css/img/yes_highlighted.png") no-repeat;
        }
        #cancel{
            height: 25px;
            width: 60px;
            border: none;
            background: url("../css/img/no_normal.png") no-repeat;
        }
        #cancel:visited,#cancel:link{
            background: url("../css/img/no_normal.png") no-repeat;
        }
        #cancel:hover,#cancel:active{
            background: url("../css/img/no_highlighted.png") no-repeat;
        }
		 #save{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #save:visited,#save:link{
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #save button:active,#save button:hover{
            background: url("../css/img/ok_seleected.png") no-repeat;

        }
        #close{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #close:visited,#close:link{
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #close button:active,#close button:hover{
            background: url("../css/img/cancel_selected.png") no-repeat;

        }
		#updata_save{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #updata_save:visited,#updata_save:link{
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #updata_save button:active,#updata_save button:hover{
            background: url("../css/img/ok_seleected.png") no-repeat;

        }
        #updata_close{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #updata_close:visited,#updata_close:link{
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #updata_close button:active,#updata_close button:hover{
            background: url("../css/img/cancel_selected.png") no-repeat;

        }

      
	</style>
</head>
<body class="easyui-layout" style="height: 100%; width: 100%;padding: 20px;" >
<div id="kk" class="easyui-tabs">
    <div style="width: 100%;height:49%;border-bottom: 5px solid #ffffff" title="车辆列表">
        <table id="dg" class="easyui-datagrid"
               url="../jquery-easyui/datagrid_data1.json" style="width: 100%;"
               toolbar="#toolbar" singleSelect="true" fitColumns="true" striped="true">
            <thead>
            <tr>
                <th field="name1" width="20%" >车牌号码</th>
                <th field="name2" width="25%" >轮胎编号</th>
                <th field="name3" width="25%" >备注</th>
                <th field="name4" width="30%" formatter="formatOption">操作</th>
            </tr>
            </thead>
        </table>
       <div id="toolbar" style="margin-bottom: 10px;margin-top: 10px;height:54px; background-color: white;padding-left: 19px;padding-right:39px;padding-top:15px">
           
            <div id="t-bottom">
                <input data-options="prompt:'车牌号码'" class="easyui-textbox" />
                <span> 起始日期：</span> <input id="startDate" type="text" class="easyui-datebox" required="required">
                <span> 终止日期：</span> <input id="stopDate" type="text" class="easyui-datebox" required="required">
                <button style="display: inline-block;margin-right: 10px;margin-left: 10px;">搜索</button>
				<button style="display: inline-block; float:right;margin-right: 10px;"><a style="text-decoration: none;" href="#" onclick="addUser()">增加</a></button>
            </div>
        </div>
        </div>
    <div id="GG" style="height: 50%;width:100%;" title="轮胎列表" >
        <iframe scrolling="auto"  frameborder="0"  style="width:100%;height:600px;"></iframe>
    </div>

</div>

 <div id="dlg" class="easyui-dialog" data-options="closed:true,modal:true,iconCls:'icon-add2'" style="width:650px;height:220px;background-color: #bdc4d4">
		<div style="background-color: #ffffff;height:160px;margin:10px;">           
               <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">其他信息</span>
            <table style="width: 100%;height:28%;padding-right: 28px;padding-left: 24px;">
                <tr>
                    <td>
                        车牌号码：
						 </td>
                    <td>
						 <input id="admin_id" style="display:none; width: 150px;" />
                        <input id="up_tel" class="easyui-textbox" style="width: 150px;" />
                    </td>
                    <td>
                        车载终端：
						 </td>
                    <td>
                        <input id="up_phone" class="easyui-combobox"  style="width: 150px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        车轮数：
						 </td>
                    <td>
                        <input id="up_email" class="easyui-combobox"  style="width: 150px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        备注：
						 </td>
                    <td colspan="3">
                        <input id="up_remark" class="easyui-textbox" style="width:450px;" />
                    </td>
                </tr>
				<tr style="text-align: center;margin-top:15px;">
				<td>
				</td>

				<td>
					<button id='updata_save' style="margin-top:10px;"><a style="text-decoration: none;" href="#"></a></button>
				</td>
				<td>
					<button id='updata_close' style="margin-top:10px;"><a style="text-decoration: none" href="#"></a></button>
				</td>
				<td>
				</td>
			</tr>
				
       </table>
	</div>
        </div>
         <div id="addUser" class="easyui-dialog" data-options="closed:true,modal:true,buttons:'#btn_dlg'" style="width:600px;height: 200px;background-color: #bdc4d4">
		<div style="background-color: #ffffff;height:140px;margin:10px;">   
               <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
            <table id="aa" style="width: 100%;height:30%;padding-right: 28px;padding-left: 24px;">
                <tr>
                    <td>
                        车牌号码：
                    </td>
                    <td>
                        <input id="userName" class="easyui-textbox" style="width: 150px;" />
                    </td>
                    <td>
                        车载终端：
                    </td>
                    <td>
                        <input id="userRole" class="easyui-combobox" style="width: 150px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        车轮数：
                    </td>
                    <td>
                        <input id="password" class="easyui-combobox" style="width: 150px;" />
                    </td>
                    <td>
                        备注：
                    </td>
                    <td>
                        <input id="truthName" class="easyui-textbox" style="width: 150px;" />
                    </td>
                </tr>
               <tr style="text-align: center;margin-top:15px;">
				<td>
				</td>

				<td>
					<button id='save' style="margin-top:10px;"><a style="text-decoration: none;" href="#"></a></button>
				</td>
				<td>
					<button id='close' style="margin-top:10px;"><a style="text-decoration: none" href="#"></a></button>
				</td>
				<td>
				</td>
			</tr>
            </table>
		</div>
     </div>
        <div id="alarm" class="easyui-dialog" style="text-align: center;width:310px;height: 163px;background-color: #bdc4d4" data-options="closed:true,modal:true" >
<div style="background-color: #ffffff;height:121px;margin:1px;">		
		<span style="font-size:14px;color:#333333;font-weight: bold;display: inline-block;height: 78px;line-height: 78px;">用户删除无法恢复，确定删除？</span>
        <div  style="width:100%;">
            <button id="sure"></button>
            <button id="cancel"></button>
        </div>
		</div>
		</div>
		

</body>
</html>