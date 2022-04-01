const periodForm = document.querySelector('#period-form')

/*
const dateInputs = {
    initial: document.querySelector('[name=initial-date]'),
    final: document.querySelector('[name=final-date]')
}

dateInputs.final.addEventListener('change', ({ target }) => {
    const { value: initialDate } = dateInputs.initial
    const { value: finalDate } = target

    const [ parsedInitialDate, parsedFinalDate ] = [
        Date.parse(initialDate),
        Date.parse(finalDate)
    ]

    if(parsedFinalDate > parsedInitialDate){
        periodForm.submit()
    }
})*/

window.addEventListener('DOMContentLoaded', event => {
    const minusButtons = [...document.querySelectorAll('.sale-container__minuts-button--btn')]

    minusButtons.map(minusButton => {
        minusButton.addEventListener('click', ({ target }) => {
            let saleContainer = target.parentElement.parentElement

            if(target.getAttribute('src')){
                saleContainer = saleContainer.parentElement
            }
            
            saleContainer.classList.toggle('reduced')
        })
    })
})
