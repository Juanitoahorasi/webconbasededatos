// Función para validar el correo en el formulario
function validarEmail() {
  const email = document.getElementById("email").value;
  if (!email.includes("@")) {
    alert("Por favor, ingresa un correo válido con '@'.");
    return false;
  }
  return true;
}
// Inicializar Particles.js
particlesJS.load('particles-js', 'jss/particles.json', function() {
  console.log('callback - particles.js config loaded');
});