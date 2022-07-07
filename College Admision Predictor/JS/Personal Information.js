$(document).ready(function()
{
	$(".new").slideDown(2000);			
});
			
			
function show()
{
	var input = document.getElementsByName('array[]');
	
	var name = input[0],
		passportNum = input[1];
		
	document.getElementById("test1").innerHTML = name.value; 
	document.getElementById("test2").innerHTML = passportNum.value;
		
};

		