$(document).ready(function(){
	
			$("#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_21").hide();
    $("#part_11,#part_12,#part_13,#part_14,#part_15,#part_16,#part_17,#part_18,#part_19,#part_20").hide();


	// next button
	$("#next_1").click(function(){
		$("#part_2").show();
		$("#part_1").slideUp();
    });
	
    $("#next_2").click(function(){
        $("#part_3").show();
        $("#part_2").slideUp();
    });
             $("#next_3").click(function(){
        $("#part_4").show();
        $("#part_3").slideUp();
    });
	
	$("#next_4").click(function(){
        $("#part_5").show();
        $("#part_4").slideUp();
    });
	
	$("#next_5").click(function(){
        $("#part_6").show();
        $("#part_5").slideUp();
    });
	
	$("#next_6").click(function(){
        $("#part_7").show();
        $("#part_6").slideUp();
    });
	
	$("#next_7").click(function(){
        $("#part_8").show();
        $("#part_7").slideUp();
    });
	
	$("#next_8").click(function(){
        $("#part_9").show();
        $("#part_8").slideUp();
    });
	
	$("#next_9").click(function(){
        $("#part_10").show();
        $("#part_9").slideUp();
    });
	$("#next_10").click(function(){
        $("#part_11").show();
        $("#part_10").slideUp();
    });
	$("#next_11").click(function(){
        $("#part_12").show();
        $("#part_11").slideUp();
    });
	$("#next_12").click(function(){
        $("#part_13").show();
        $("#part_12").slideUp();
    });
	
	$("#next_13").click(function(){
        $("#part_14").show();
        $("#part_13").slideUp();
    });
	$("#next_14").click(function(){
        $("#part_15").show();
        $("#part_14").slideUp();
    });
	
	$("#next_15").click(function(){
        $("#part_16").show();
        $("#part_15").slideUp();
    });
	
    $("#next_16").click(function(){
        $("#part_17").show();
        $("#part_16").slideUp();
    });
    
	$("#next_17").click(function(){
        $("#part_18").show();
        $("#part_17").slideUp();
    });
	$("#next_18").click(function(){
        $("#part_19").show();
        $("#part_18").slideUp();
    });
	$("#next_19").click(function(){
        $("#part_20").show();
        $("#part_19").slideUp();
    });
    $("#next_20").click(function(){
        $("#part_21").show();
        $("#part_20").slideUp();
    });
	
	// --------------------------------------
	// back button
	$("#back_1").click(function(){
		$("#part_1").slideDown();
		$("#part_2").slideUp();
        
    });
	
	$("#back_2").click(function(){
        $("#part_2").slideDown();
        $("#part_3").slideUp();
    });
	
	$("#back_3").click(function(){
        $("#part_3").slideDown();
        $("#part_4").slideUp();
    });
		$("#back_4").click(function(){
			$("#part_4").slideDown();
			$("#part_5").slideUp();
    });
	
	$("#back_5").click(function(){
			$("#part_5").slideDown();
			$("#part_6").slideUp();
    });
	
	$("#back_6").click(function(){
			$("#part_6").slideDown();
			$("#part_7").slideUp();
    });
	
	
	$("#back_7").click(function(){
			$("#part_7").slideDown();
			$("#part_8").slideUp();
    });
	
	$("#back_8").click(function(){
			$("#part_8").slideDown();
			$("#part_9").slideUp();
    });
	
	$("#back_9").click(function(){
			$("#part_9").slideDown();
			$("#part_10").slideUp();
    });
	
	$("#back_10").click(function(){
			$("#part_10").slideDown();
			$("#part_11").slideUp();
    });
	
	$("#back_11").click(function(){
			$("#part_11").slideDown();
			$("#part_12").slideUp();
    });
	
	$("#back_12").click(function(){
			$("#part_12").slideDown();
			$("#part_13").slideUp();
    });
	
	$("#back_13").click(function(){
			$("#part_13").slideDown();
			$("#part_14").slideUp();
    });
	$("#back_14").click(function(){
			$("#part_14").slideDown();
			$("#part_15").slideUp();
    });
	
	$("#back_15").click(function(){
			$("#part_15").slideDown();
			$("#part_16").slideUp();
    });
	
	$("#back_16").click(function(){
			$("#part_16").slideDown();
			$("#part_17").slideUp();
    });
    $("#back_17").click(function(){
			$("#part_17").slideDown();
			$("#part_18").slideUp();
    });
    $("#back_18").click(function(){
			$("#part_18").slideDown();
			$("#part_19").slideUp();
    });
	$("#back_19").click(function(){
			$("#part_19").slideDown();
			$("#part_20").slideUp();
    });
    $("#back_20").click(function(){
			$("#part_20").slideDown();
			$("#part_21").slideUp();
    });
	
	//------------------
	// show specific part
$("#show_1").click(function(){
        $("#part_1").slideDown();
        $("#part_17,#part_21,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	
	$("#show_2").click(function(){
        $("#part_2").slideDown();
        $("#part_17,#part_1,#part_21,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_3").click(function(){
        $("#part_3").slideDown();
        $("#part_17,#part_1,#part_2,#part_21,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_4").click(function(){
        $("#part_4").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_21,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_5").click(function(){
        $("#part_5").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_21,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_6").click(function(){
        $("#part_6").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_21,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_7").click(function(){
        $("#part_7").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_21,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_8").click(function(){
        $("#part_8").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_21,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_9").click(function(){
        $("#part_9").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_21,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_10").click(function(){
        $("#part_10").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_21,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_11").click(function(){
        $("#part_11").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_21,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_12").click(function(){
        $("#part_12").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_21,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_13").click(function(){
        $("#part_13").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_21,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_14").click(function(){
        $("#part_14").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_21, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_15").click(function(){
        $("#part_15").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_21,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
	$("#show_16").click(function(){
        $("#part_16").slideDown();
        $("#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_17,#part_18,#part_19,#part_20,#part_21").slideUp();
    });
	$("#show_17").click(function(){
        $("#part_17").slideDown();
        $("#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_18,#part_19,#part_20,#part_21").slideUp();
    });
	$("#show_18").click(function(){
        $("#part_18").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_20,#part_21").slideUp();
    });
    
    $("#show_19").click(function(){
        $("#part_19").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_18,#part_20,#part_21").slideUp();
    });
    
    $("#show_20").click(function(){
        $("#part_20").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_21").slideUp();
    });
	
    $("#show_21").click(function(){
        $("#part_21").slideDown();
        $("#part_17,#part_1,#part_2,#part_3,#part_4,#part_5,#part_6,#part_7,#part_8,#part_9,#part_10,#part_11,#part_12,#part_13,#part_14, #part_15,#part_16,#part_19,#part_18,#part_20").slideUp();
    });
});

