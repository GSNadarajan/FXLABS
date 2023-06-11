<?php

include "../core/libs/load.php";

Session::set("current_dir","journal");
Load::common("header");
Load::common("navbar");
Load::body("journal","add");
Load::common("scripts");
