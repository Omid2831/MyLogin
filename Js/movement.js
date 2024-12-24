let isMoving = false;
const ball = document.querySelector('.ball');

function startMoving() {
    if (!isMoving) {
        ball.style.animationPlayState = 'running'; // Start the animation
        isMoving = true;
    }
}

function stopMoving() {
    ball.style.animationPlayState = 'paused'; // Pause the animation
    isMoving = false;
}

ball.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent the event from bubbling up to the document
    startMoving();
});

document.addEventListener('click', stopMoving);