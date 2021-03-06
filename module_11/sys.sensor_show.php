﻿<!DOCTYPE html>
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
		$(function(){
			$('#tireNumber').combobox({
				
			})
			$('#cancel').bind('click',function(){
				$('#alarm').dialog('close');
			});
			$('#close').bind('click',function(){
				$('#addSensor').dialog('close');
			});
			$('#updata_close').bind('click',function(){
				$('#dlg').dialog('close');
			});
			
			$('#all_close').bind('click',function(){
				$('#addallsensor').dialog('close');
			});
			$.ajax({
				url:'../ajaction/v1/?menuid=111011&cmd=qry&t=1',
				type:'GET',
				success:function(data){
					console.log('getdata',data);
				}
			});
			$('#save').bind('click',function(){
				var sensor_no=$('#sensorNumber').textbox('getText');
				var pressure_ul=$('#pressure').textbox('getText');
				var presure_ll=$('#pressure_high').textbox('getText');
				var remark=$('#remark').textbox('getText');
				var temp_ul=$('#tem').textbox('getText');
				var temp_ll=$('#tem_high').textbox('getText');
				$.ajax({
					url:'../ajaction/v1/menuid=111011&cmd=add',
					type:'POST',
					dataType:'json',
					data:{'sensor_no':sensor_no,'pressure_ul':pressure_ul,'presure_ll':presure_ll,'remark':remark,'temp_ul':temp_ul,'temp_ll':temp_ll},
					success:function(data){
						console.log('sensor',data);
					}
				})
			});
			 
		})
	
		function addSensor() {
			
        $('#addSensor').dialog('open').dialog('setTitle','增加传感器信息');
		$('#pressure').textbox('setValue','6.50');
		$('#pressure_high').textbox('setValue','12.50');
		$('#tem').textbox('setValue','-40');
		$('#tem_high').textbox('setValue','125');
        };
		function addallsensor() {
			
          $('#addallsensor').dialog('open').dialog('setTitle','批量增加传感器');
        };
		
        function formatOption(value, row, index) {
                return '<a href="#" style="text-decoration: none;color: #1c66dc; font-size: 12px; border:1px solid #1c66dc;padding:2px 10px; border-radius:4px; margin-left:20px;" onclick="editUser('+index+')">编辑</a> <a href="#" style="text-decoration: none;color: #efad2c; font-size: 12px; border:1px solid #efad2c;padding:2px 10px; border-radius:4px; margin-left:6px;" onclick="deletData('+index+')">删除</a>';
        }

        function editUser(index) {
            $('#dg').datagrid('selectRow', index);
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','新增角色');
              
            }
        }
    </script>
	 <style type="text/css">
	 input{
		-web-kit-appearance:none;
		-moz-appearance: none;
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
           data-options="singleSelect:true,method:'get',toolbar:'#tb',striped:'true',pagination:'true'">
        <thead>
        <tr>
            <th data-options="field:'itemid',width:'10%'">传感器编号</th>
            <th data-options="field:'productid',width:'10%'">传感器代码</th>
            <th data-options="field:'listprice',width:'10%'">胎压上限</th>
            <th data-options="field:'unitcost',width:'10%'">胎压下限</th>
            <th data-options="field:'listprice',width:'10%'">胎温上限</th>
            <th data-options="field:'unitcost',width:'10%'">温度下限</th>
            <th data-options="field:'listprice',width:'20%'">备注</th>
            <th data-options="field:'_operate',width:'10%',formatter:formatOption">操作</th>
        </tr>
        </thead>
    </table>
    <div id="tb" style="margin-bottom: 10px;margin-top: 10px;background-color: white;padding-left: 19px;padding-right:39px;line-height: 54px;">
        <input type="text" placeholder="角色名称"/> <button>搜索</button>
        <button style="float: right;margin-top: 15px;"><a style="text-decoration: none;" href="#" onclick="addallsensor()">批量增加</a></button> <button style="float: right;margin-top: 15px;"><a style="text-decoration: none;" href="#" onclick="addSensor()">增加</a></button>
    </div>
    <div id="dlg" class="easyui-dialog" data-options="closed:true" style="width:600px;height: 360px;background-color: #bdc4d4">
	<div style="background-color: #ffffff;height:300px;margin:10px;">
         <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
        <table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px">
            <tr>
                <td>
                   传感器编号：
				     </td>
                <td>
                    <input id="updata_sensorNumber" class="easyui-textbox" style="width:150px;"/>
                </td>
                <td>
                    压力测量范围：
					  </td>
                <td>
				 <input id="updata_pressure" class="easyui-textbox"  style="width: 60px;" />至<input id="updata_pressure_high " class="easyui-textbox"  style="width:60px;" />
                   
                </td>
            </tr>
            <tr>
                <td>
                    温度测量范围：
					  </td>
                <td>
				 <input id="updata_tem" class="easyui-textbox" style="width: 60px;" />至<input id="updata_tem_high" class="easyui-textbox" style="width:60px;" />
                </td>
            </tr>
            <tr>
                <td>
                    备注：
					  </td>
                <td colspan="3">
                    <input id="updata_remark" class="easyui-textbox" style="width:410px;"/>
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
	<div id="addSensor" class="easyui-dialog" data-options="closed:true,modal:true,iconCls:'icon-add2'" style="width:600px;height: 360px;background-color: #bdc4d4">
		<div style="background-color: #ffffff;height:300px;margin:10px;">
			 <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
			<table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px">
            <tr>
                <td>
                   传感器编号：
				     </td>
                <td>
                    <input id="sensorNumber" class="easyui-textbox"   style="width:150px;"/>
                </td>
                <td>
                    压力测量范围：
					  </td>
                <td>
				  <input id="pressure" class="easyui-textbox"  style="width: 60px;" />至<input id="pressure_high" class="easyui-textbox"  style="width:60px;" />
                 
                </td>
            </tr>
            <tr>
                <td>
                    温度测量范围：
					  </td>
                <td>
				  <input id="tem" class="easyui-textbox" style="width: 60px;" />至<input id="tem_high" class="easyui-textbox" style="width:60px;" />
                </td>
            </tr>
            <tr>
                <td>
                    备注：
					  </td>
                <td colspan="3">
                    <input id="remark" class="easyui-textbox" style="width:410px;" />
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
	<div id="addallsensor" class="easyui-dialog" data-options="closed:true,modal:true,iconCls:'icon-add2'" style="width:600px;height: 360px;background-color: #bdc4d4">
		<div style="background-color: #ffffff;height:300px;margin:10px;">
			 <span style=" display: inline-block; margin-left: 10px; font-size: 14px; margin-top: 10px; font-family: 微软雅黑;">基本信息</span>
			<table style="width: 100%;height: 80%;padding-right: 28px;padding-left: 24px">
            <tr>
                <td>
                   传感器编号：
				     </td>
                <td>
                    <input id="all_sensorNumber" class="easyui-textbox" style="width:80px;"/>-<input id="tireNumber" style="width:35px;"/>
                </td>
                <td>
                    压力测量范围：
					  </td>
                <td>
				<input id="all_pressure" class="easyui-textbox"  style="width: 60px;" />至<input id="all_pressure_high " class="easyui-textbox"  style="width:60px;" />
                </td>
            </tr>
            <tr>
                <td>
                    温度测量范围：
					  </td>
                <td>
				  <input id="all_tem" class="easyui-textbox" style=" width:60px;" />至<input id="all_tem_high" class="easyui-textbox" style="width:60px;" />
					
                </td>
				<td>
				增加轮胎：
				</td>
				<td>
				<input type="checkbox"/>
				</td>
            </tr>
            <tr>
                <td>
                    备注：
					  </td>
                <td colspan="3">
                    <input id="all_remark" class="easyui-textbox" style="width:410px;" />
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
</body>
</html>