let btn = document.getElementById('btn_home_menu_action');
let home_menu_list = document.getElementById('home_menu_list');
console.log(home_menu_list.children);
let isOpen = false;
btn.addEventListener('click', () => {
    if (!isOpen) {
        home_menu_list.classList.add('w-4/12')
        home_menu_list.classList.remove('w-0')
        btn.style.color = "black"
    } else {
        home_menu_list.classList.remove('w-4/12')
        home_menu_list.classList.add('w-0')
        btn.style.color = "white"
    }
    isOpen = !isOpen;
});