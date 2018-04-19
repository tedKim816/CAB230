    function validate() {
      var phone_number = document.getElementById("phone_num").value;

      var nameValidation = checkName();
      var phoneValidation = phonenumber(phone_number);
      var passwordValidation = password();

      if(nameValidation && phoneValidation && passwordValidation) {
        document.getElementById("sign_up_form").submit();
      } else {
        document.getElementById("sign_up_form").addEventListener('submit', function(e) {
          e.preventDefault();
        });
      }
    }

    function checkName() {
      var empt = document.form1.text1.value;
      if (empt == "") {
        document.getElementById("surnameMissing").style.display = "block";
        return false;
      } else {
        document.getElementById("surnameMissing").style.display = "hidden";
        return true;
      }
    }

    function password() {
      if (document.getElementById('password').value === document.getElementById('confirm_password').value &&
          document.getElementById('password').value !== '' && document.getElementById('confirm_password').value !== '') {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').style.display = 'block';
        document.getElementById('message').innerHTML = 'Matching';
        return true;
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').style.display = 'block';
        document.getElementById('message').innerHTML = 'Not Matching';
        return false;
      }
    }

    function phonenumber(inputtxt) {
      if (!/^[0-9]{9}$/.test(inputtxt) ) {
        document.getElementById("messagephone").style.display = "block";
        document.getElementById('messagephone').style.color = 'red';
        document.getElementById('messagephone').innerHTML = 'Not Valid Number';
        return false;
      }
      else {
        document.getElementById("messagephone").style.display = "hidden";
        return true;
      }
    }
