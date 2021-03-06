<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>传感器管理</title>
    <link href="../jquery-easyui/themes/default/easyui.css" rel="stylesheet" type="text/css">
    <link href="../jquery-easyui/themes/icon.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../jquery-easyui/jquery.min.js"></script>
    <link href="../jquery-easyui/demo.css" rel="stylesheet" type="text/css">
    <link href="../css/homepagecss/usermanger.css" type="text/css" rel="stylesheet">
    <script src="../jquery-easyui/jquery.easyui.min.js" type="text/javascript"></script>
    <script src="../jquery-easyui/locale/easyui-lang-zh_CN.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
				$('#cancel').bind('click',function(){
				$('#alarm').dialog('close');
			});
			$('#close').bind('click',function(){
				$('#addTire').dialog('close');
			});
			$('#updata_close').bind('click',function(){
				$('#dlg').dialog('close');
			});
			
			$('#all_close').bind('click',function(){
				$('#addalltire').dialog('close');
			});
           

          
			$('#tireBrand').combobox({
				
			})
			$('#all').combobox({
				
			})
			$('#sensor').combobox({
				
			})
			$('#updata_tireBrand').combobox({
				
			})
			$('#update_all').combobox({
				
			})
			$('#updata_sensor').combobox({
				
			})
			$('#all_tireBrand').combobox({
				
			
			})
			$('#all_all').combobox({
				
			
			})
			

        })
        function addTire() {

            $('#addTire').dialog('open').dialog('setTitle','新增轮胎');
		$('#pr').textbox('setValue','500');

        };
        function addalltire() {

            $('#addalltire').dialog('open').dialog('setTitle','批量增加轮胎');
        };
        function formatOption(value, row, index) {
            return '<a href="#" style="text-decoration: none;color: #1c66dc; font-size: 12px; border:1px solid #1c66dc;padding:2px 10px; border-radius:4px; margin-left:20px;" onclick="editUser('+index+')">编辑</a> <a href="#" style="text-decoration: none;color: #efad2c; font-size: 12px; border:1px solid #efad2c;padding:2px 10px; border-radius:4px; margin-left:6px;" onclick="deletData('+index+')">删除</a>';
        }
        var url;
        function editUser(index) {
            $('#dg').datagrid('selectRow', index);
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','新增角色');
                $('#fm').form('load',row);
                url = '';
            }
        }
    </script>
    <style type="text/css">
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
        #all_save{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #all_save:visited,#all_save:link{
            background: url("../css/img/ok_normal.png") no-repeat;

        }
        #all_save button:active,#all_save button:hover{
            background: url("../css/img/ok_seleected.png") no-repeat;

        }
        #all_close{
            border: none;
            width: 60px;
            height: 30px;
            vertical-align: middle;
            margin-right: 10px;
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #all_close:visited,#all_close:link{
            background: url("../css/img/cancel_normal.png") no-repeat;

        }
        #all_close button:active,#all_close button:hover{
            background: url("../css/img/cancel_selected.png") no-repeat;

        }
    </style>
</head>
<body class="easyui-layout" style="width: 100%;height: 100%;background-color: #ffffff">
<div  class="u-content">
    <table id="dg" class="easyui-datagrid"
           data-options="singleSelect:true,url:'../../datagrid_data1.json',method:'get',toolbar:'#tb',striped:'true',pagination:'true'">
        <thead>
        <tr>
            <th data-options="field:'itemid',width:'8%'">编号</th>
            <th data-options="field:'productid',width:'8%'">轮胎编号</th>
            <th data-options="field:'listprice',width:'8%'">传感器编号</th>
            <th data-options="field:'unitcost',width:'10%'">归属厂</th>
            <th data-options="field:'listprice',width:'10%'">轮胎规格</th>
            <th data-options="field:'unitcost',width:'8%'">层级</th>
            <th data-options="field:'listprice',width:'8%'">花纹</th>
            <th data-options="field:'listprice',width:'8%'">品牌</th>
            <th data-options="field:'listprice',width:'10%'">状态</th>
            <th data-options="field:'listprice',width:'10%'">速度上限</th>
            <th data-options="field:'_operate',width:'10%',formatter:formatOption">操作</th>
        </tr>
        </thead>
    </table>
    <div id="tb" style="margin-bottom: 10px;margin-top: 10px;background-color: white;padding-left: 19px;padding-right:39px;line-height: 54px;">
        <input type="text" placeholder="角色名称"/> <button>搜索</button>
        <button style="float: right;margin-top: 15px;"><a style="text-decoration: none;" href="#" onclick="addalltire()">批量增加</a></button> <button style="float: right;margin-top: 15px;"><a style="text-decoration: none;" href="#" onclick="addTire()">增加</a></button>
    </div>
    <div id="dlg" class="easyui-dialog" data-options="closed:true" style="width:650px;height: 400px;background-color: #bdc4d4">
        <div style="background-color: #ffffff;height:340px;margin:10px;">
             <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
            <table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px;">
                <tr>
                    <td>
                        轮胎编码：
                        <input id="update_tireNumber" style="width: 150px;"/>
                    </td>
                    <td>
                        品牌：
                        <input id="update_tireBrand" style="width: 150px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        规格/层级/花纹：
                        <input id="update_all" style="width: 430px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        传感器编号：
                        <input id="update_sensor" style="width: 150px;" />
                    </td>
                    <td>
                        花纹深度：
                        <input id="update_pr" style="width: 150px;" />
                    </td>

                </tr>
				<tr style="text-align: center">
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
    <div id="addTire" class="easyui-dialog" data-options="closed:true" style="width:650px;height: 400px;background-color: #bdc4d4">
        <div style="background-color: #ffffff;height:340px;margin:10px;">
             <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
            <table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px;">
                <tr>
                    <td>
                        轮胎编码：
                    </td>
                    <td>
                        <input id="tireNumber" class="easyui-textbox"  style="width: 150px;"/>
                    </td>
                    <td>
                        品牌：
							</td>
                    <td>
                        <input id="tireBrand" style="width: 150px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        规格/层级/花纹：
                    </td>
                    <td colspan="3">
                        <input id="all" style="width: 430px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        传感器编号：
                    </td>
                    <td>
                        <input id="sensor" style="width: 150px;" />
                    </td>
                    <td>
                        花纹深度：
                    </td>
                    <td>
                        <input id="pr" class="easyui-textbox" style="width: 150px;" />
                    </td>

                </tr>
				 <tr style="text-align: center">
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
    <div id="addalltire" class="easyui-dialog" data-options="closed:true,modal:true,iconCls:'icon-add2'" style="width:650px;height: 300px;background-color: #bdc4d4">
        <div style="background-color: #ffffff;height:240px;margin:10px;">
           <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
            <table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px;">
                <tr>
                    <td>
                        入库开关：
                    </td>
                    <td>
                        <input id="all_tireNumber" style="width: 50px;" type="checkbox"/>
                    </td>
                    <td>
                        品牌：
						</td>
                    <td>
                        <input id="all_tireBrand" style="width: 200px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        规格/层级/花纹：
                    </td>
                    <td colspan="3">
                        <input id="all_all" style="width: 400px;" />
                    </td>
                </tr>
				<tr style="text-align: center">
						<td>
						</td>
						<td>
							<button id='all_save' style="margin-top:10px;"><a style="text-decoration: none;" href="#"></a></button>
						</td>
						<td>
							<button id='all_close' style="margin-top:10px;"><a style="text-decoration: none" href="#"></a></button>
						</td>
						<td>
						</td>
				</tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>