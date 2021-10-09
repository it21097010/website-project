function changeImage1(){
    var img=document.getElementById("image1");

    if(img.src.match("Images/8k_video.png")){
        img.src="Images/8k_price.jpg";
    }
    else if(img.src.match("Images/8k_price.jpg")){
        img.src="Images/8k_video.png";
    }
}
function changeImage2(){
    var img=document.getElementById("image2");

    if(img.src.match("Images/4k_video.png")){
        img.src="Images/4k_price.jpg";
    }
    else if(img.src.match("Images/4k_price.jpg")){
        img.src="Images/4k_video.png";
    }
}
function changeImage3(){
    var img=document.getElementById("image3");

    if(img.src.match("Images/2k_video.png")){
        img.src="Images/2k_price.png";
    }
    else if(img.src.match("Images/2k_price.png")){
        img.src="Images/2k_video.png";
    }
}
