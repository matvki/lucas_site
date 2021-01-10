<?php
session_start();
if ($_SESSION["language"] == "french") {
    $_SESSION["language"] = "english";
    header("Location: ../");
    die;
}else{
    $_SESSION["language"] = "french";
    header("Location: ../");
    die;
}