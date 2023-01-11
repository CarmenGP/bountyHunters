let gangNumber = document.getElementById("inputGang");
const validation = document.getElementById("validateButton");

function validateGang(inputGang) {

    const regexGang= /^[0-99]+$/;

    return regexGang.test(inputGang);

}

validation.addEventListener("click",function() {

    const gangNr =gangNumber.value;
    if(validateGang(inputGang)) {

        alert("Correct Gang Number");
    }
    else{
        alert("Wrong Gang Number");
        gangNumber.classList.add("error");
    }

});

const gangResponse =document.getElementById("gangResponse");
