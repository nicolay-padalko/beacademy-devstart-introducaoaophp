<select>
    <option selected> -- Selecione o Ano --</option>
    <?php
    for ($ano = 2022; $ano >= 1940; $ano--) {
        echo "<option>{$ano}</option>";
    }
    ?>
</select>

<select>
    <option selected> -- Selecione o Dia --</option>
    <?php
    for ($dia = 1; $dia <= 31; $dia++) {
        echo "<option>{$dia}</option>";
    }
    ?>
</select>