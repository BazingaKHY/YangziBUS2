<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>��������</title>
    <link href="../jquery-easyui/themes/default/easyui.css" rel="stylesheet" type="text/css">
    <link href="../jquery-easyui/themes/icon.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../jquery-easyui/jquery.min.js"></script>
    <link href="../jquery-easyui/demo.css" rel="stylesheet" type="text/css">
    <link href="../css/homepagecss/usermanger.css" type="text/css" rel="stylesheet">
    <script src="../jquery-easyui/jquery.easyui.min.js" type="text/javascript"></script>
    <script src="../jquery-easyui/locale/easyui-lang-zh_CN.js" type="text/javascript"></script>
    <script type="text/javascript">
        function addUser() {
            $('#addUser').window('open').window('setTitle','������ɫ');
        };
        $(function () {
            $("#rolePower").combobox({
                url:'../../css/homepagecss/chedui.json',
                valueField:'id',
                textField:'text',
                editable:false
            });
            $('#operate').combobox({
                url:'../../css/homepagecss/chedui.json',
                panelHeight:200,
                valueField:'id',
                textField:'text',
                multiple:true,
                formatter:function (row) {
                    var opts = $(this).combobox('options');
                    return '<input type="checkbox" class="combobox-checkbox">' + row[opts.textField];
                    console.log("row",ops.textField);
                }

            })
        })


        function formatOption(value, row, index) {
            return '<a href="#" onclick="editUser('+index+')">�޸�</a> <a href="#" onclick="deletData('+index+')">ɾ��</a>';
        }
        var url;
        function editUser(index) {
            $('#dg').datagrid('selectRow', index);
            console.log("index",index);
            var row = $('#dg').datagrid('getSelected');

            if (row){
                $('#dlg').dialog('open').dialog('setTitle','������ɫ');
                $('#fm').form('load',row);
                url = '';
            }
        };
    </script>
</head>
<body class="easyui-layout" style="width: 100%;height: 100%;background-color: #ffffff">
<div  class="u-content">
    <table id="dg" class="easyui-datagrid"
           data-options="singleSelect:true,url:'../../datagrid_data1.json',method:'get',toolbar:'#tb',striped:'true',pagination:'true'">
        <thead>
        <tr>
            <th data-options="field:'itemid',width:200">�������</th>
            <th data-options="field:'productid',width:220">��������</th>
            <th data-options="field:'listprice',width:200">��ϵ��</th>
            <th data-options="field:'unitcost',width:200">��ϵ�绰</th>
            <th data-options="field:'listprice',width:200">�ֻ�����</th>
            <th data-options="field:'unitcost',width:350">��ϸ��ַ</th>
            <th data-options="field:'unitcost',width:350">˵��</th>
            <th data-options="field:'_operate',width:300,formatter:formatOption">����</th>
        </tr>
        </thead>
    </table>
    <div id="tb" style="margin-bottom: 10px;margin-top: 10px">
        <input type="text" placeholder="��ɫ����"/> <button>����</button> <button>����</button>
        <button style="float: right;"><a style="text-decoration: none;" href="#" onclick="addUser()">����</a></button>
    </div>
    <div id="dlg" class="easyui-dialog" data-options="closed:true,modal:true" style="width:600px;height: 300px;">
        <span id="message">������Ϣ</span><hr/>
        <table id="cc" style="width: 100%;height: 80%;padding-left: 10px;padding-right: 10px">
            <tr>
                <td>
                    ���ƣ�
                    <input class="easyui-textbox" style="display: inline-block;width:45%" type="text"/>
                </td>
                <td>
                    ��ɫȨ�ޣ�
                    <select id="roles" class="easyui-combobox" style="width:45%">
                        <option>ssss</option>
                        <option>?</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td>
                    ����Ȩ�ޣ�
                    <select id="operate" style="width: 45%;">

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    ��ɫ˵����
                    <input class="easyui-textbox" style="display: inline-block;width:45%" type="text"/>
                </td>

            </tr>
        </table>
    </div>
    <div id="addUser" class="easyui-window" data-options="closed:true,modal:true" style="width:600px;height: 300px;">
        <span id="addMessage">������Ϣ</span><hr/>
        <table id="aa" style="width: 100%;height: 80%;padding-right: 10px;padding-left: 10px;">
            <tr>
                <td>
                    �û����ƣ�
                    <input class="easyui-textbox" style="display: inline-block;width:45%" type="text"/>
                </td>
                <td>
                    �û�Ȩ�ޣ�
                    <input id="rolePower" style="width: 150px;" />
                </td>
            </tr>
            <tr>
                <td>
                    ����Ȩ�ޣ�
                    <input>
                </td>
            </tr>
            <tr>
                <td>
                    �û�˵����
                    <input class="easyui-textbox" style="display: inline-block;width:45%" type="text"/>
                </td>

            </tr>
        </table>
    </div>
</div>
</body>
</html>