
var tempArray = [];
var heightIncrease = 5;
var itemBut = document.querySelectorAll('.buttonID');

itemBut.forEach(itemBut =>{
    itemBut.addEventListener("click", function(){
        infoDivEle = this.parentElement.previousElementSibling;
    
        tempName = infoDivEle.firstElementChild.innerText;
        if(tempArray.includes(tempName)){
            
        } else{
            basketEl = document.getElementById("basketInvis");

            var tempDiv = document.createElement("div");
            tempDiv.classList.add("itemAndQuant");
            
            var tempButton = document.createElement("input");
            tempButton.type = "button";
            tempButton.value = "X";
            tempButton.classList.add("deleteBut")

            var tempText = document.createElement("h3");
            tempText.textContent = tempName;
            tempText.classList.add("textOfItem")

            var tempQuant = document.createElement("input");
            tempQuant.type = "number";
            tempQuant.value = 1;
            tempQuant.min = "1";
            tempQuant.max = "100";
            tempQuant.classList.add("quantButton")

    
            tempDiv.appendChild(tempText);
            tempDiv.appendChild(tempQuant);
            tempDiv.appendChild(tempButton);
            basketEl.appendChild(tempDiv);

            tempArray.push(tempName);

            heightIncrease += 10.2;
            
            tempButton.addEventListener("click", function(){
                tempButton.parentElement.remove();
                heightIncrease -= 10.2;
                document.getElementById("basketVis").style.transform = "translateY(-" + heightIncrease +"vh)";
            });
        }
    });
});

document.getElementById("clickable").addEventListener("click", function(){
    basketEl = document.getElementById("basketInvis");
    if (document.getElementById("basketVis").style.transform == "translateY(-" + heightIncrease +"vh)"){
        document.getElementById("basketVis").style.transform = ""
        basketEl.style.position = "absolute";
        basketEl.style.visibility = "hidden";
    } else{
        document.getElementById("basketVis").style.transform = "translateY(-" + heightIncrease +"vh)";
        basketEl.style.position = "fixed";
        basketEl.style.visibility = "visible";
    }
});
