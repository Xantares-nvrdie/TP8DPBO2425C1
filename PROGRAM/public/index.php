<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../app/core/Config.php";
require_once "../app/core/Database.php";

$uri = explode("/", trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));
$uri = array_slice($uri, 3); // Menghilangkan segmen sebelum /public/
$segment = $uri[0] ?? ""; // aman jika kosong

if ($segment === "" || $segment === "lecturers") {
    require "../app/controllers/LecturerController.php";
    $c = new LecturerController();

    if (!isset($uri[1])) $c->index();                     // /lecturers
    elseif ($uri[1] === "create") $c->create();           // /lecturers/create
    elseif ($uri[1] === "store") $c->store($_POST);       // /lecturers/store
    elseif ($uri[1] === "edit") $c->edit($uri[2]);        // /lecturers/edit/ID
    elseif ($uri[1] === "update") $c->update($uri[2], $_POST); // /lecturers/update/ID
    elseif ($uri[1] === "delete") $c->delete($uri[2]);    // /lecturers/delete/ID
    exit;
}

if ($segment === "courses") {
    require "../app/controllers/CourseController.php";
    $c = new CourseController();

    if (!isset($uri[1])) $c->index();                     // /courses
    elseif ($uri[1] === "create") $c->create();           // /courses/create
    elseif ($uri[1] === "store") $c->store($_POST);       // /courses/store
    elseif ($uri[1] === "edit") $c->edit($uri[2]);        // /courses/edit/ID
    elseif ($uri[1] === "update") $c->update($uri[2], $_POST); // /courses/update/ID
    elseif ($uri[1] === "delete") $c->delete($uri[2]);    // /courses/delete/ID
    exit;
}


if ($segment === "research") {
    require "../app/controllers/ResearchController.php";
    $c = new ResearchController();

    if (!isset($uri[1])) $c->index();                     // /research
    elseif ($uri[1] === "create") $c->create();           // /research/create
    elseif ($uri[1] === "store") $c->store($_POST);       // /research/store
    elseif ($uri[1] === "edit") $c->edit($uri[2]);        // /research/edit/ID
    elseif ($uri[1] === "update") $c->update($uri[2], $_POST); // /research/update/ID
    elseif ($uri[1] === "delete") $c->delete($uri[2]);    // /research/delete/ID
    exit;
}

echo "404 - Page Not Found";
