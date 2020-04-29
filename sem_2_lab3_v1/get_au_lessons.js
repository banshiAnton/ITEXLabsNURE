window.onload = () => {
    const form = document.forms[0]
    form.onsubmit = () => {
        send(form)
        return false
    }
}

async function send(form) {
    const formDate = new FormData(form)
    const response = await fetch('./post_au_lessons.php', {
        method: 'POST',
        body: formDate,
        // headers: formDate.
    })
    const innderHTML = await response.text()
    console.log('[response]', innderHTML)
    displayResult(innderHTML)
}

function displayResult(responseHTML) {
    const div = document.createElement('div')
    div.innerHTML = responseHTML
    document.body.appendChild(div)
}