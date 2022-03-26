const itemsList = document.querySelector('.items-list')
const itemContainerTemplate = document.querySelector('#item-container')
const addItemButton = document.querySelector('#add-item')

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

addItemButton.addEventListener('click', () => {
    itemsList.appendChild(createElementFromTemplate())
})

