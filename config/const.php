<?php

return [

    /*
    |--------------------------------------------------------------------------
    | write constants for this project
    |--------------------------------------------------------------------------
    */

    'SUCCESS_CREATE_MESSAGE' => 'Data yang dimasukkan telah disimpan.',        // success when data created
    'FAILED_CREATE_MESSAGE'  => 'Kami tidak dapat menyimpan entri Anda.', // failed when data created
    'SUCCESS_UPDATE_MESSAGE' => 'Data yang diedit telah disimpan.',        // success when data updated
    'FAILED_UPDATE_MESSAGE'  => 'Data yang diedit tidak dapat disimpan.', // failed when data updated
    'SUCCESS_DELETE_MESSAGE' => 'Data telah dihapus.',        // success when data deleted
    'FAILED_DELETE_MESSAGE'  => 'Data tidak dapat dihapus.', // failed when data deleted
    'FAILED_DELETE_SELF_MESSAGE'  => 'Data tidak dapat dihapus, tidak dapat menghapus akun Anda.', // failed when data deleted self account
    'FAILED_VALIDATOR'       => 'Silakan periksa formulir di bawah untuk kesalahan.', // failed when validator not pass
    'ERROR_FOREIGN_KEY' => 'Tidak dapat menghapus data ini, karena data ini digunakan di data lain.',

    'UPLOAD_PATH' => public_path('uploads/'),

];
