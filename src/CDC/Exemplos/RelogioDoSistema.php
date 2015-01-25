<?php

namespace CDC\Exemplos;

use CDC\Exemplos\RelogioInterface;
use DateTime;

class RelogioDoSistema implements RelogioInterface
{

    public function hoje()
    {
        return DateTime::createFromFormat("Y-m-d", date("Y-m-d"));
    }

}
