window.onload = () => {
    const form = document.forms[0]
    form.onsubmit = () => {
        send(form)
        return false
    }
}

async function send(form) {
    const formDate = new FormData(form)
    const response = await fetch('./post_group_lessons.php', {
        method: 'POST',
        body: formDate,
        // headers: formDate.
    })
    const json = await response.json()
    console.log('[response]', json)
    displayResult(json)
}

function displayResult(json) {
    const div = document.createElement('div')
    Object.keys(json).forEach(field => {
        const childSpan = document.createElement('span')
        childSpan.innerText = `${field} = ${json[field]}`
        div.appendChild(childSpan)
    })
    document.body.appendChild(div)
}