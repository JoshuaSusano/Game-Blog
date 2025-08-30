let slideIndex = 0;
    const slides = document.querySelectorAll(".slide");

    function showSlides() {
      slides.forEach(slide => {
        slide.classList.add("hidden");
        slide.classList.remove("slide-in", "slide-out");
      });

      const current = slides[slideIndex];
      slideIndex = (slideIndex + 1) % slides.length;
      const next = slides[slideIndex];

      current.classList.remove("hidden");
      current.classList.add("slide-out");

      next.classList.remove("hidden");
      next.classList.add("slide-in");

      setTimeout(showSlides, 4000); 
    }
    showSlides();

    const btnsubmit = document.getElementById("submit")

    btnsubmit.addEventListener("click" , function(){
    const email = document.getElementById("email");
    const confirmEmail = document.getElementById("confirm_email");
    const password = document.getElementById("password");
    
  

    

    email.value = "";
    confirmEmail.value = "";
    password.value = "";

    });