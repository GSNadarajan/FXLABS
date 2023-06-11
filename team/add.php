<?php

include "../core/libs/load.php";

Session::set("current_dir","user");
Load::common("header");
Load::common("navbar");
Load::body("team","add");
Load::common("scripts");
