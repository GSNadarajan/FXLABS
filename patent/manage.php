<?php

include "../core/libs/load.php";

Session::set("current_dir","patent");
Load::common("header");
Load::common("navbar");
Load::body("patent","manage");
Load::common("scripts");
