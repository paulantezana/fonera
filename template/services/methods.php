<section class="methods">
    <header class="methods__header">
        <h3>MEDIOS DE PAGO</h3>
    </header>
    <ul class="methods__list">
        <li>
            <div class="banco-logo-container">
                <img class="banco-logo" src="<?php echo get_theme_mod('fonera_cajacusco_img')?>" alt="caja cusco la fonera"/>
            </div>
            <p class="fonera--cajacusco--cuenta">Cuenta: <strong><?php echo get_theme_mod('fonera_cajacusco_cuenta')?></strong></p>
            <p class="fonera--cajacusco--titular">Titular:<strong><?php echo get_theme_mod('fonera_cajacusco_titular')?></strong></p>
        </li>
        <li>
            <div class="banco-logo-container">
                <img class="banco-logo" src="<?php echo get_theme_mod('fonera_bcp_img'); ?>" alt="bcp la fonera"/>
            </div>
            <p class="fonera--bcp--cuenta">Cuenta: <strong><?php echo get_theme_mod('fonera_bcp_cuenta'); ?></strong></p>
            <p class="fonera--bcp--titular">Titular:<strong><?php echo get_theme_mod('fonera_bcp_titular'); ?></strong></p>
        </li>
        <li>
            <?php $s_pago_instrucciones?>
        </li>
        <li>
            <h4>En la Oficina La fonera</h4>
            <p>Horario de atencion:</p>
            <p>9:00 a.m - 1:00 p.m.</p>
            <p>2:00 p.m - 2:00 pm</p>
            <?php $footer_fonera_oficinas?>
        </li>
    </ul>
</section>