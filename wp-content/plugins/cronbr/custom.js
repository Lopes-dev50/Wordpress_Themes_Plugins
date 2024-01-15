  // JavaScript para controlar o temporizador e mostrar a div após 15 segundos
  document.addEventListener('DOMContentLoaded', function() {
    var backgroundDiv = document.querySelector('.background-div');
    var closeButton = document.getElementById('close-button');

    // Função para mostrar a div após 15 segundos
    function showDivAfterTimer() {
        setTimeout(function() {
            backgroundDiv.style.display = 'block';
        }, 15000); // 15000 milissegundos = 15 segundos
    }

    // Adicionar ouvinte de eventos para o botão "X"
    closeButton.addEventListener('click', function() {
        backgroundDiv.style.display = 'none';
    });

    // Chamar a função para mostrar a div após o temporizador
    showDivAfterTimer();
});