    function validate() {
      checkName();
      password();
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
        document.getElementById('confirm_password').value && !document.getElementById('password').value == '' && !document.getElementById('confirm_password').value =='') {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
      }
      else if(document.getElementById('password').value !==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
      }
    }
