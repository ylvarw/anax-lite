<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");

// $urlStatus = $app->url->create("status");


?><navbar>
<a href="<?= $urlHome ?>">Home</a>
<a href="<?= $urlAbout ?>">About</a>
<a href="<?= $urlReport ?>">Report</a>
</navbar>
