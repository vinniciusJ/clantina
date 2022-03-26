const itemsList = document.querySelector('.items-list')
const itemContainerTemplate = document.querySelector('#item-container')

const discardModal = document.querySelector('#discard-alert')

const addItemButton = document.querySelector('#add-item')
const goBackButton = document.querySelector('#go-back')

let lastItemIndex = 0, currentItemIndex = 0

const createElementFromTemplate = () => {
    const nodeItem = itemContainerTemplate.content.cloneNode(true)

    const container = nodeItem.querySelector('div.item-container')
    const itemSelector = nodeItem.querySelector('select')

    lastItemIndex++
    container.dataset.id = lastItemIndex

    itemSelector.addEventListener('change', event => {
        console.log(event.target.value)
    })

    return nodeItem
}

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

addItemButton.addEventListener('click', () => {
    itemsList.appendChild(createElementFromTemplate())
})

goBackButton.addEventListener('click', () => showDiscardAlert())

//goBackButton.click()