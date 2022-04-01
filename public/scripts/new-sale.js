const itemsList = document.querySelector('.items-list')
const itemContainerTemplate = document.querySelector('#item-container')

const firstItemContainer = {
    container: document.querySelector('.item-container'),
    quantityInput: document.querySelector('.item-container input[type=number]'),
    select: document.querySelector('.item-container select')
}

const finalPriceInput = document.querySelector('input.total-price')
const receivedValueInput = document.querySelector('input[name=received-value]')
const changeInput = document.querySelector('input[name=change]')

const addItemButton = document.querySelector('#add-item')

let lastItemIndex = 0, currentItemIndex = 0

const updateSubTotalValue = (container, value) => {
    const price = container.querySelector('[data-id=price-info]')
    const subtotal = container.querySelector('[data-id=subtotal-info]')

    const numericPrice = Number(price.textContent)

    subtotal.textContent = (numericPrice * value).toFixed(2)
}

const calculateSaleValue = () => {
    const subtotals = [...document.querySelectorAll('[data-id=subtotal-info]')].map(subtotal => Number(subtotal.textContent))
    const sum = subtotals.reduce((sumValue, nextNumber) => sumValue + nextNumber, 0)

    finalPriceInput.value = sum.toFixed(2)
}

const createElementFromTemplate = () => {
    const nodeItem = itemContainerTemplate.content.cloneNode(true)

    const container = nodeItem.querySelector('div.item-container')
    const qttyInput = container.querySelector('input[type=number]')
    const selectItemInput = container.querySelector('select')
    const deleteItem = container.querySelector('.item-container__header button')

    deleteItem.addEventListener('click', () => {
        itemsList.removeChild(container)
    })

    qttyInput.addEventListener('change', ({ target: { value} }) => {
        updateSubTotalValue(container, value)
        calculateSaleValue()
    })

    selectItemInput.addEventListener('change', () => {
        calculateSaleValue()
    })

    calculateSaleValue()

    lastItemIndex++
    container.dataset.id = lastItemIndex

    /*/
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

                console.log(qttdInput)

                qttdInput.addEventListener('change', ({ target: { value } }) => updateSubTotalValue(container, value))

                unitPrice.innerText = item.price;
                subTotal.innerText = item.price;                    
            }
        })                    
    })
    */   

    return nodeItem
}

calculateSaleValue()


addItemButton.addEventListener('click', () => {
    itemsList.appendChild(createElementFromTemplate())

    calculateSaleValue()
})


firstItemContainer.quantityInput.addEventListener('change', ({ target: { value } }) => {
    updateSubTotalValue(firstItemContainer.container, value)
    calculateSaleValue()
})

firstItemContainer.select.addEventListener('change', () => {
    calculateSaleValue()
})

receivedValueInput.addEventListener('change', ({ target: { value } }) => {
    if(Number(value) > finalPriceInput.value){
        changeInput.value = Number(value) - finalPriceInput.value
    }
})