var galaxytool=window.galaxytool||{};
galaxytool.AllyInfo={store1:null,changeAllyStatus:function(a,c){var b=parseInt(a);1>b||require(["dojo/request","dojo/dom-class","galaxytool/MessageHandling"],function(a,e,d){a.post("ajax/ajax_stats.php?type=change_alliance&alliance_id="+b+"&new_status="+c,{handleAs:"json"}).then(function(a){null!=a.messages&&(new d(a.messages,"../images")).showMessages();!0==a.result&&e.add("pn_"+b,c)},function(a){console.log("Error:");console.log(a)})})},centeredFormatter:function(a,c,b){b.customClasses.push("centered_text");
return a},scoreFormatter:function(a,c,b){b.customClasses.push("centered_text");return a=galaxytool.General.numberFormat(a)},playerFormatter:function(a,c,b){b.customClasses.push("centered_text");b.customClasses.push("hyperlink");c=grid1.getItem(c).dipl_status;"nothing"!=c&&(a='<span class="'+c+'">'+a+"</span>");return a},memberCellClick:function(a){0==a.cellIndex&&(a="playerinformation.php?id="+a.grid.getItem(a.rowIndex).player_id,window.location.href=a)}};
function galaxytool_allyinformation_init(){}
require("dojo/parser dojo/ready dojo/on dojo/dom dojo/dom-attr dijit/registry dojo/dom-style dojo/query dojo/data/ItemFileReadStore dojo/NodeList-dom dijit/Dialog dijit/TooltipDialog dijit/TitlePane dijit/layout/ContentPane dijit/layout/BorderContainer dijit/layout/TabContainer dijit/form/DropDownButton dijit/form/Select dijit/form/Textarea dojox/grid/DataGrid".split(" "),function(a,c,b,h,e,d,f,k,g){c(function(){b(d.byId("reporttooltip"),"MouseLeave",galaxytool.ReportFetch.closeReportTooltip);b(d.byId("reporttooltip"),
"MouseOver",galaxytool.ReportFetch.reportTooltipMouseOver);var a=window.location.hash;if(""!=a)try{a=a.replace(/#select_/,""),d.byId("tabcontainer").selectChild(d.byId(a))}catch(c){}tabcontainer.watch("selectedChildWidget",function(a,b,c){window.location.hash="#select_"+c.id;f.set("messageArea","display","none")});galaxytool.AllyInfo.store1=new g({data:alliance_member});galaxytool.AllyInfo.store1.comparatorMap={};galaxytool.AllyInfo.store1.comparatorMap.playername=function(a,b){return a.localeCompare(b)};
galaxytool.AllyInfo.store1.comparatorMap.score=galaxytool.General.compareInteger;galaxytool.AllyInfo.store1.comparatorMap.economy=galaxytool.General.compareInteger;galaxytool.AllyInfo.store1.comparatorMap.fleet=galaxytool.General.compareInteger;galaxytool.AllyInfo.store1.comparatorMap.research=galaxytool.General.compareInteger;grid1.setStore(galaxytool.AllyInfo.store1);b(grid1,"CellClick",galaxytool.AllyInfo.memberCellClick)})});
