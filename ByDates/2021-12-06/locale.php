<?php

setlocale(LC_TIME, "C");
echo strftime("%A: \n");

setlocale(LC_TIME, "fi_FI.utf8");
echo strftime("in Finnish is \"%A\",\n");

setlocale(LC_TIME, "fr_FR.utf8");
echo strftime("in French \"%A\",\n");

setlocale(LC_TIME, "de_DE.utf8");
echo strftime("in German \"%A\",\n");

setlocale(LC_TIME, "lt_LT.utf8");
echo strftime("in Lithuaniai \"%A\"\n");