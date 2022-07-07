$(document).ready(function()
{
	$(".new1").show(1000);
				
	$(".but1").click(function()
	{
		$(".new2").hide(2000);
		$(".new3").hide(2000);
		$(".new1").show(2000);
				
	});
				
	$(".but2").click(function()
	{
		$(".new1").hide(2000);
		$(".new2").show(2000);
		$(".new3").hide(2000);
	});
				
	$(".but3").click(function()
	{
		$(".new1").hide(2000);
		$(".new2").hide(2000);
		$(".new3").show(2000);
	});
				
	$(".add").click(function()
	{
		$(".all").show();
	});
				
	$(".delete1").click(function()
	{
		$(".div1").hide();
	});
				
	$(".delete2").click(function()
	{
		$(".div2").hide();
	});
	
	$(".delete3").click(function()
	{
		$(".div3").hide();			
	});
			
});


//--------------------------------------------------------------

function valid_Form1()
{
	var x = document.forms["myForm1"]["from1"].value;
	var y = document.forms["myForm1"]["to1"].value;
	var i = document.forms["myForm1"]["fdate2"].value;
	var j = document.forms["myForm1"]["ldate"].value;
	
	if (x == "" )
	{
		alert("You Must Fill The Departure Place");
		return false;
	}
	
	else if (y == "" )
	{
		alert("You Must Fill The Arrival Place");
		return false;
	}
	
	else if (i == "" )
	{
		alert("You Must Fill The Deprature Date");
		return false;
	}
	
	else if (j == "" )
	{
		alert("You Must Fill The Return date");
		return false;
	}
	
	else
	{
		alert("You Filld All Blanks Correctely");
		return true;			
	}
			
}

//--------------------------------------------------------------------

function valid_Form2()
{
	var x = document.forms["myForm2"]["from2"].value;
	var y = document.forms["myForm2"]["to2"].value;
	var i = document.forms["myForm2"]["fdate2"].value;

	if (x == "" )
	{
		alert("You Must Fill The Departure Place");
		return false;
	}
	
	else if (y == "" )
	{
		alert("You Must Fill The Arrival Place");
		return false;
	}
	
	else if (i == "" )
	{
		alert("You Must Fill The Deprature Date");
		return false;
	}

	else
	{
		alert("You Filld All Blanks Correctely");
		return true;	
	}
		
}







