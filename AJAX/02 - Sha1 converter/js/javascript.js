window.addEventListener("load", () => {
    let textNode = document.querySelector("input");
    textNode.onkeyup = () => {
        let value = textNode.value;

        let formData = new FormData();
        formData.append("input", value);

        fetch("ajax.php", {
            method : "POST",
            credentials : "include",
            body : formData
        })
        .then(response => response.json())
        .then(response => {
            let newDiv = document.createElement("div");
            newDiv.innerHTML = response;

            document.querySelector("#result").appendChild(newDiv);
        })
    }
})