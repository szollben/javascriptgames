var szam = 0;
            var eltalalt = false;
            function indit(){
                if (szam == 0 || eltalalt){
                    szam = Math.round(Math.random()*100)+1;
                    uzen.innerHTML = "Kezdhetjük!";
                }
                else uzen.innerHTML = "Már gondoltam."
            }
            function tippeles(){
                var tippSzam = tipp.value;
                if (tippSzam < 1 || tippSzam > 100) uzen.innerHTML = "Nem jó!";
                else {
                    if (szam == tippSzam){
                        eltalalt = true;
                        uzen.innerHTML = "ELTALÁLTAD!!!";
                    }
                    else if (szam > tippSzam) uzen.innerHTML = "Nagyobbra gondoltam";
                    else uzen.innerHTML = "Kisebbre gondoltam";
                }
            }