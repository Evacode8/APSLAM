document.addEventListener('scroll', function() {
    let scrollTop = window.scrollY;
    let parallaxElements = document.querySelectorAll('.ordinateur-img, .texte-sur-ecran');
  
    parallaxElements.forEach(function(element) {
      let parallaxRatio = element.dataset.parallax || 0.5; // Ajuste la vitesse de parallaxe ici
      let offset = scrollTop * parallaxRatio;
  
      if (element.classList.contains('ordinateur-img')) {
        element.style.transform = `translate3d(0, ${offset}px, 0)`;
      } else {
        element.style.transform = `translate3d(0, ${offset * 0.3}px, 0)`; // Ajuste la vitesse du texte ici
      }
    });
  });
  