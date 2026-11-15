
<?php

require_once "index.php";

$publishedProjects = [];

foreach ($projects as $project) {

    if ($project["status"] === "published") {

        $publishedProjects[] = $project;

    }

}

?>
