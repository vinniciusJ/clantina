const goBackButton = document.querySelector('#go-back')

const handleGoBack = () => history.back()

goBackButton.addEventListener('click', handleGoBack)