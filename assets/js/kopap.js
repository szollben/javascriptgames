function jatek(valasztas) {
                var szamitogepValasztas = Math.floor(Math.random() * 3);
                var lehetosegek = ['ko', 'papir', 'ollo'];
                var szamitogepValasztasa = lehetosegek[szamitogepValasztas];
                var eredmeny;

                if (valasztas == 'ko') {
                    if (szamitogepValasztasa == 'ko') eredmeny = "Döntetlen!";
                    else if (szamitogepValasztasa == 'papir') eredmeny = "A számítógép nyert!";
                    else eredmeny = "Te nyertél!";
                }
                else if (valasztas == 'papir') {
                    if (szamitogepValasztasa == 'papir') eredmeny = "Döntetlen!";
                    else if (szamitogepValasztasa == 'ollo') eredmeny = "A számítógép nyert!";
                    else eredmeny = "Te nyertél!";
                }
                else {
                    if (szamitogepValasztasa == 'ollo') eredmeny = "Döntetlen!";
                    else if (szamitogepValasztasa == 'ko') eredmeny = "A számítógép nyert!";
                    else eredmeny = "Te nyertél!";
                }

                document.getElementById('ko').disabled = true;
                document.getElementById('papir').disabled = true;
                document.getElementById('ollo').disabled = true;
                document.getElementById('eredmeny').innerHTML = "A számítógép " + szamitogepValasztasa + "-t választott. " + eredmeny;
                document.getElementById('uj_jatek').style.display = "inline-block";
            }

            function ujJatek() {
                document.getElementById('ko').disabled = false;
                document.getElementById('papir').disabled = false;
                document.getElementById('ollo').disabled = false;
                document.getElementById('eredmeny').innerHTML = "";
                document.getElementById('uj_jatek').style.display = "none";
            }