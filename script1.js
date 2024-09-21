function search() {
    var input, filter, resultsContainer, content, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    resultsContainer = document.getElementById('searchResults');
    content = document.body.innerText || document.body.textContent;
  
    resultsContainer.innerHTML = '';
  
    // Split the content into words
    var words = content.split(/\s+/);
  
    for (i = 0; i < words.length; i++) {
      var word = words[i];
      if (word.toUpperCase().indexOf(filter) > -1) {
        var result = document.createElement('div');
        result.textContent = word;
        resultsContainer.appendChild(result);
        resultsContainer.appendChild(document.createElement('br')); // Add line break for better separation
      }
    }
  }
  document.getElementById('changeProfileButton').addEventListener('click', function() {
    document.getElementById('changeProfile').style.display = 'block';
});
  













  document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.countup');
    
    // Function to check if an element is in the viewport
    const isInViewport = (element) => {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    };
  
    // Function to start counting when the element is in the viewport
    const startCounting = (element) => {
      const targetCount = +element.getAttribute('data-count');
      const speed = 700; // Adjust the speed of the animation here (lower value for faster animation)
      const increment = targetCount / speed;
  
      let currentCount = 0;
  
      const updateCount = () => {
        if (currentCount < targetCount) {
          currentCount += increment;
          element.innerText = Math.ceil(currentCount);
          setTimeout(updateCount, 1);
        } else {
          element.innerText = targetCount;
        }
      };
  
      updateCount();
    };
  
    // Check if count-up elements are in the viewport and start counting
    window.addEventListener('scroll', () => {
      counters.forEach(counter => {
        if (isInViewport(counter) && counter.innerText === '0') {
          counter.style.opacity = '1';
          startCounting(counter);
        }
      });
    });
  });












  
  document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("left-nav").style.left = "0";
  });
  
  document.getElementById("exit-btn").addEventListener("click", function() {
    document.getElementById("left-nav").style.left = "-200px";
  });
  
  document.getElementById("mobile-menu-toggle").addEventListener("click", function() {
    document.getElementById("left-nav").style.left = "0";
  });
  