const practitioners_select = document.getElementById('practitioners_select');
const btn_form_practitioners = document.getElementById('btn_form_practitioners');
const liste_of_practitioners = document.getElementById('liste_of_practitioners');


//this function creates and adds the cards in the DOM //;
function addCard(info) {
    const li_master = document.createElement('li');
    li_master.classList.add('h-full')

    const article = document.createElement('article');
    article.classList.add("rounded-2xl", "border-2", "border-tonal", "flex", "justify-center", "items-center", "flex-col", "h-full", "test");

    const h2 = document.createElement('h2');
    h2.classList.add("text-secondary", "text-3xl", "font-title", "m-1", "flex", "flex-wrap", "flex-col", "items-center", "justify-center");

    const span = document.createElement('span');
    span.classList.add('text-xl', 'ml-1');

    const ul = document.createElement('ul');

    const a = document.createElement('a');
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

// this function will return to us and display all practiens //
function notSort() {
    fetch('https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/medecins@public/records?select=civilite%2C%20column_10%2C%20nom%2C%20libelle_profession%2C%20adresse%2Ccommune&limit=-1&timezone=Europe%2FParis')
        .then(res => res.json())
        .then(res => {
            console.log(res);
            res.results.forEach(e => {
                addCard(e);
            });
        })
}

// this function will add the select options //
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

notSort()

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
                notSort()
            } else {
                res.results.forEach(res => {
                    addCard(res)
                })
            }
            //-------------------------------------------------------------//
        })
})

