const btn = document.getElementById('btn_home_menu_action');
const home_menu_list = document.getElementById('home_menu_list');
let isOpen = false;
btn.addEventListener('click', () => {
    // checks whether the menu is open or not 
    if (!isOpen) {
        // if menu is open
        // addition of the class that gives a width of 4/12
        home_menu_list.classList.add('w-4/12')
        // supresion of the class giving a width of 0
        home_menu_list.classList.remove('w-0')
        btn.style.color = "black"
    } else {
        // if menu is not open
        // supresion of the class giving a width of 4/12
        home_menu_list.classList.remove('w-4/12')
        // addition of the class that gives a width of 0
        home_menu_list.classList.add('w-0')
        btn.style.color = "white"
    }
    isOpen = !isOpen;
});