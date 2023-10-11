<?php

use App\Controllers\ProfileController;

return [
 // "/users/profile" => ["App\Controllers\ProfileController", "index"],
 // "/users/profile/edit" => ["App\Controllers\ProfileController", "edit"],

 "/users/profile" => [ProfileController::class, "index"],
 "/users/profile/edit" => [ProfileController::class, "edit"],
];
