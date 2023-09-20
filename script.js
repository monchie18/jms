document.addEventListener('DOMContentLoaded', function() {
    const crownWrapper = document.getElementById('crownWrapper');
  
    // Add Stars
    for (let i = 0; i < 50; i++) {
      const star = document.createElement('div');
      star.className = 'star';
      star.style.left = `${Math.random() * 100 - 50}px`;
      star.style.top = `${Math.random() * 100 - 50}px`;
      star.style.animationDelay = `${Math.random() * 1}s`;
      crownWrapper.appendChild(star);
      setTimeout(() => {
        star.classList.add('star-burst');
      }, 10);
    }
  });
  