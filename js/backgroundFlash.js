





function switchImage(currentImage){

     var timeOut;
     if(document[currentImage].src != "http://localhost:8080/www.daniswa.net/indexBack0.png"){
          document[currentImage].src = "indexBack0.png";
          timeOut = setTimeout("switchImage('" + currentImage + "')", Math.floor(Math.random() * 4000));
     }else{
          document[currentImage].src = "indexBack1.png";
          timeOut = setTimeout("switchImage('" + currentImage + "')", 75);
     }
}