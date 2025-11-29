<html lang="es">
<head> 
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Menú con Submenú</title>
 <!-- Fuente Raleway -->
 <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
 <style>
   body {
      margin: 0;
      font-family: 'Raleway', Arial, sans-serif;
      background-color: #f9f9ff;
   }

   /* ---- ESTILO DEL MENU PRINCIPAL ---- */
   nav {
      background: #E74C3E50;
      padding: 10px 0;
   }

   nav ul {
       list-style: none;
       margin: 0;
       padding: 0;
       display: flex;
       gap: 10px;
       justify-content: center;
       flex-wrap: wrap;
   }

   nav ul li {
       position: relative;
   }

   nav ul li a {
       display: block;
       padding: 12px 20px;
       color: white;
       text-decoration: none;
       font-weight: 600;
       background: #B19CD9; /* Morado pastel */
       border-radius: 25px; /* Burbuja */
       box-shadow: 0px 4px 6px rgba(0,0,0,0.2);
       transition: all 0.3s ease;
       text-shadow: 0 0 5px #C8A2C8, 0 0 10px #C8A2C8; /* Glow morado */
   }

   nav ul li a:hover {
       background: #D8BFD8; /* Morado más claro al pasar */
       transform: translateY(-2px);
       box-shadow: 0px 6px 10px rgba(0,0,0,0.25);
   }

   /* --- ESTILO DEL SUBMENU ---*/
   nav ul li ul {
       display: none;
       position: absolute;
       top: 100%;
       left: 0;
       background: #D8BFD8; /* Submenú morado pastel */
       padding: 5px;
       min-width: 180px;
       border-radius: 12px;
       box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
   }  

   nav ul li ul li a {
       padding: 10px 15px;
       color: white;
       background: transparent;
       border-radius: 15px;
       text-shadow: 0 0 3px #C8A2C8, 0 0 6px #C8A2C8;
   }

   nav ul li ul li a:hover {
       background: #B19CD9;
       color: white;
   }

   /* --- MOSTRAR EL SUBMENU --- */
   nav ul li:hover > ul {
       display: block;
   }

   /* --- GALERÍA TIPO COLLAGE GRANDE --- */
   .galeria {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      padding: 20px;
      width: 100%;
      height: 85vh; /* ocupa casi toda la pantalla debajo del menú */
      box-sizing: border-box;
   }

   .galeria img {
      width: 100%;
      height: 90%;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: 0px 6px 15px rgba(0,0,0,0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
   }

   .galeria img:hover {
      transform: scale(1.03);
      box-shadow: 0px 10px 25px rgba(0,0,0,0.4);
   }

   /* Responsive (para pantallas pequeñas) */
   @media (max-width: 768px) {
      .galeria {
         grid-template-columns: repeat(2, 1fr);
         height: auto;
      }
      .galeria img {
         height: 200px;
      }
   }

   @media (max-width: 480px) {
      .galeria {
         grid-template-columns: 1fr;
      }
      .galeria img {
         height: 250px;
      }
   }

 </style>
</head>
<body>  
 <!--Menu principal-->
 <nav>
    <ul>
      <li>
         <p><a href="https://sfpya.edomexico.gob.mx/predial/">PAGO PREDIAL</a></p>
      </li>

      <li>
         <p><a href="http://odapasvalledebravo.dyndns.org/Default.aspx">PAGO DE AGUA POTABLE</a></p>
      </li>

      <li>
         <p><a href="https://app.cfe.mx/Aplicaciones/CCFE/SolicitudesCFE/Solicitudes/ConsultaTuReciboLuzGmx">PAGO DE ELECTRICIDAD(CFE)</a></p>
      
      </li>

      <li>
         <p><a href="https://portalcautivo.totalplay.com.mx/">PAGO DE TELEFONO/INTERNET</a></p>
      </li>

      <li>
         <p><a href="https://sseguridad.edomex.gob.mx/infracciones-transito">PAGO DE MULTAS DE TRANSITO</a></p>
      </li>

      <li>
         <p><a href="https://tenencia.edomex.gob.mx/TenenciaIndividual/tenencia/A06E1A88B8A6ED4B#/">PAGO DE TENENCIA</a></p>
      </li> 
      <li>
         <p><a href="https://www.gob.mx/sre/acciones-y-programas/opciones-para-realizar-el-pago-de-pasaporte">PAGO DE PASAPORTE</a></p>
      </li>
       <li>
         <p><a href="https://sfpya.edomexico.gob.mx/recaudacion/">PAGO DE LICECENCIA DE CONDUCIR</a></p>
      </li>
    </ul>
 </nav>
 </section>

</body>
</html>
