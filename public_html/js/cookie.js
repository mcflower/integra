document.addEventListener('DOMContentLoaded', () => {
    const cookieBar = document.querySelector('.cookie-bar');
    const acceptBtn = document.querySelector('.cookie-btn');

    // Проверяем, принял ли пользователь cookies ранее
    if (!localStorage.getItem('cookiesAccepted')) {
        cookieBar.style.display = 'flex';
    }

    // Нажатие кнопки согласия
    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieBar.style.display = 'none';
    });
});
