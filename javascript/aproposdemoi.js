let sources = [ "../image/fille_1", "../image/hibou", 
                "../image/fille_fleur"];



let indice = 0;

function next() {
    indice = (indice + 1) % sources.length;
    document.querySelector( "#show" ).src = sources[ indice ];
}



let sources_2 = [ "../image/st_jean_criques_du_rouvier", "../image/nancy_stanislas_3", 
                    "../image/portugal_pont", "../image/nice_massena"
              ];



let indice_2 = 0;

function next_2() {
    indice_2 = (indice_2 + 1) % sources_2.length;
    document.querySelector( "#show_2" ).src = sources_2[ indice_2 ];
}

let sources_3 = [ "../image/livre_viking", "../image/livre_nordique"
              ];



let indice_3 = 0;

function next_3() {
    indice_3 = (indice_3 + 1) % sources_3.length;
    document.querySelector( "#show_3" ).src = sources_3[ indice_3 ];
}






