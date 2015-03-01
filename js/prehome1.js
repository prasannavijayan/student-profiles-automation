/*javascript or jquery for the prehome design's */

function personal_det() {
	pname = $("#pname").val();
	regnumber = $("#regnumber").val();
	course = $("#course").val();
	dept = $("#dept").val();
	address = $("#raddress").val();
	pincode = $("#pincode").val();
	phoneno = $("#phoneno").val();
	emailid = $("#pemailid").val();
	date = $("#date").val();
	month = $("#month").val();
	year = $("#year").val();
	sex = $("#sex").val();
	year_ad = $("#ayear").val();
	year_le = $("#lyear").val();
	height = $("#high").val();
	weight = $("#weight").val();
	blood_group = $("#bloodtype").val();
	

	if(pname == "" ) {
		$("#err_shows").html("<font color=red size=2>* Parent's name Field is empty</font>");
		return false;
	}
	
	if(regnumber == "") { 
		$("#err_shows").html("<font color=red size=2>* Register Number Field is empty</font>");
		return false;
	}
	
	if(!Number(regnumber)) { 
		$("#err_shows").html("<font color=red size=2>* Register Number must filled with Numbers (0-9)</font>");
		return false;
	}
	
	if(regnumber.length < 11) { 
		$("#err_shows").html("<font color=red size=2>* Register Number must be atleast contains 10 numbers</font>");
		return false;
	}

	if(course == "I am doing") { 
		$("#err_shows").html("<font color=red size=2>* course Field is empty</font>");
		return false;
	}

	
	if(dept == "I am doing") { 
		$("#err_shows").html("<font color=red size=2>* dept Field is empty</font>");
		return false;
	}

		
	if(address == "") { 
		$("#err_shows").html("<font color=red size=2>* Address Field is empty</font>");
		return false;
	}
		
		
	if(pincode == "") { 
		$("#err_shows").html("<font color=red size=2>* Pincode Field is empty</font>");
		return false;
	}

	if(phoneno == "") { 
		$("#err_shows").html("<font color=red size=2>* Phone no Field is empty</font>");
		return false;
	}
	

	 atpos=emailid.indexOf("@");
	 dotpos=emailid.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailid.length)
  	{ 		
		$("#err_shows").html("<font color=red size=2>* Enter the Valid Email id</font>");
		return false;
  	}
	
	
	if(date == "DD") { 
		$("#err_shows").html("<font color=red size=2>* Date Field is empty</font>");
		return false;
	}
	
	if(month == "MM") { 
		$("#err_shows").html("<font color=red size=2>* Month Field is empty</font>");
		return false;
	}
	
	if(year == "YYYY") { 
		$("#err_shows").html("<font color=red size=2>* Year Field is empty</font>");
		return false;
	}
	
	if(sex == "I am") { 
		$("#err_shows").html("<font color=red size=2>* Sex Field is empty</font>");
		return false;
	}
	
	if(year_ad == "YYYY") { 
		$("#err_shows").html("<font color=red size=2>* Year of admission Field is empty</font>");
		return false;
	}
	if(year_le == "YYYY") { 
		$("#err_shows").html("<font color=red size=2>* Year of leaving Field is empty</font>");
		return false;
	}
	
	if(height == "" ) { 
		$("#err_shows").html("<font color=red size=2>* Height Field is empty</font>");
		return false;
	}
	
	if(weight == "" ) { 
		$("#err_shows").html("<font color=red size=2>* Weight Field is empty</font>");
		return false;
	}	
	
	if(blood_group == "I have" ) { 
		$("#err_shows").html("<font color=red size=2>* Blood Group Field is empty</font>");
		return false;
	}
	
}
