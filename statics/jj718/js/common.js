// JavaScript Document
$(document).ready(function() {

$("form[name=formsearch]").submit(function(){
var content = $("input[name='q']").val();	
if (content == "" || content=='请输入你需要查询的内容'){
alert("请输入你需要查询的内容！");
$("input[name='txtcontent']").focus();
return false;
}
});

});