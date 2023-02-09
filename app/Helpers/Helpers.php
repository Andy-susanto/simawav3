<?php
use App\Models\User;

function countAllUser()
{
    return User::count();
}

function countAllMahasiswa()
{
    return User::where('usertype', 'mahasiswa')->count();
}
