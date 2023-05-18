<html>
	<head>
		<title></title>
	</head>

	<body>
		<script type="text/javascript">
			function validateRegForm() {
			  let f_name = document.forms["regForm"]["n_fname"].value;
			  let l_name = document.forms["regForm"]["n_lname"].value;
			  let phone = document.forms["regForm"]["n_phone"].value;
			  let password = document.forms["regForm"]["n_pass"].value;
			  let c_password = document.forms["regForm"]["n_cpass"].value;
			  let mail = document.forms["regForm"]["n_email"].value;
			  let country = document.forms["regForm"]["n_country"].value;
			  let blood_g = document.forms["regForm"]["n_bloodgroup"].value;
			  let date = document.forms["regForm"]["n_dob"].value;
			  let gender = document.forms["regForm"]["gender"].value;
			  
			  if(password != c_password) {
			    alert("Password did not match!!!");
			    return false;
			  }

              if(password == "" || c_password == "") {
			    alert("Password Input Empty!!!");
			    return false;
			  }

			  if (mail == "") {
			    alert("Email Input Empty!!!");
			    return false;
			  }

			  if (gender == "") {
			    alert("Gender Input Empty!!!");
			    return false;
			  }

			  if (blood_g == "") {
			    alert("Blood Group Input Empty!!!");
			    return false;
			  }

			  if (country == "") {
			    alert("Country Input Empty!!!");
			    return false;
			  }

			  if (phone == "") {
			    alert("Phone Input Empty!!!");
			    return false;
			  }

			  if (date == "") {
			    alert("Date Missing!!!");
			    return false;
			  }

			  if (l_name != "") {
			    let len = l_name.length;
 
                for (let i=0; i<len; i++) {
                if (l_name[i] == '0' || l_name[i] == '1' || l_name[i] == '2' || l_name[i] == '3' || l_name[i] == '4' || l_name[i] == '5' || l_name[i] == '6' || l_name[i] == '7' || l_name[i] == '8' || l_name[i] == '9') 
                    {
                alert("Number in Last Name!!!");
                return false;
                    }
                }
			  }

			  if (f_name != "") {
			    let len = f_name.length;
 
                for (let i=0; i<len; i++) {
                if (f_name[i] == '0' || f_name[i] == '1' || f_name[i] == '2' || f_name[i] == '3' || f_name[i] == '4' || f_name[i] == '5' || f_name[i] == '6' || f_name[i] == '7' || f_name[i] == '8' || f_name[i] == '9') 
                    {
                alert("Number in First Name!!!");
                return false;
                    }
                }
			  }

			}

			function validateLoginForm() {
			  let username = document.forms["loginForm"]["u_email"].value;
			  let password = document.forms["loginForm"]["u_password"].value;
			  
			  if (username == "") {
			    alert("Username Input Empty!");
			    return false;
			  }
			  if (password == "") {
			    alert("Password Input Empty!");
			    return false;
			  }
			}

			function validateAdminForm() {
			  let username = document.forms["adminLogin"]["a_email"].value;
			  let password = document.forms["adminLogin"]["a_password"].value;
			  
			  if (username == "") {
			    alert("Username Input Empty!");
			    return false;
			  }
			  if (password == "") {
			    alert("Password Input Empty!");
			    return false;
			  }
			}


		</script>
	</body>

</html>