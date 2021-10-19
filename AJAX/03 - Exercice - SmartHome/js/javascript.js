function updateLights() {
    fetch("ajax.php")
    .then(response => response.json())
    .then(response => {
        //console.log(response);
        response.forEach(element => {
            var light = element["name"];
            if (element["status"] === 1){
                document.querySelector("#"+light).src = "img/light-on.png";
            }
            else{
                document.querySelector("#"+light).src = "img/light-off.png";
            }
        })
    })
}

window.addEventListener("load", () => {
    updateLights();
    setInterval(updateLights, 5000);
})