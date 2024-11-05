<?php

include_once __DIR__."/../../models/Manufacturer.php";

$manufactruers = Manufacturer::get_manufactruers();

include_once __DIR__ . "/../../views/manufacturer/show.view.php";