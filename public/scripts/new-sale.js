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
        itemsDataList.forEach(item => {
            if(item.idItemType == event.target.value){
                console.log(item);
                const itemValues = event.target.parentElement.parentElement.childNodes[3].childNodes;
                const qttdInput = itemValues[1].childNodes[3].childNodes[1]
                const unitPrice = itemValues[3].childNodes[3].childNodes[1]
                const subTotal = itemValues[5].childNodes[3].childNodes[1]                    
                qttdInput.setAttribute("max", item.quantity);
                qttdInput.value = 1;
                unitPrice.innerText = item.price;
                subTotal.innerText = item.price;                    
            }
        })                       
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