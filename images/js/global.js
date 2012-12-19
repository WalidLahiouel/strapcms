var Init = {
	"Motto":function(){
		var min = $("#mottoUsername").text().length *7;
		var width = 494 -min -15;
		$("#mottoEditer").css("width", width +"px");
	},
	"Browsers":function(){
		if ($.browser.mozilla == true || $.browser.msie == true){
			$(document.head).append('<link type="text/css" rel="stylesheet" href="./style/fix.css" />');
		}
	},
	"Search":function(){
		$("#searchbox").click(function() {
			$(this).val("");
		});
		$("#searchbox").blur(function() {
			if ($(this).val() == ""){
				$(this).val("Search for a Habbo");
			}
		});
	},
	"Topstory":function(){
		var curnews = 1
		function move(id){
			$("#topstory li:nth-child("+curnews+")").fadeOut("slow");
			curnews = (id == "-") ? curnews -1 : curnews +1;
			if (curnews == 4){
				curnews = 1;
			}
			else if (curnews == 0){
				curnews = 3;
			}
			$("#topstory li:nth-child("+curnews+")").fadeIn("slow");
			$("#ts-controler-status").text(curnews+"/3");
		}
		setInterval(function(){			
			move("+")
		}, 3000);
		$("#ts-controler").mouseover(function (){
			$("#ts-controler").css("display","block");
		});
		$("#topstory").mouseover(function (){
			$("#ts-controler").css("display","block");
		});
		$("#ts-controler").mouseout(function (){
			$("#ts-controler").css("display","none");
		});
		$("#topstory").mouseout(function (){
			$("#ts-controler").css("display","none");
		});
		$("#ts-controler-left").click(function (){
			move("-");
		});
		$("#ts-controler-right").click(function (){
			move("+");
		});
	}
}
$(function(){
	$("#motto").click(function (){
		$("#mottoText").css("display","none");
		$("#mottoEditer").css("display","block");
		$("#mottoEditer").focus();
	});
	function UpdateMotto(){
		var Motto = $("#mottoEditer").val();		
		$.ajax({
			"url": "./ajax/updateMotto.php",
			"type": "POST",
			"data": ({"motto": Motto}),
			"error":function() {alert("Somethings going wrong"); }
		});
				
		$("#mottoText").css("display","block");
		$("#mottoEditer").css("display","none");
		$("#mottoText").text(Motto);
	}
	$("#mottoEditer").blur(function (){
		UpdateMotto();
	});
	$("#mottoEditer").keyup(function (event){
		if (event.which == 13){
			$(this).blur();
		}
		return;
	});
	
	Init.Motto();
	Init.Browsers();
	Init.Search();
	Init.Topstory();
});