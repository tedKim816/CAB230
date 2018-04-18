    function validate() {
      window.alert("user validation")
      return ture;
    }

    function checkName() {
      if (document.getElementById('question')[0].value == ""){
        return window.alert("empty");
      }
      return true;
    }
    // use the 'window.alert' function to pop up an alert box, then return true}
