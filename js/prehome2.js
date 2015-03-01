/* prehome2 js in new way of coding in Jquery admin prasanna vijayan team name "penquin" */

function mine_sports() {
	iden_marks = $("#id_marks").val();
	occupation = $("#occupation").val();
	office_address = $("#off_add").val();
	office_phone = $("#off_phone").val();	
	office_pincode = $("#off_pin").val();
	emer_address = $("#emer_add").val();
	emer_phone = $("#emer_phone").val();
	nss_ncc = $("#nc_ns").val();
	sports = $("#sports").val();
	arts = $("#arts").val();


	if(iden_marks == "" ) {
		$(".err_shows").html("Identification Field is empty !");
		return false;
	}

	if(occupation =="")  {
		$(".err_shows").html("Occupation Field is empty !");
		return false;
	}
	
	if(office_address == "")  {
		$(".err_shows").html("Office Address Field is empty !");
		return false;
	}

	if(office_pincode == "")  {
		$(".err_shows").html("Pincode Field is empty !");
		return false;
	}

	if (!Number(office_pincode))  {
		$(".err_shows").html("Pincode  Field must be in Numbers (0-9)");
		return false;
	}
	if(office_phone == "")  {
		$(".err_shows").html("Office phone Field is empty !");
		return false;
	}		
	
	if(!Number(office_phone))  {
		$(".err_shows").html("Office phone Field must be in Numbers (0-9)");
		return false;
	}
	
	if(emer_address == "")  {
		$(".err_shows").html("Emergency Address Field is empty !");
		return false;
	}
	
	if(emer_phone == "")  {
		$(".err_shows").html("Office phone Field is empty !");
		return false;
	}		
	
	if(!Number(emer_phone))  {
		$(".err_shows").html("Office phone Field must be in Numbers (0-9)");
		return false;
	}

	if(nss_ncc == "")  {
		$(".err_shows").html("NCC / NSS  Field is empty !");
		return false;
	}

	if(sports == "")  {
		$(".err_shows").html("Sports Textarea Field is empty !");
		return false;
	}

	if(arts == "")  {
		$(".err_shows").html("Arts Textarea Field is empty !");
		return false;
	}
}


