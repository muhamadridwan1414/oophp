<?php

// sebuah konsep yang nantinya akan menciptakan hierarki antarkelas
// memungkinkan kita untuk menghubungkan kelas2 tadi menggunakan hierarki yang nantinya ketika 2 kelas / lebih kita hubungkan dengan konsep inheritance pasti ada konsep yang namanya parent dan child class

// Child class: mewarisi semua property dan method yang dimiliki parent-nya
// akan tetapi ada syaratnya(yang visible)

// diumpamakan, ada sebuah class dengan nama mobil
// class tersebut memiliki property / data diantaranya:
// 1. Nama
// 2. Merk
// 3. Warna
// 4. kecepatanMax
// 5. jumlahPenumpang

// lalu didalam class mobil tersebut juga terdapat method / behaviour / perilaku diantaranya:
// 1. tambahKecepatan()
// 1. kurangiKecepatan()
// 2. gantiTransmisi()
// 3. belokKiri()
// 4. belokKanan()