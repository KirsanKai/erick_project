let lang;

$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

document.querySelector('.btnprofile').addEventListener('click', () => {
    document.querySelectorAll('.contents').forEach(element => {
        element.hidden = true;
    });
    (document.querySelector('.profilecontent').hidden) ? document.querySelector('.profilecontent').hidden = false: document.querySelector('.profilecontent').hidden = true;
})

document.querySelector('.btnpractic').addEventListener('click', () => {
    document.querySelectorAll('.contents').forEach(element => {
        element.hidden = true;
    });
    (document.querySelector('.practic').hidden) ? document.querySelector('.practic').hidden = false: document.querySelector('.practic').hidden = true;
    document.querySelector('.btn_practic_js').addEventListener('click', () => {
        lang = 'js';
        (document.querySelector('.language_selection').hidden) ? document.querySelector('.language_selection').hidden = false: document.querySelector('.language_selection').hidden = true;
        (document.querySelector('.listzadaniy').hidden) ? document.querySelector('.listzadaniy').hidden = false: document.querySelector('.listzadaniy').hidden = true;
        document.querySelector('#lesson_1').addEventListener('click', () => {
            (document.querySelector('.listzadaniy').hidden) ? document.querySelector('.listzadaniy').hidden = false: document.querySelector('.listzadaniy').hidden = true;
            (document.querySelector('.practiczadanie').hidden) ? document.querySelector('.practiczadanie').hidden = false: document.querySelector('.practiczadanie').hidden = true;
        })
    })
    document.querySelector('.btn_practic_php').addEventListener('click', () => {
        lang = 'php';
        (document.querySelector('.language_selection').hidden) ? document.querySelector('.language_selection').hidden = false: document.querySelector('.language_selection').hidden = true;
        (document.querySelector('.listzadaniy').hidden) ? document.querySelector('.listzadaniy').hidden = false: document.querySelector('.listzadaniy').hidden = true;
        document.querySelector('#lesson_1').addEventListener('click', () => {
            (document.querySelector('.listzadaniy').hidden) ? document.querySelector('.listzadaniy').hidden = false: document.querySelector('.listzadaniy').hidden = true;
            (document.querySelector('.practiczadanie').hidden) ? document.querySelector('.practiczadanie').hidden = false: document.querySelector('.practiczadanie').hidden = true;
        })
    })
})

document.querySelector('.btntests').addEventListener('click', () => {
    document.querySelectorAll('.contents').forEach(element => {
        element.hidden = true;
    });
    (document.querySelector('.testcontent').hidden) ? document.querySelector('.testcontent').hidden = false: document.querySelector('.testcontent').hidden = true;
})

document.querySelector('.btnlessons').addEventListener('click', () => {
    document.querySelectorAll('.contents').forEach(element => {
        element.hidden = true;
    });
    (document.querySelector('.lessons').hidden) ? document.querySelector('.lessons').hidden = false: document.querySelector('.lessons').hidden = true;
});

var url = "http://localhost/sign-in";
fetch(url, {
        method: 'POST',
        body:      JSON.stringify({
            login: 'admin',
            password: '111'
        })
    })
    .then(async function (response) {
        va = await response;
        console.log('va :', va);
        // if (va.status == 200){
        //     document.querySelector('#sidebar-wrapper').hidden = false;
        //     document.querySelector('.profilecontent').hidden = false;
        //     document.querySelector('.logincontainer').remove();
        // }
        // else(
        //     alert('Неверно введен логин или пароль!')
        // )
    })