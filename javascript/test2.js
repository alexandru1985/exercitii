var doSomething = function(test, bar, fn) {
    test = test + 3;
    test = test + 1;
    test = test * 8;
    return fn(test * bar);
}

function sum(test, bar) {

    return test + bar;
}
function product(test, bar) {

    return test * bar;
}
var test = doSomething(2, 2, sum);// 96

var bar = doSomething(3, 2, product);// 112


alert(test);
alert(bar);

// functii anonime. Pentru a se executa scriptul se pune functia inainte de varibile