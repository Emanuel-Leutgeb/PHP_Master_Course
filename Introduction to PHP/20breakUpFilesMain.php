<?php

echo "Include" . "<br>" . "\n";
include "./20breakUpFilesExtern.php"; //don't stop if there is a problem
echo "Include Once" . "<br>" . "\n";
include_once "./20breakUpFilesExtern.php";
echo "Require" . "<br>" . "\n";
require "./20breakUpFilesExtern.php"; //stop if there is a problem
echo "Require Once" . "<br>" . "\n";
require_once "./20breakUpFilesExtern.php";

require_once "./20breakUpFilesFunction.php";

echo fullName("Emanuel", "Leutgeb");