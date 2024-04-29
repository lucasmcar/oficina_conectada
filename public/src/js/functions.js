// Função para adicionar classe 'active' ao item de menu clicado
function setActiveLink() {
    // Remove a classe 'active' de todos os itens de menu
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
      link.classList.remove('active');
    });
  
    // Adiciona a classe 'active' ao item de menu clicado
    this.classList.add('active');
  }
  
  // Adiciona evento de clique a todos os itens de menu
  var navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(function(link) {
    link.addEventListener('click', setActiveLink);
  });