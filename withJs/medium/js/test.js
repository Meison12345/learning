'use strict';
document.addEventListener("DOMContentLoaded", function() {
    const regExpEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const thanksMsg = document.querySelector('.feedback-msg');
    const nameErrorMsg = document.querySelector('.name-error');
    const nameErrorLength = document.querySelector('.name-error-length');
    const emailErrorMsg = document.querySelector('.email-error');
    const emailErrorLength = document.querySelector('.email-error-length');
    const msgErrorMsg = document.querySelector('.msg-error');

    // document.querySelector('.feedback-form__name').addEventListener('keydown', function(e){
    //     if(/\d/gmi.test(e.key)){
    //         e.preventDefault();
    //     }
    // })


    document.querySelector('.feedback-form__submit').addEventListener('click', function(e) {
        e.preventDefault();
        checkForm();
    });

    function checkForm() {
        const name = document.querySelector('.feedback-form__name').value.trim();
        const email = document.querySelector('.feedback-form__email').value.trim();
        const msg = document.querySelector('.feedback-form__text').value.trim();

        const validName = name.length > 0 && name.match(/^[а-яА-Яa-zA-Z\s]+$|^[0-9\s]+$/);
        const validEmail = regExpEmail.test(email);
        const validMsg = msg.length <= 10;


        if (name.length < 1) {
            nameErrorLength.classList.remove('not-visible');
        } else if (!validName) {
            nameErrorMsg.classList.remove('not-visible');
            nameErrorLength.classList.add('not-visible');
        } else {
            nameErrorMsg.classList.add('not-visible');
            nameErrorLength.classList.add('not-visible');
        }




        if (email.length < 1) {
            emailErrorLength.classList.remove('not-visible');
        }else if (!validEmail) {
            emailErrorMsg.classList.remove('not-visible');
            emailErrorLength.classList.add('not-visible');
        } else {
            emailErrorMsg.classList.add('not-visible');
            emailErrorLength.classList.add('not-visible');
        }



        if (!validMsg) {
            msgErrorMsg.classList.remove('not-visible');
        } else {
            msgErrorMsg.classList.add('not-visible');
        }

        if (validName && validEmail && validMsg) {
            emailErrorMsg.classList.add('not-visible');
            msgErrorMsg.classList.add('not-visible');
            nameErrorMsg.classList.add('not-visible');
            thanksMsg.classList.remove('not-visible');
            document.querySelector('.feedback-form').remove();

        }
    }
});