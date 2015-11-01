var test = doSomething(2,2);// 96

var bar = doSomething(3,2);// 112

function doSomething(test, bar) {
    test = test + 3;
    test = test + 1;
    test = test * 8;
    return test*bar;
}
alert(test);
alert(bar);