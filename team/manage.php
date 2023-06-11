<?php

include "../core/libs/load.php";

Session::set("current_dir","team");
Load::common("header");
Load::common("navbar");
Load::body("team","manage");
Load::common("scripts");
