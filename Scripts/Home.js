function changeImage(){
	var Img=document.getElementById("ImgChange");
	var Htext=document.getElementById("body_text")
	if (Img.src.match("Images/bodyImage1.jpg")){
		Img.src="Images/bodyImage2.jpg";
		Htext.innerHTML="<br>We do understand your desires <br>and <br>we are bound to fulfil your needs <br>with our products";
	
	}
	else if(Img.src.match("Images/bodyImage2.jpg")){
		Img.src="Images/bodyImage3.jpg";
		Htext.innerHTML="Ad Spaces is an award wininng <br>guarented company that combines <br>creativity,technology,and <br>trustworthy service <br>under one roof";
	
	}
	else if ((Img.src.match("Images/bodyImage3.jpg"))){
		Img.src="Images/bodyImage4.jpg";
		Htext.innerHTML="<br>Join with us to improve your business<br>We have a qualified team to<br> create your content  <br>AS YOU WISH </p>"
	}
	else {
		Img.src="Images/bodyImage1.jpg";
		Htext.innerHTML="We have created content that <br>has insprie many peoples <br>We provide profecational Services on <br>Creating Advertisment<br>Creating Video<br>Creating Banner</p>"
		
	}
}
setInterval(changeImage,5000);