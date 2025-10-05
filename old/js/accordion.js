document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', function () {
        // Reset all icons to "+"
        document.querySelectorAll('.icon i').forEach(i => {
            i.classList.remove('fa-plus');
            i.classList.add('fa-plus');
        });

        // Get the current button's target collapse
        let targetCollapse = document.querySelector(this.getAttribute('data-bs-target'));

        // Wait for Bootstrap to toggle collapse, then check if it's expanded
        setTimeout(() => {
            if (targetCollapse.classList.contains('show')) {
                this.querySelector('.icon i').classList.remove('fa-plus');
                this.querySelector('.icon i').classList.add('fa-minus');
            }
        }, 150); // Delay to allow Bootstrap to update the class
    });
});