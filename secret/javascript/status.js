dojo.require("dijit.layout.TabContainer");dojo.require("dojox.layout.ContentPane");dojo.require("dijit.form.Select");dojo.require("dijit.Tooltip");dojo.require("dijit.form.NumberTextBox");dojo.require("dojo.parser");var last_planets_load=0;
function galaxytool_select_galaxy(b){dojo.byId("galaxy_status_content").innerHTML='<img src="../images/loading_small.gif">';dojo.xhrPost({url:"ajax/ajax_status_galaxy.php?type=get_galaxy&galaxy="+b,handleAs:"text",load:function(a){dojo.byId("galaxy_status_content").innerHTML=a;dojo.parser.parse(dojo.byId("galaxy_status_content"));dojo.query(".startsHidden").style("opacity",100).removeClass("startsHidden")},error:function(a){console.log("Error:");console.log(a)}})}
function galaxytool_planet_changed(){if(!("Error"==dijit.byId("planets").get("state")||"Incomplete"==dijit.byId("planets").get("state"))){var b=dijit.byId("planets").get("value");b!=last_planets_load&&(dojo.byId("planets_info").innerHTML='<img src="../images/loading_small.gif">',dojo.xhrPost({url:"ajax/ajax_status_planets.php?planets="+b,handleAs:"text",load:function(a){dojo.byId("planets_info").innerHTML=a;last_planets_load=b},error:function(a){console.log("Error:");console.log(a)}}))}}
function galaxytool_handle_enter(b){null==b||b.keyCode!=dojo.keys.ENTER||galaxytool_planet_changed()}function galaxytool_status_scroll_galaxy(b){var a=dijit.byId("reload_status_tab2").get("value");!0==b?a++:a--;0<a&&dijit.byId("reload_status_tab2").set("value",a)}
function cursorevent(b){if("#select_tab2"==window.location.hash){if(b.keyCode==dojo.keys.LEFT_ARROW){var a=dijit.byId("reload_status_tab2").get("value");a--;0<a&&dijit.byId("reload_status_tab2").set("value",a)}b.keyCode==dojo.keys.RIGHT_ARROW&&(a=dijit.byId("reload_status_tab2").get("value"),a++,dijit.byId("reload_status_tab2").set("value",a))}}function galaxytool_tab2_loaded(){galaxytool_select_galaxy(dijit.byId("reload_status_tab2").get("value"))}
function galaxytool_status_init(){var b=window.location.hash;if(""!=b)try{b=b.replace(/#select_/,""),dijit.byId("tabcontainer").selectChild(dijit.byId(b))}catch(a){}dojo.connect(dijit.byId("tab2"),"onDownloadEnd",galaxytool_tab2_loaded);dojo.subscribe("tabcontainer-selectChild",function(a){window.location.hash="#select_"+a.get("id");dojo.byId("messageArea").style.display="none"})}dojo.ready(galaxytool_status_init);
