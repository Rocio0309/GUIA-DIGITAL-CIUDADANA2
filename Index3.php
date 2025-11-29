<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>¿REQUIERE INFORMACIÓN ADICIONAL?</title>
  <link rel="stylesheet" type="text/css" href="estilos3.css">
</head>
<body>
  <h1>¿REQUIERE INFORMACIÓN ADICIONAL?</h1>

  <form id="formDudas">
    <h2>COMPLETAR FORMULARIO</h2>

    <input type="text" name="NOMBRE_COMPLETO" placeholder="Nombre" required>
    <input type="text" name="MUNICIPIO" placeholder="Municipio" required>
    <input type="email" name="CORREO_ELECTRONICO" placeholder="Correo electrónico" required>
    <input type="text" name="TRAMITE" placeholder="Trámite" required>
    <input type="text" name="DUDA_ESPECIFICA" placeholder="Duda específica" required>
    
    <input type="submit" value="Registrar">
    <p id="mensaje"></p>
  </form>

  <script>
    // Animación de burbujas translúcidas
    const bubbleImages = ['DUDA.png', 'DUDA.png', 'LOGOCECY.png'];
    const bubbleCount = 25;
    for(let i = 0; i < bubbleCount; i++){
        let bubble = document.createElement('img');
        bubble.src = bubbleImages[Math.floor(Math.random() * bubbleImages.length)];
        bubble.classList.add('bubble');
        bubble.style.width = `${Math.random() * 80 + 30}px`;
        bubble.style.height = bubble.style.width;
        bubble.style.left = `${Math.random() * 100}vw`;
        bubble.style.animationDuration = `${Math.random() * 25 + 15}s`;
        bubble.style.opacity = `${Math.random() * 0.6 + 0.3}`;
        document.body.appendChild(bubble);
    }

    // Envío del formulario con AJAX
    document.getElementById('formDudas').addEventListener('submit', function(e){
      e.preventDefault();
      
      const formData = new FormData(this);
      fetch('registrar3.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById('mensaje').innerHTML = data;
        document.getElementById('formDudas').reset();
      })
      .catch(error => {
        document.getElementById('mensaje').innerHTML = "<span style='color:red;'>Error al enviar la duda</span>";
      });
    });
  </script>
</body>
</html>
