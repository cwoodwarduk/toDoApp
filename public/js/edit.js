
let buttons = document.querySelectorAll('.editButton')


buttons.forEach(function(button){
    // console.log(button)
    button.addEventListener('click', function(e){
        e.preventDefault()
        console.log(e.target.parentElement.childNodes[3])
        let edit = e.target.parentElement.childNodes[3]
        if (edit.classList.contains('visible') === false){
            edit.classList.add('visible')
        } else if (edit.classList.contains('visible')) {
            edit.classList.remove('visible')
        }
    })
})