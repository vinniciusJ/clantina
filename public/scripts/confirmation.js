const discardModal = document.querySelector('#confirmation')

const showDiscardAlert = () => {
    discardModal.showModal()
    
    const [ continueButton, exitButton ] = [...discardModal.querySelectorAll('section footer button')]

    continueButton.addEventListener('click', () => {
        discardModal.close()

        document.body.style.overflow = 'initial'
    })

    exitButton.addEventListener('click', () => {
        history.back()

        document.body.style.overflow = 'initial'
    })

    document.body.style.overflow = 'hidden'
}

goBackButton.removeEventListener('click', handleGoBack)

goBackButton.addEventListener('click', () => showDiscardAlert())