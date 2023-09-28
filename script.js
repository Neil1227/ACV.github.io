// Get references to the modal and login button
const modal = document.getElementById('loginModal');
const loginBtn = document.getElementById('loginBtn');
const closeModalBtn = document.getElementById('closeModal');

// Display the modal when the login button is clicked
loginBtn.addEventListener('click', () => {
    modal.style.display = 'block';
});

// Close the modal when the close button is clicked
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Close the modal when the user clicks outside of it
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
