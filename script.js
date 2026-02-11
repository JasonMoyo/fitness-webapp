let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("joinUsModal");
    const btns = document.querySelectorAll(".nav-btn, .btn");
    const span = document.querySelector(".close");
    const form = document.getElementById("joinUsForm");

    btns.forEach(btn => {
        btn.addEventListener("click", function(event) {
            event.preventDefault();
            modal.style.display = "block";
        });
    });

    span.addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        window.location.href = "thank-you.html";
    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    // Get modal elements
    const bookClassBtn = document.getElementById("bookClassBtn");
    const bookClassModal = document.getElementById("bookClassModal");
    const closeModal = bookClassModal.querySelector(".close");

    // Show modal when button is clicked
    bookClassBtn.addEventListener("click", function (event) {
        event.preventDefault();
        bookClassModal.style.display = "block";
    });

    // Close modal when 'X' is clicked
    closeModal.addEventListener("click", function () {
        bookClassModal.style.display = "none";
    });

    // Close modal when clicking outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === bookClassModal) {
            bookClassModal.style.display = "none";
        }
    });

    // Handle form submission (for now, just log the values)
    document.getElementById("bookClassForm").addEventListener("submit", function (event) {
        event.preventDefault();
        window.location.href = "thank-you.html";
    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    // Get modal elements
    const joinBtns = document.querySelectorAll(".join-btn");
    const joinNowModal = document.getElementById("joinNowModal");
    const closeJoinModal = joinNowModal.querySelector(".close");
    const selectedPlanInput = document.getElementById("selected-plan");

    // Show modal when "Join Now" is clicked
    joinBtns.forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const selectedPlan = this.getAttribute("data-plan");
            selectedPlanInput.value = selectedPlan;
            joinNowModal.style.display = "block";
        });
    });

    // Close modal when 'X' is clicked
    closeJoinModal.addEventListener("click", function () {
        joinNowModal.style.display = "none";
    });

    // Close modal when clicking outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === joinNowModal) {
            joinNowModal.style.display = "none";
        }
    });

    // Handle form submission (logs the values for now)
    document.getElementById("joinNowForm").addEventListener("submit", function (event) {
        event.preventDefault();
        window.location.href = "thank-you.html";
    });
    
});


//Typing text code

const typed = new Typed('.multiple-text', {
    strings: ['Physical Fitness', 'Weight Gain', 'Strength Training', 'Fat Loss', 'Weight Lifting', 'Running' ],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: true,
  });

  document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("joinUsModal");
    const joinButton = document.getElementById("joinButton");
    const closeModal = modal.querySelector(".close");
    const form = document.getElementById("joinUsForm");

    // Show modal when the button is clicked
    joinButton.addEventListener("click", function(event) {
        event.preventDefault();
        modal.style.display = "block";
    });

    // Close modal when 'X' is clicked
    closeModal.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Close modal when clicking outside the modal
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    // Handle form submission
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Thank you for joining! We will contact you soon.");
        modal.style.display = "none";
        form.reset();
    });
});

// Add this to your script.js
function toggleModal(modalId, show) {
    const modal = document.getElementById(modalId);
    if (modal) {
        if (show) {
            modal.style.display = 'block';
            document.body.classList.add('modal-open');
        } else {
            modal.style.display = 'none';
            document.body.classList.remove('modal-open');
        }
    }
}

// Modal Trigger Logic
document.querySelectorAll('.nav-btn, .btn, .join-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const target = btn.classList.contains('join-btn') ? 'joinNowModal' : 'joinUsModal';
        document.getElementById(target).style.display = 'block';

        if (btn.dataset.plan) {
            document.getElementById("selected-plan").value = btn.dataset.plan;
        }
    });
});

// Close Modals
document.querySelectorAll('.close').forEach(closeBtn => {
    closeBtn.addEventListener('click', () => {
        closeBtn.parentElement.parentElement.style.display = 'none';
    });
});

// Close modals when clicking outside the modal content
window.onclick = function(event) {
    document.querySelectorAll('.modal').forEach(modal => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
};
// Login/Register Modal Logic
document.addEventListener("DOMContentLoaded", function () {
    const authBtn = document.querySelector(".auth-btn");
    const authModal = document.getElementById("authModal");
  
    if (authBtn && authModal) {
      const closeAuth = authModal.querySelector(".close");
  
      // Show modal on click
      authBtn.addEventListener("click", function (e) {
        e.preventDefault();
        authModal.style.display = "block";
      });
  
      // Close modal on X click
      if (closeAuth) {
        closeAuth.addEventListener("click", function () {
          authModal.style.display = "none";
        });
      }
  
      // Close modal when clicking outside of it
      window.addEventListener("click", function (event) {
        if (event.target === authModal) {
          authModal.style.display = "none";
        }
      });
    }
  });
  
  

  

  