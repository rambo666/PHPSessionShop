function checkForm() {
 
    if (rForm.Name.value == 0)
 
	{
 
	alert ("You didn't enter your first name!");
	return false;
	}

     if (rForm.Surname.value == 0)
 
	{
 
	alert ("You didn't enter your Surname!");
	return false;
	}
     if (rForm.Password.value == 0)
	 
	{
	 
	alert ("You didn't enter your Password!");
	return false;
	}

     if (rForm.PhoneNumber.value == 0)
     	 
     	{
     	 
     	alert ("Please enter your phone number");
     	return false;
	}
      

      if (rForm.Address.value == 0)
          	 
         {
          	 
         alert ("Please enter your Valid Address");
         return false;
	 }

      if (rForm.City.value == 0)
          	 
         {
          	 
         alert ("Please enter your city");
         return false;
	 }
     if (rForm.PostCode.value == 0)
               	 
         {
               	 
         alert ("Please enter your city");
         return false;
	 }



}
