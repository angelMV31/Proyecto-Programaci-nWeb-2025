<header>
    <div class="logo">
        <img src="files/logo.png" alt="Logo Faby Tours">
    </div>

    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-btn">☰</label>

    <nav>
        <ul class="nav-link">
            <li><a href="<?= url('index.php') ?>">Inicio</a></li>

            <li><a>Experiencias</a>
                <ul class="sub-link">
                    <li><a href="<?= url('views/tuors.php') ?>">Tuor's</a></li>
                    <li><a>Opiniones</a></li>
                    <li><a href="<?= url('views/register.php') ?>">Registro</a></li>
                </ul>
            </li>

            <li><a href="#">Contactos</a></li>
        </ul>

        <div class="buscar">
            <input type="text" placeholder="Buscar...">
        </div>
    </nav>
</header>
