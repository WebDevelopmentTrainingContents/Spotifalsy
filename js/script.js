const API_KEY = 'keyaUULmNnYHMqckc'
const URL = `https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Albums?api_key=${API_KEY}`;

const id = window.location.href.split('?id=')[1]
console.log('id = ', id)

const ALBUMURL = `https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Albums/${id}?api_key=${API_KEY}`;
console.log("url = ", ALBUMURL)

if (document.querySelector('#formAddAlbum')) {
    const formAddAlbum = document.querySelector('#formAddAlbum')
    formAddAlbum.addEventListener('submit', function (e) {
        e.preventDefault();

        const payload = new FormData(formAddAlbum);
        const album = payload.get('Album')
        const artiste = payload.get('Artist')
        const price = payload.get('Price')
        const category = payload.get('Category')
        const cover = payload.get('Cover')
        const date = payload.get('Date')
        const linkBuy = payload.get('LinkBuy')
        console.log("Album = ", album)
        console.log("Artiste = ", artiste)
        console.log("price = ", price)
        console.log("category = ", category)
        console.log("cover = ", cover)
        console.log("LinkBUy = ", linkBuy)
        let data = {
            'records': [{
                'fields': {
                    'Album': album,
                    'Artist': artiste,
                    'Price': price,
                    'Category': category,
                    'Cover': cover,
                    'Date': date,
                    'LinkBuy': linkBuy,
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

}

if (document.querySelector('#formUpdateAlbum')) {
    const formUpdateAlbum = document.querySelector('#formUpdateAlbum')
    formUpdateAlbum.addEventListener('submit', function (e) {
        e.preventDefault();

        const payload = new FormData(formUpdateAlbum);
        const album = payload.get('Album')
        const artist = payload.get('Artist')
        const price = payload.get('Price')
        const category = payload.get('Category')
        const cover = payload.get('Cover')
        const date = payload.get('Date')
        const linkBuy = payload.get('LinkBuy')
        console.log("Album = ", album)
        console.log("Artiste = ", artist)
        console.log("price = ", price)
        console.log("category = ", category)
        console.log("cover = ", cover)
        console.log("cover = ", cover)
        console.log("LinkBUy = ", linkBuy)
        let data = {
            'fields': {
            }
        }
        if (album != '') {
            data.fields.Album = album
        }
        if (artist != '') {
            data.fields.Artist = artist
        }
        if (price != '') {
            data.fields.Price = price
        }
        if (category != '') {
            data.fields.Category = category
        }
        if (cover != '') {
            data.fields.Cover = cover
        }
        if (date != '') {
            data.fields.Date = date
        }
        if (linkBuy != '') {
            data.fields.LinkBuy = linkBuy
        }
        console.log(data)
        fetch(ALBUMURL, {
            method: 'PATCH',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then((res) => {
                res.json().then((data) => {
                    if (res.ok) {
                        console.log("Album modifié", data)
                    }
                    else {
                        console.log(data)
                        console.log('status code !=200')
                    }

                })

            })
            .catch((e) => {
                console.log("ERROR ", e.message)
            })
    })
}




