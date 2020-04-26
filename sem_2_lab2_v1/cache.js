const requestKey = window.location.pathname + window.location.search
const cached = window.sessionStorage.getItem(requestKey)

console.warn('[key]', requestKey)

document.addEventListener('DOMContentLoaded', () => {
    console.warn('[On load]', cached)
    if (cached) {
        const diwWrapp = document.createElement('div')
        const p = document.createElement('p')
        p.innerHTML = "<br><br><br>Cached request (prev request)"
        diwWrapp.appendChild(p)
        const divContent = document.createElement('div')
        divContent.innerHTML = cached
        diwWrapp.appendChild(divContent)

        document.body.appendChild(diwWrapp)
    }
    const updateCache = document.getElementById('content').innerHTML
    window.sessionStorage.setItem(requestKey, updateCache)
    console.warn('[Update]')
})