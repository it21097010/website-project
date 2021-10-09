function changeImage(){
	var Img=document.getElementById("ImgChange");
	var Htext=document.getElementById("body_text")
	if (Img.src.match("Images/bodyImage1.jpg")){
		Img.src="Images/bodyImage2.jpg";
		Htext.innerHTML="Join with us to improve your business<br>We have a qualified team to<br> create your content as <br>YOU<br> wish ";
	
	}
	else if(Img.src.match("Images/bodyImage2.jpg")){
		Img.src="Images/bodyImage3.jpg";
		Htext.innerHTML="We have a qualified team to<br> create your content as <br>YOU<br> wish ";
	
	}
	else if ((Img.src.match("Images/bodyImage3.jpg"))){
		Img.src="Images/bodyImage4.jpg";
		Htext.innerHTML="Did you know <br>how Important is VISUAL CONTENT<br>We have created content that <br>has insprie many peoples <br>We provide profecational Services on <br><br>Creating Advertisment<br>Creating Video<br>Creating Banner</p>"
	}
	else {
		Img.src="Images/bodyImage1.jpg";
		Htext.innerHTML="Do you know <br>how Important is VISUAL CONTENT<br>We have created content that <br>has insprie many peoples <br>We provide profecational Services on <br><br>Creating Advertisment<br>Creating Video<br>Creating Banner</p>"
		
	}
}
setInterval(changeImage,5000);