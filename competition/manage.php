<?php

include "../core/libs/load.php";

Session::set("current_dir","competition");
Load::common("header");
Load::common("navbar");
Load::body("competition","manage");
Load::common("scripts");
