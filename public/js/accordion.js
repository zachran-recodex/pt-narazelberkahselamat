document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = document.querySelector(`#${button.getAttribute('data-accordion')}`);

        button.querySelector('.arrow img').classList.toggle('rotate-180');

        if (accordionContent.classList.contains('hide')) {
            accordionContent.classList.remove('hide');
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
        } else {
            accordionContent.classList.add('hide');
            accordionContent.style.maxHeight = '0';
        }
    });
});
