<?php 
use App\Http\Livewire\SysConfig;
use App\Http\Livewire\ListUser;
use App\Http\Livewire\EditPermission;
use App\Http\Livewire\Home;
use App\Http\Livewire\BcDoanhSo;
use App\Http\Livewire\AddUser;
use App\Http\Livewire\BcSlSo;
return [
    1 => Home::route,
    2 => SysConfig::route,
    3 => ListUser::route,
    4 => EditPermission::route,
    5 => BcDoanhSo::route,
    6 => AddUser::route,
    7 => BcSlSo::route,
];