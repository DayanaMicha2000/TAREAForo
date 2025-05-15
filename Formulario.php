<?php include("registro.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100 py-10">
    <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-purple-700">Formulario de Registro</h2>
        
        <form action="registro.php" method="POST" class="space-y-4">
            
            <div>
                <label class="block mb-1 font-semibold">Cédula</label>
                <input type="text" name="cedula" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Número de cédula" pattern="\d{10}" maxlength="10" minlength="10" inputmode="numeric" title="Debe contener solo 10 dígitos" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Nombre</label>
                <input type="text" name="nombre" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Nombres" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Apellido</label>
                <input type="text" name="apellido" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Apellidos"  required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Correo electrónico</label>
                <input type="email" name="correo" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Direción de correo electrónico" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Teléfono</label>
                <input type="text" name="telefono" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Número de teléfono" pattern="\d{10}" maxlength="10" minlength="10" inputmode="numeric" title="Debe contener solo 10 dígitos" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Dirección</label>
                <textarea name="direccion" rows="2" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Direción domiciliaria" required></textarea>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Nombre de Usuario</label>
                <input type="text" name="usuario" class="w-full border border-gray-300 px-4 py-2 rounded-md" placeholder="Usuario" required>
            </div>

            <div>
                  <label class="block mb-1 font-semibold">Contraseña</label>
                
                  <div class="relative">
                    <input type="password" id="contrasena" name="contrasena" class="w-full p-2 border border-gray-300 rounded-lg pr-10" placeholder="Contraseña" required>

                        <button type="button" onclick="togglePassword()" class="absolute right-2 top-2 text-gray-600">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                             </svg>
                        </button>
                   </div>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="w-full border border-gray-300 px-4 py-2 rounded-md">
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">Registrarse</button>
            </div>
             <p class="mt-4 text-center text-sm text-gray-950 ">
               ¿Ya tienes una cuenta?
               <a href="index.php" class="text-blue-500 hover:underline ">Inicia sesión aquí</a>
             </p>

        </form>
    </div>


<script>
  function togglePassword() {
    const input = document.getElementById("contrasena");
    const icono = document.getElementById("eyeIcon");

    if (input.type === "password") {
      input.type = "text";
      icono.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.177-3.294m1.64-1.64A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.21 5.042M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />`;
    } else {
      input.type = "password";
      icono.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
    }
  }
</script>



</body>
</html>


