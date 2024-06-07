let practitioners_select = document.getElementById('practitioners_select');
let btn_form_practitioners = document.getElementById('btn_form_practitioners');
let liste_of_practitioners = document.getElementById('liste_of_practitioners');


//this function creates and adds the cards in the DOME;
function addCard(info) {
    let table_of_svg = [`<svg class="w-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>`, `<svg class="w-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>`, `<svg class="w-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>`]
    let li_master = document.createElement('li');
    li_master.classList.add('h-full')

    let article = document.createElement('article');
    article.classList.add("rounded-2xl", "border-2", "border-tonal", "flex", "justify-center", "items-center", "flex-col", "h-full", "test");

    let h2 = document.createElement('h2');
    h2.classList.add("text-secondary", "text-3xl", "font-title", "m-1", "flex", "flex-wrap", "flex-col", "items-center", "justify-center");

    let span = document.createElement('span');
    span.classList.add('text-xl', 'ml-1');

    let ul = document.createElement('ul');

    let a = document.createElement('a');
    a.classList.add('text-xl');

    //---this code generates the full ul ---//
    for (let i = 1; i <= 4; i++) {
        let li = document.createElement('li');
        li.classList.add('flex', 'flex-row', 'items-center', 'text-xl')
        let address = document.createElement("address");
        let p = document.createElement('p');
        p.classList.add('text-xl');
        let tmp = table_of_svg[i];
        if (i === 1) {
            if (info.libelle_profession === null || info.libelle_profession === undefined) {
                p.textContent = `n'a pas de proféssion`
            } else {
                p.textContent = `${info.libelle_profession}`
            }
            li.append(p)
            ul.append(li)
        } else if (i === 2) {
            if (info.column_10 === null || info.column_10 === undefined) {
                a.textContent = `il n'y a pas de numéro`
            } else {
                a.textContent = `${info.column_10}`
            }
            li.append(a)
            ul.append(li)
        } else if (i === 3) {
            if (info.addresse === null || info.addresse === undefined) {
                p.textContent = `il n'y a pas d'adresse`
            } else {
                p.textContent = `${info.addresse}`
            }
            address.append(p)
            li.append(address)
            ul.append(li)
        } else if (i === 4) {
            p.textContent = `${info.commune}`
            li.append(p)
            ul.append(li)
        }
    }
    //----------------------------------------------//

    span.textContent = `(${info.civilite})`
    h2.textContent = `${info.nom}`
    h2.append(span)
    article.append(h2, ul);
    li_master.append(article);
    liste_of_practitioners.append(li_master)
}

// this function will return to us and display all practiens 
function not_sort() {
    fetch('https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/medecins@public/records?select=civilite%2C%20column_10%2C%20nom%2C%20libelle_profession%2C%20adresse%2Ccommune&limit=-1&timezone=Europe%2FParis')
        .then(res => res.json())
        .then(res => {
            console.log(res);
            res.results.forEach(e => {
                addCard(e);
            });
        })
}

// cette fonction vas ajouter les option du select
fetch('https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/medecins@public/records?select=libelle_profession%20&where=libelle_profession%20IS%20NOT%20NULL&group_by=libelle_profession%20&limit=-1&timezone=Europe%2FParis')
    .then(res => res.json())
    .then(res => {
        res.results.forEach(e => {
            let option = document.createElement('option');
            option.value = `${e.libelle_profession}`;
            option.textContent = `${e.libelle_profession}`;
            practitioners_select.append(option)
        })
    })

not_sort()

// this event updates the cardre according to the select
btn_form_practitioners.addEventListener('click', (e) => {
    e.preventDefault();
    fetch(`https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/medecins@public/records?select=civilite%2C%20column_10%2C%20nom%2C%20libelle_profession%2C%20adresse%2Ccommune&where=libelle_profession%20%3D%20%22${practitioners_select.value}%22&limit=-1&timezone=Europe%2FParis`)
        .then(res => res.json())
        .then(res => {
            //--- this piece of code is used to delete all the old cards ---//
            [...liste_of_practitioners.children].forEach(f => {
                f.remove()
            });
            //-------------------------------------------------------------//

            // this code generates the new card according to the select 
            //-------------------------------------------------------------//
            if (practitioners_select.value === 'default') {
                not_sort()
            } else {
                res.results.forEach(res => {
                    addCard(res)
                })
            }
            //-------------------------------------------------------------//
        })
})

