$(function(){
	//��չ������
	$.extend($.ligerMethos.ComboBox,{
		//��ѡѡ��,ֱ�ӵ��ô˷����Ϳ�����
		setMultiSelect: function (value,text)
	    {
	        var g = this, p = this.options; 
	        text = g.findTextByValue(value);
	        if (p.tree)
	        {
	            g.selectValueByTree(value);
	        }
	        else if (!p.isMultiSelect)
	        {  
	            g._changeValue(value, text);
	            $("tr[value='" + value + "'] td", g.selectBox).addClass("l-selected");
	            $("tr[value!='" + value + "'] td", g.selectBox).removeClass("l-selected");
	        }
	        else
	        {
	            g._changeValue(value, text);
	            if (value != null) {
	                var targetdata = value.toString().split(p.split);
	                $("table.l-table-checkbox :checkbox", g.selectBox).each(function () { this.checked = false; });
	                for (var i = 0; i < targetdata.length; i++) {
						//����Դ���м���������Ϳ�����
	                    $("table.l-table-checkbox tr[value=" + targetdata[i] + "] a.l-checkbox").addClass('l-checkbox-checked');
	                    $("table.l-table-checkbox tr[value=" + targetdata[i] + "] :checkbox", g.selectBox).each(function () { this.checked = true; });
	                }
	            }
	        }
	    }     
   });
});