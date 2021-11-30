window.addEventListener("load", () => {
    changePage();
})

let pageNumber = 0;
function changePage(){
    pageNumber += 1;
    let formData = new FormData();
    formData.append("page", pageNumber);

    fetch("ajax.php", {
        method : "POST",
        credentials : "include",
        body : formData
    })
    .then(response => response.json())
    .then(data => {
        document.querySelector("#table").innerHTML = "";
        let titleTR = document.createElement("tr");
        let th1 = document.createElement("th");
        th1.innerHTML = "Date";
        let th2 = document.createElement("th");
        th2.innerHTML = "Gagnant";
        let th3 = document.createElement("th");
        th3.innerHTML = "Perdant";
        titleTR.appendChild(th1);
        titleTR.appendChild(th2);
        titleTR.appendChild(th3);
        document.querySelector("#table").appendChild(titleTR);
        data.forEach(element => {
            let newTR = document.createElement("tr");
            let td1 = document.createElement("td");
            td1.innerHTML = element["date"];
            let td2 = document.createElement("td");
            td2.innerHTML = element["winner"];
            let td3 = document.createElement("td");
            td3.innerHTML = element["looser"];
            newTR.appendChild(td1);
            newTR.appendChild(td2);
            newTR.appendChild(td3);
            document.querySelector("#table").appendChild(newTR);
        });
    })
}