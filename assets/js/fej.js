function fejIras() {
			// Véletlenszerű szám generálása 0 és 1 között
			let eredmeny = Math.floor(Math.random() * 2);

			// Ha a véletlenszerű szám 0, akkor fej, ha 1, akkor írás
			if (eredmeny === 0) {
				document.getElementById("eredmeny").innerHTML = "Fej!";
			} else {
				document.getElementById("eredmeny").innerHTML = "Írás!";
			}
		}