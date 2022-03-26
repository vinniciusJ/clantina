const goBackButton = document.querySelector('#go-back')

goBackButton.addEventListener('click', () => {
    history.back()
})