<?php

    require("ppm");

    \ppm\ppm::import("net.intellivoid.opstream");

    $RadioBrowse = new \OpStream\Sources\RadioBrowse();
    var_dump($RadioBrowse->fetchStations(null, false, 0, 3));