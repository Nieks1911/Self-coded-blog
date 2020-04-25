// Telt het aantal character van de content op:
let str = document.querySelector(".content").innerHTML;
let strLength = str.length;

if (strLength > 1000) {
    return;
}