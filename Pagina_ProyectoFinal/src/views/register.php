
<?php include __DIR__ . '/../src/views/layouts/header.php'; ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link href="./output.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
    </head>

    <main>
    <h1>Registro para vivir una experiencia</h1>

     <br><br>
    <div>
        <h3>Registrate y disfruta de una experiencia unica</h3>
        <fieldset>
            <legend>Formulario de regístro</legend>
            <form action = "index.html" method="post">
                <h3 class="title-registro">Información personal</h3><br>
                <label for="nombre">Nombre completo</label><br>
                <input id= "nombre" type="text" name="nombre" placeholder="Ingresa tu nombre" required><br><br>
                <label for="edad">Ingresa tu edad</label><br>
                <input id= "edad" type="number" name="edad" placeholder="Ingresa tu edad" required><br><br>
                <label for="email">Ingresa tu correo</label><br>
                <input type="email" name="email" placeholder="Ingresa tu correo" required><br><br>
                <label for="password">Ingresa tu contraseña</label><br>
                <input type="password" name="password" placeholder="Ingresa tu contraseña" required><br><br>
                <label for="pais">Selecciona tu país</label><br>
                <select id="pais" name="pais">
                    <optgroup label="América">
                        <option value="México">México</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                    </optgroup>
                    <optgroup label="Europa">
                        <option value="Portugal">Portugal</option>
                        <option value="España">España</option>
                        <option value="Francia">Francia</option>
                    </optgroup>
                </select><br><br>
                <label for="paz">Elige un pez que desees capturar</label><br>
                <input id="paz" list="peces" name="pez"><br>
                <datalist id="peces">
                    <option value="Dorado"></option>
                    <option value="Marlin"></option>
                    <option value="Vela"></option>
                    <option value="Garropa"></option>
                </datalist><br>
                <label for="description">Deja tus comentarios de la página</label><br>
                <textarea id="description" cols="50" rows="15" placeholder="Comentarios..."></textarea><br>
                <button type="submit">Enviar</button>
            </form>
        </fieldset>     
    </div>
    </main>
    </body>

<?php include __DIR__ . '/../src/views/layouts/footer.php'; ?>