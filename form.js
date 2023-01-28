const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  const mensagem = document.createElement('p');
  mensagem.innerHTML = 'Mensagem enviada com sucesso!';
  mensagem.style.color = 'green';
  form.appendChild(mensagem);
});