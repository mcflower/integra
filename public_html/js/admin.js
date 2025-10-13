$('#xcontent-xtime').mask("99:99");
$('#xcontent-string_day').mask("99.99.2099");

// Получаем объект URL текущей страницы
const currentUrl = new URL(window.location.href);
// Разбиваем путь на составляющие части
const pathArray = currentUrl.pathname.split('/').filter(Boolean); // Фильтруем пустые строки

// console.log(pathArray);
function lightMenu(pathArray) {
    var elem = pathArray[0];
    if(!elem) {
        elem = 'customers';
    }
    var firstMenu = document.querySelector('.menu-' + elem + '-event a');
    var secondMenu = document.querySelector('.second-menu-' + elem + '-event a');

    if(firstMenu) {
        firstMenu.style.fontWeight = 800;
    }

    if (secondMenu) {
        secondMenu.style.backgroundColor = '#007bbb';
        secondMenu.style.color = '#ffffff';
    }
}

lightMenu(pathArray);
