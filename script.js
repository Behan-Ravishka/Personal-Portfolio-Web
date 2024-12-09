document.getElementById('theme').addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
    const ghost = document.getElementById('ghost-swallow');
    if (document.body.classList.contains('dark-mode')) {
        ghost.style.animation = 'ghostSwallow 3s forwards';
        ghost.style.display = 'block';
        setTimeout(() => {
            ghost.style.display = 'none';
        }, 3000);
    } else {
        ghost.style.animation = 'ghostSwallowReverse 3s forwards';
        ghost.style.display = 'block';
        setTimeout(() => {
            ghost.style.display = 'none';
        }, 3000);
    }
});

//chatbot
document.getElementById('chatbot').addEventListener('click', () => {
    window.open('https://wa.me/+94763354538', '_blank'); // Replace with your WhatsApp link
});

document.addEventListener('mousemove', (e) => {
    const cursor = document.createElement('div');
    cursor.classList.add('cursor-effect');
    document.body.appendChild(cursor);
    cursor.style.left = `${e.clientX}px`;
    cursor.style.top = `${e.clientY}px`;
    setTimeout(() => cursor.remove(), 200);
});

// Progress bar functionality for horizontal scrolling
const progressBar = document.getElementById('progress-bar');
const horizontalScrollContainer = document.querySelector('.horizontal-scroll');

horizontalScrollContainer.addEventListener('scroll', () => {
    const scrollLeft = horizontalScrollContainer.scrollLeft;
    const scrollWidth = horizontalScrollContainer.scrollWidth - horizontalScrollContainer.clientWidth;
    const scrollPercent = (scrollLeft / scrollWidth) * 100;
    progressBar.style.width = scrollPercent + '%';
});

// Create meteors dynamically
const createMeteor = () => {
    const meteor = document.createElement('div');
    meteor.classList.add('meteor');
    meteor.style.left = `${Math.random() * 100}vw`;
    meteor.style.animationDuration = `${Math.random() * 2 + 1.5}s`;
    document.querySelector('.meteors').appendChild(meteor);
    setTimeout(() => {
        meteor.remove();
    }, 1500);
};

setInterval(createMeteor, 500);

// Add an event listener to detect mouse wheel scrolling
horizontalScrollContainer.addEventListener('wheel', (event) => {
    event.preventDefault(); // Prevent vertical scroll

    // Scroll horizontally by the vertical scroll delta, creating a smooth effect
    horizontalScrollContainer.scrollLeft += event.deltaY * 3.5; // Adjust multiplier for speed
});

let throttleTimeout;
document.addEventListener('mousemove', (e) => {
    if (throttleTimeout) return;
    throttleTimeout = setTimeout(() => {
        const cursor = document.createElement('div');
        cursor.classList.add('cursor-effect');
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
        document.body.appendChild(cursor);
        setTimeout(() => cursor.remove(), 200);
        throttleTimeout = null;
    }, 50); // Adjust timeout as needed
});

const changingText = document.getElementById('changingText');
const textArray = [
    'M P Behan Ravishka Perera',
    'Undergraduate',
    'Tech Enthusiast',
    'Volunteer in Technology',
    'Solo Learner',
    'Nature Lover'
];

let currentIndex = 0;
let typingIndex = 0;
let isDeleting = false;
let speed = 100;

function changeText() {
    let currentText = textArray[currentIndex];
    if (isDeleting) {
        changingText.textContent = currentText.substring(0, typingIndex - 0);
        typingIndex--;
        if (typingIndex === 0) {
            isDeleting = false;
            currentIndex = (currentIndex + 1) % textArray.length;
            speed = 600;
        }
    } else {
        changingText.textContent = currentText.substring(0, typingIndex + 1);
        typingIndex++;
        if (typingIndex === currentText.length) {
            isDeleting = true;
            speed = 100;
        }
    }
}
setInterval(changeText, speed);

const canvas = document.getElementById("matrix");
const ctx = canvas.getContext("2d");

// Set the canvas full-screen size
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Matrix characters and font size
const matrixCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%";
const fontSize = 16;
const columns = canvas.width / fontSize;

// Create an array to store the Y positions of each column
const drops = Array(Math.floor(columns)).fill(0);

function drawMatrixRain() {
    // Set canvas background with slight opacity for trail effect
    ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Set the matrix text color and font
    ctx.fillStyle = "#0f0";
    ctx.font = fontSize + "px monospace";

    // Loop through each drop
    for (let i = 0; i < drops.length; i++) {
        const text = matrixCharacters[Math.floor(Math.random() * matrixCharacters.length)];

        // Draw the character
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        // Randomly reset the drop to the top after it falls off the screen
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }

        // Increment the Y position of the drop
        drops[i]++;
    }
}

// Call drawMatrixRain at an interval to animate
setInterval(drawMatrixRain, 50);

// Update canvas size on window resize
window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

let startX;
let startY;
let endX;
let endY;

// Track touch start
document.addEventListener("touchstart", function (e) {
    const touch = e.touches[0];
    startX = touch.pageX;
    startY = touch.pageY;
}, false);

// Track touch end and calculate swipe direction
document.addEventListener("touchend", function (e) {
    const touch = e.changedTouches[0];
    endX = touch.pageX;
    endY = touch.pageY;

    // Determine the swipe direction
    const diffX = endX - startX;
    const diffY = endY - startY;

    if (Math.abs(diffX) > Math.abs(diffY)) {
        if (diffX > 50) {
            // Swipe Right (Next Section)
            navigateSections('right');
        } else if (diffX < -50) {
            // Swipe Left (Previous Section)
            navigateSections('left');
        }
    } else {
        if (diffY > 50) {
            // Swipe Down (Next Section)
            navigateSections('down');
        } else if (diffY < -50) {
            // Swipe Up (Previous Section)
            navigateSections('up');
        }
    }
}, false);

// Function to navigate sections
function navigateSections(direction) {
    const sections = document.querySelectorAll('.section');
    let currentSection = document.querySelector('.section.active');
    let currentIndex = Array.from(sections).indexOf(currentSection);

    if (direction === 'right' || direction === 'down') {
        currentIndex = Math.min(currentIndex + 1, sections.length - 1);
    } else if (direction === 'left' || direction === 'up') {
        currentIndex = Math.max(currentIndex - 1, 0);
    }

    sections.forEach((section, index) => {
        section.classList.remove('active');
        if (index === currentIndex) {
            section.classList.add('active');
            section.scrollIntoView({ behavior: 'smooth' });
        }
    });
}

// Add initial active class to first section
document.querySelector('.section').classList.add('active');

// skills section

// Function to open the main skill tabs (Hard Skills and Soft Skills)
function openTab(event, tabName) {
    const tabContents = document.querySelectorAll(".tab-content");
    tabContents.forEach(content => {
        content.classList.remove("active");
    });

    const tabButtons = document.querySelectorAll(".tab-button");
    tabButtons.forEach(btn => {
        btn.classList.remove("active");
    });

    document.getElementById(tabName).classList.add("active");
    event.currentTarget.classList.add("active");
}

// Function to open the sub-tabs for Hard Skills (Programming and Graphic Design)
function openSubTab(event, subTabName) {
    const subTabContents = document.querySelectorAll(".sub-tab-content");
    subTabContents.forEach(content => {
        content.classList.remove("active");
    });

    const subTabButtons = document.querySelectorAll(".sub-tab-button");
    subTabButtons.forEach(btn => {
        btn.classList.remove("active");
    });

    document.getElementById(subTabName).classList.add("active");
    event.currentTarget.classList.add("active");
}

// contact section

document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('formMessage').innerText = data.message;
        document.getElementById('contactForm').reset();
    })
    .catch(error => console.error('Error:', error));
});

