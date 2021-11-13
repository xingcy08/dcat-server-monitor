<?php

use Xcy\DcatServerMonitor\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('xcyDcatAdmin/server/getCpuInfo', Controllers\DcatServerMonitorController::class.'@getCpuInfo');
Route::get('xcyDcatAdmin/server/getMemInfo', Controllers\DcatServerMonitorController::class.'@getMemInfo');
Route::get('xcyDcatAdmin/server/getPhpAndEnvInfo', Controllers\DcatServerMonitorController::class.'@getPhpAndEnvInfo');
Route::get('xcyDcatAdmin/server/getDiskInfo', Controllers\DcatServerMonitorController::class.'@getDiskInfo');
Route::get('xcyDcatAdmin/server/getNetInfo', Controllers\DcatServerMonitorController::class.'@getNetInfo');
Route::get('xcyDcatAdmin/server', Controllers\DcatServerMonitorController::class.'@index');
