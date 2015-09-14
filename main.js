(function () {

    function postLoad() {
        'use strict';


        var shit = document.getElementById("login-label");
        if (shit === null) {
            alert("SSJHIHTITHITHITI");
        }
        else {
            shit.innerHTML = "LOGIN";
        }

        var myshit = document.querySelector(".red");
        if (myshit !== null) {
            myshit.innerHTML += "SHIEEEEET!";
        }
    }

    document.addEventListener("DOMContentLoaded", postLoad);
}) ();