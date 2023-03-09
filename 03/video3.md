-------------------- TAG PHP PERTAMA --------------------
Di video ini membahas tentang tag PHP Pertama yang akan kita coba. Pertama yaitu memilih directory untuk penyimpanan filenya dengan mengetikkan :"cd [nama direktori yang ingin dituju]" (change directory) di terminal windows atau terminal vscode untuk mengubah direktori sesuai yang kita inginkan. Jika ingin membuat direktori, caranya dengan mengetikkan "mkdir [nama direktori yang dibuat]" (make directory). 

Selanjutnya buka vscode buat file baru di direktori yang anda pilih tadi dengan nama filenya "index.html". Setelah itu ketik pada editor "html:5" lalu enter, maka akan muncul default html lengkapnya. Setelah itu ketik tag <h1> di dalam body dan di dalam tag tersebut beri kalimat "Hello World". 

Lalu kembali ke terminal dan jalankan "php -h" ini akan menampilkan bantuan untuk php dan lihat di bagian "-S" ada kalimat "Run with built-in web server" artinya berjalan dengan web bawaan server. Untuk memboot server sendiri caranya yaitu dengan mengetikkan "php -S localhost:[port]" untuk portnya bisa terserah yang kita inginkan. Dan akhirnya kita memiliki server pengembangan yang sedang berjalan. Untuk mengaksesknya hanya dengan ctrl + click server tadi. Maka kita akan diarahkan ke browser dan akan muncul isi dari file kita tadi. 

Jika file "index.html" diubah menjadi php "index.php" lalu kita menjalankan di browser maka yang terjadi masih sama dengan sebelumnya. Namun, jika kita mengubah nama file dengan nama yang lain misal "abcdef.html" lalu kita reload di browser maka yang terjadi adalah "Not Found" ini mengartikan bahwa index adalah nama file yang penting. 

Selanjutnya kita akan membuat blok php pertama kita dengan mengetikkan "<?php  ?>". Untuk menulis teks kita bisa melakukannya dengan mengetikkan echo "Hello World"; di dalam tag php tersebut. 

Untuk fungsi "echo" bisa diganti menjadi fungsi "print" maka nanti hasilnya akan sama dengan sebelumnya. Namun, mereka memiliki perbedaan yaitu fungsi print hanya boleh di berikan satu parameter saja, sedangkan echo boleh lebih dari satu. Contoh ada di kodingan.