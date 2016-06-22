





var linkOne = {id:'0',scale:'1',rotate:'0'};
var linkTwo = {id:'0',scale:'1',rotate:'0'};
var linkThree = {id:'0',scale:'1',rotate:'0'};
var scaleIn = -0.005;
var scaleOut = 0.005;
var rotateRight = 1;
var rotateLeft = -1;

function activate(elem,object){
    clearInterval(object.id);
    object.id = setInterval(animate,50);
    function animate(){
        var positionString = getPosition(elem);
        var scalePosition = positionString[0];
        var rotatePosition = positionString[1];
        var scaleSet = parseFloat(scalePosition);
        var rotateSet = parseFloat(rotatePosition);
        if(scaleSet <= 0.97){
            object.rotate = parseInt(object.rotate) + rotateRight;
            elem.style.transform = 'scale(0.97,0.97) rotate(' + object.rotate + 'deg)';
            if(rotatePosition >= 0.34){
                clearInterval(object.id);
            }
        }else{
            scaleSet += scaleIn;
            elem.style.transform = 'scale(' + scaleSet + ',' + scaleSet + ') rotate(0deg)';
        }
    }
}
function deactivate(elem,object){
    clearInterval(object.id);
    object.id = setInterval(animate,50);
    function animate(){
        var positionString = getPosition(elem);
        var scalePosition = positionString[0];
        var rotatePosition = positionString[1];
        var scaleSet = parseFloat(scalePosition);
        var rotateSet = parseFloat(rotatePosition);
        if(rotatePosition > 0){
            object.rotate = parseInt(object.rotate) + rotateLeft;
            elem.style.transform = 'scale(0.97,0.97) rotate(' + object.rotate + 'deg)';
        }else{
            scaleSet += scaleOut;
            elem.style.transform = 'scale(' + scaleSet + ',' + scaleSet + ') rotate(0deg)';
            if(scalePosition >= 1){
                clearInterval(object.id);
            }
        }
    }
}
function getPosition(elem){
    var position = getComputedStyle(elem).getPropertyValue('transform');
    var arrayString = position.replace('matrix(','[').replace(')',']');
    var array = JSON.parse(arrayString);
    return(array);
}