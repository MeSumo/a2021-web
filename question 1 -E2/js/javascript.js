const checkField = e => {
	if (e.key == "Enter") {
		// Continuer ici...
		let interet = document.querySelector("#field");

		let formData = new FormData();
		formData.append("interet", interet);

		fetch("ajax.php", {
			method : "POST",
			credentials : "include",
			body : formData
		})
		.then(response => response.json())
		.then(response => {
			document.querySelector("#image").src = "images/pictures/"+response["picture"];
			document.querySelector(".match-name").innerHTML = response["name"];
		})
	}
}