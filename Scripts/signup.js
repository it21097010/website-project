function enableButton()
    {
      if(document.getElementById("checkbox").checked==true)
      {
        document.getElementById("submitBtn").disabled=false;
      }
      else
      {
        document.getElementById("submitBtn").disabled=true;
      }	
        
        
    }

    function checkPassword()
    {
        if(document.getElementById('ConfirmPassword').value==document.getElementById('Password').value){
            document.getElementById('displayMassage').innerHTML='Password is Matching';
           
        }
        else{
            document.getElementById('displayMassage').innerHTML='Password is not Matching';
        
        }
    }