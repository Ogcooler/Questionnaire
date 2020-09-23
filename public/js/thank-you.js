const colors = ["#1b42cb", "#ff2f6b"];

function createSquare() {
    const background = document.querySelector("body");
    const square = document.createElement("span");

    var size = Math.random() * 50;

    square.style.width = 20 + size + "px";
    square.style.height = 20 + size + "px";

    square.style.top = Math.random() * innerHeight + "px";
    square.style.left = Math.random() * innerWidth + "px";

    background.appendChild(square);

    const bg = colors[Math.floor(Math.random() * colors.length)];
    square.style.background = bg;

    setTimeout(() => {
        square.remove();
    }, 5000);
}

setInterval(createSquare, 150);
