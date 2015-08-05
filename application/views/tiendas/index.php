<?php
    $this->load->view('templates/header');
?>
<section id="tiendas">
    <h1>
        <span class="light">NUESTRAS</span>
        <span class="strong">TIENDAS</span>
    </h1>
    <ul id="ciudades">
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                BARRANQUILLA</a>
            <ul>
                <li>Cra 51B con Av. Circunvalar.</li>
                <li>Soledad calle 30 con cra 30 </li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                BOGOTÁ</a>
            <ul>
                <li>Autopista Norte Calle 192 No. 19 - 13</li>
                <li>Av Boyacá calle 80</li>
                <li>Villa del Río Autopista Sur con calle 57 sur</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                CALI</a>
            <ul>
                <li>Norte Cra 1 # 35-41</li>
                <li>Valle del Lili Cra 94 # 25-60</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                CARTAGENA</a>
            <ul>
                <li>carrera 50B # 30D-21 barrio buenos aires</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                CÚCUTA</a>
            <ul>
                <li>Centro Comercial Bolivar Bloque D</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                DOS QUEBRADAS</a>
            <ul>
                <li>Cra 15 # 10-172 la popa</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                IBAGUÉ</a>
            <ul>
                <li>Calle 83 # 4-72 sur</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                MEDELLÍN</a>
            <ul>
                <li>Av. san juan con cra 65</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                MONTERÍA</a>
            <ul>
                <li>Av. Circunvalar cra 14 # 48A-48</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                SANTA MARTA</a>
            <ul>
                <li>Cra 15 av. Ferrocarril # 29-364</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                TUNJA</a>
            <ul>
                <li>Av. Universitaria con calle 35</li>
            </ul>
        </li>
        <li class="ciudad">
            <a href="#">
                <?php echo img("assets/images/img-x.png"); ?>
                VILLAVICENCIO</a>
            <ul>
                <li>Cra 22 # 7-37 vía puerto López</li>
            </ul>
        </li>
    </ul>
</section>
<?php
    $this->load->view('templates/footer');
?>