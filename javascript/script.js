    function validate() {
      checkName();
      password();
      phonenumber(inputtxt);
    }

    function checkName() {
      var empt = document.form1.text1.value;
      if (empt == "") {
        document.getElementById("surnameMissing").style.visibility = "visible";
        return false;
      } else {
        document.getElementById("surnameMissing").style.visibility = "hidden";
        return true;
      }
    }

    function password() {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value && !document.getElementById('password').value == '' && !document.getElementById('confirm_password').value == '') {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
      } else if (document.getElementById('password').value !==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
      }
    }

    function phonenumber(inputtxt) {

      var type = document.form1.text2.value;
      var phoneno = /^\d{10}$/;
      if (inputtxt.value.match(phoneno)) {
        document.getElementById('messagephone').style.color = 'red';
        document.getElementById('messagephone').innerHTML = 'not valid number';
        return true;  }
      else {
        document.getElementById("messagephone").style.visibility = "hidden";
        return false;
      }
    }
