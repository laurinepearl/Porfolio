let indice = 0;
let sources = [
    "image/fille_1.jpeg",
    "image/hibou.png",
    "image/fille_fleur.jpeg"
];

let indice_2 = 0;
let sources_2 = [
    "image/st_jean_criques_du_rouvier.jpg",
    "image/nancy_stanislas_3.jpg",
    "image/portugal_pont.jpg",
    "image/nice_massena.jpg"
];

let indice_3 = 0;
let sources_3 = [
    "image/livre_viking.jpg",
    "image/livre_nordique.jpg"
];

function next()
{
    indice = ( indice + 1 ) % sources.length;
    document.querySelector( "#show" ).src = sources[ indice ];
}

function next_2()
{
    indice_2 = ( indice_2 + 1 ) % sources_2.length;
    document.querySelector( "#show_2" ).src = sources_2[ indice_2 ];
}

function next_3()
{
    indice_3 = ( indice_3 + 1 ) % sources_3.length;
    document.querySelector( "#show_3" ).src = sources_3[ indice_3 ];
}