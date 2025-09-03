function startQuiz () {
    var a=Math.round(math.random()*10);
    var b=Math.round(math.random()*10);
    antwoord = prompt ("Hoeveel is " + a + " x " + b +"?");
    if (antwoord==a*b) {
        alert ("Correct!");
    }
}