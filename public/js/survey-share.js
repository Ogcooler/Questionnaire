var btn = document.querySelectorAll("button");
function copy() {
    //Копирование ссылки инпута

    var parent = event.srcElement.parentElement;
    var link = parent.querySelector("input");
    link.select();
    document.execCommand("copy");

    var message = document.getElementById("copied");

    async function animate(message) {
        console.log(1);
        message.classList.add("message-drop");
    }

    //Запуск и удаление анимаций

    animate(message)
        .then(function() {
            console.log(2);
            setTimeout(() => {
                message.classList.add("message-down");
                message.classList.remove("message-drop");
            }, 5000);
        })
        .then(function() {
            setTimeout(() => {
                console.log(3);
                message.classList.remove("message-drop");
                message.classList.remove("message-down");
            }, 6300);
        });
}
