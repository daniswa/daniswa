





var picOne = {id:'0',scale:1.0,opacity:0.5};
var picTwo = {id:'0',scale:1.0,opacity:0.5};
var picThree = {id:'0',scale:1.0,opacity:0.5};
var picFour = {id:'0',scale:1.0,opacity:0.5};
var picFive = {id:'0',scale:1.0,opacity:0.5};
var picSix = {id:'0',scale:1.0,opacity:0.5};
var scaleIn = -0.1;
var scaleOut = 0.1;
var transIn = 0.05;
var transOut = -0.05;

function activate(elem,object){
    clearInterval(object.id);
    object.id = setInterval(animate,30);
    elem.style.zIndex = 1;
    function animate(){
        if(object.scale >= 2.0){
            clearInterval(object.id);
        }else{
            object.scale += scaleOut;
            elem.style.transform = 'scale(' + object.scale + ',' + object.scale + ')';
            object.opacity += transIn;
            elem.style.opacity = object.opacity;
        }
    }
}

function deactivate(elem,object){
    clearInterval(object.id);
    object.id = setInterval(animate,20);
    function animate(){
        if(object.scale <= 1){
            elem.style.zIndex = 0;
            clearInterval(object.id);
        }else{
            object.scale += scaleIn;
            elem.style.transform = 'scale(' + object.scale + ',' + object.scale + ')';
            object.opacity += transOut;
            elem.style.opacity = object.opacity;
        }
    }
}