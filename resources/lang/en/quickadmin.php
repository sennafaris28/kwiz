<?php

return [
    'create' => 'Buat',
    'save' => 'Simpan',
    'edit' => 'Edit',
    'view' => 'Lihat',
    'update' => 'Update',
    'list' => 'Daftar',
    'no_entries_in_table' => 'Tabel kosong',
    'custom_controller_index' => 'Custom controller index.',
    'logout' => 'Logout',
    'add_new' => 'Tambah baru',
    'are_you_sure' => 'Apakah anda yakin ?',
    'back_to_list' => 'Kembali ke daftar',
    'dashboard' => 'Dashboard',
    'delete' => 'Hapus',
    'quickadmin_title' => 'Kwiz',

    'user-management' => [
        'title' => 'Manajemen User',
        'fields' => [
        ],
    ],

    'test' => [
        'new' => 'Kuis Baru',
    ],

    'roles' => [
        'title' => 'Roles',
        'fields' => [
            'title' => 'Title',
        ],
    ],

    'users' => [
        'title' => 'Pengguna',
        'fields' => [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Password',
            'role' => 'Role',
            'remember-token' => 'Remember token',
        ],
    ],

    'user-actions' => [
        'title' => 'Kegiatan Pengguna',
        'fields' => [
            'user' => 'User',
            'action' => 'Action',
            'action-model' => 'Action model',
            'action-id' => 'Action id',
        ],
    ],

    'topics' => [
        'title' => 'Topik',
        'fields' => [
            'title' => 'Judul',
        ],
    ],

    'questions' => [
        'title' => 'Pertanyaan',
        'fields' => [
            'topic' => 'Topik',
            'question-text' => 'Teks pertanyaan',
            'code-snippet' => 'Code snippet',
            'answer-explanation' => 'Penjelasan jawaban',
            'more-info-link' => 'Tautan info tambahan',
        ],
    ],

    'questions-options' => [
        'title' => 'Opsi Pertanyaan',
        'fields' => [
            'question' => 'Pertanyaan',
            'option' => 'Opsi',
            'correct' => 'Jawaban benar',
        ],
    ],

    'results' => [
        'title' => 'Hasil saya',
        'fields' => [
            'user' => 'Pengguna',
            'question' => 'Pertanyaan',
            'correct' => 'Benar',
            'date' => 'Tanggal',
            'result' => 'Nilai',
        ],
    ],

    'laravel-quiz' => 'Buat kuis baru',
    'quiz' => 'Jawab 10 pertanyaan berikut.',
    'submit_quiz' => 'Submit jawaban',
    'view-result' => 'Lihat hasil',

];
