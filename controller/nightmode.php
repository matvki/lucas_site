<?php
session_start();
if ($_SESSION["nightMode"] != "night") {
    $_SESSION["nightMode"] = "night";
    header("Location: ../");
    die;
}else{
    $_SESSION["nightMode"] = "day";
    header("Location: ../");
    die;
}
