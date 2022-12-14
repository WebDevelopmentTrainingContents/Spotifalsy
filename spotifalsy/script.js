const API_KEY = 'keyaUULmNnYHMqckc'
const URL = `https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Albums?maxRecords=3&view=Grid%20view&api_key=${API_KEY}`;

const form = document.querySelector('#form')

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const payload = new FormData(form);
    const album = payload.get('Album')
    const artiste = payload.get('Artiste')
    console.log("Album = ", album)
    console.log("Artiste = ", artiste)
    let data = {
        'records': [{
            'fields': {
                'Album': album,
                'Artiste': artiste
            }
        }]
    }
    fetch(URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then((res) => {
            if (res.ok) {
                res.json().then((data) => {
                    console.log("OK", data)
                })
            }
            else {
                console.log('status code !=200')
            }
        })
        .catch((e) => {
            console.log("ERROR ", e.message)
        })
})