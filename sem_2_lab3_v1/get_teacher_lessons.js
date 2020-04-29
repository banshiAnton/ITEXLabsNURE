window.onload = () => {
    const form = document.forms[0]
    form.onsubmit = () => {
        send(form)
        return false
    }
}

async function send(form) {
    const formDate = new FormData(form)

    const xhr = new XMLHttpRequest()

    xhr.open('POST', './post_teacher_lessons.php')

    xhr.send(formDate)

    xhr.onload = () => {
        console.warn('[Resp]', xhr.status, xhr.responseXML)
        displayResult(xhr.responseXML)
    }
}

function displayResult(xmlResponse) {
    const div = document.createElement('div')
    const rows = xmlResponse.firstChild.children;
    for (let row of rows) {
        const field = row.children[0].innerHTML
        const value = row.children[1].innerHTML
        const childSpan = document.createElement('span')
        childSpan.innerText = `${field} = ${value}`
        div.appendChild(childSpan)
    }
    document.body.appendChild(div)
}