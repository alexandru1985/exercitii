var globalVar = "This is a global variable.";

var globalFunction = function() {
    
    alert(globalVar);
    globalVar = "Value has been modified.";
};
globalFunction(); 
alert(globalVar);