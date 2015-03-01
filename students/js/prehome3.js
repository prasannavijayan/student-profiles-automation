/* jquery to enable the diplomo course table and check boxes */

function school_details() {

	may = $("#may").val();
	nas = $("#nas").val();
	pm = $("#pm").val();
	may2 = $("#may2").val();
	nas2 = $("#nas2").val();
	pm2 = $("#pm2").val();
	maths = $("#mat").val();
	physics = $("#phy").val();
	chemistry = $("#che").val();

	if(may == "") {
		$(".err_shows").html("Fill month and year Field for 10th");
		return false;
	}

	if(nas == "") {
		$(".err_shows").html(" Name of the Institution Field is empty for 10th");
		return false;
	} 

	if(pm == "") {
		$(".err_shows").html("percentage Field is empty for 10th");
		return false;
	} 
	if(may2 == "") {
		$(".err_shows").html("Fill month and year Field for 12th");
		return false;
	}

	if(nas2 == "") {
		$(".err_shows").html(" Name of the Institution Field is empty for 12th");
		return false;
	} 

	if(pm2 == "") {
		$(".err_shows").html("percentage Field is empty for 12th");
		return false;
	} 

	if(maths == "") {
		$(".err_shows").html("Maths Field is empty ");
		return false;
	} 
	
	if(!Number(maths)) {
		$(".err_shows").html("Maths Field Must be filled with numbers (0-9) also it must be under 200 ");
		return false;
	} 
	
	if(physics == "") {
		$(".err_shows").html("physics Field is empty ");
		return false;
	} 
	
	if(!Number(physics))  {
		$(".err_shows").html("Physics Field Must be filled with numbers (0-9) also it must be under 200 ");
		return false;
	} 
	
	if(chemistry == "") {
		$(".err_shows").html("chemistry Field is empty ");
		return false;
	} 
	
	if(!Number(chemistry)) {
		$(".err_shows").html("chemistry Field Must be filled with numbers (0-9) also it must be under 200 ");
		return false;
	} 
}
