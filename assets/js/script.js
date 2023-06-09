const listItems = document.querySelectorAll('.menu-item');

const toggleStateHandler = (event) => {
    const target = this;
    
    listItems.forEach(item => {
        item === target ? target.className.add('active') : item.className.remove('active');
    })
}

listItems.forEach(listItem => {
    listItem.addEventListener('click', toggleStateHandler)
});