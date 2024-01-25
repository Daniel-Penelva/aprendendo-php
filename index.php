<?php

include 'Helpers.php';

// Definindo fuso horário padrão - Lista de fuso horário PHP - https://www.php.net/manual/pt_BR/timezones.php

$usandoTimezone = date_default_timezone_set('America/Manaus');
echo 'Usando Timezone:'. $usandoTimezone;

echo '<br />';

$data = date("d/m/Y H:i:s");
echo 'Formato data: ' . $data;

echo '<br />';

// Chamando o método
echo contarTempo('2022-01-25 12:42:15');