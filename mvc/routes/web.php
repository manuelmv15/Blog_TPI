<?php

use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiasController;
use app\controllers\miInformacionController;
use app\controllers\registrarVisitaController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/home", [HomeController::class, "index"]);

Route::get("/lunes", [DiasController::class, "lunes"]);

Route::get("/martes", [DiasController::class, "martes"]);

Route::get("/miercoles", [DiasController::class, "miercoles"]);

Route::get("/jueves", [DiasController::class, "jueves"]);

Route::get("/viernes", [DiasController::class, "viernes"]);

Route::get("/mi-informacion", [miInformacionController::class, "index"]);

Route::get("/registrar-visita", [registrarVisitaController::class, "index"]);

Route::post("/guardarPersona", [registrarVisitaController::class, "guardarPersona"]); 


Route::dispatch();