window.addEventListener("load", () => {
    document.querySelector(".map").onmousemove = e => {
        document.querySelector("#cursor-info").innerText = e.offsetX + "," + e.offsetY;
    }
    setTimeout(getCityStatus, 5000);
})

function getCityStatus(){
    fetch("ajax.php", {
        method : "POST",
        credentials : "include"
    })
    .then(response => response.json())
    .then(data => {
        let ville = document.querySelector("#no-"+data["evt"]);
        if (ville != null){
            ville.style.color = "red";
        }
        setTimeout(getCityStatus, 5000);
    })
}

function fixIncident(city){
    let id = city.id;
    document.querySelector("#"+id).style.color = "green";
}