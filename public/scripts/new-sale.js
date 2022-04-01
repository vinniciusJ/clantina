const itemsList = document.querySelector('.items-list')
const itemContainerTemplate = document.querySelector('#item-container')

const addItemButton = document.querySelector('#add-item')

let lastItemIndex = 0, currentItemIndex = 0

const createElementFromTemplate = () => {
    const nodeItem = itemContainerTemplate.content.cloneNode(true)

    const container = nodeItem.querySelector('div.item-container')
    const itemSelector = nodeItem.querySelector('select')
    const deleteItem = nodeItem.querySelector('.item-container__header button')

    deleteItem.addEventListener('click', () => {
        itemsList.removeChild(container)
    })

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



addItemButton.addEventListener('click', () => {
    itemsList.appendChild(createElementFromTemplate())
})



//goBackButton.click()