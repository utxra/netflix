document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
      element.addEventListener('click', function() {
        location.reload();
      });
    });
  });