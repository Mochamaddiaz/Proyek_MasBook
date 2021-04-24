Tutorial Mempersiapkan Folder Hasil CLone :
1. Clone project nya
2. trus tulis 'composer install', tunggu sampai selesai
3. tulis 'code .'
4. copy file env, jangan sampe ilang filenya, trus rename jadi .env
  - di dalamnya hilangin comment environment, dan ganti jadi development
  - trus database nya diganti (nama database, uname, dan password)
  - pastikan database udh ada ya, gapapa walaupun kosong isinya
5. trus di terminal tulis 'php spark migrate'
6. trus 'php spark serve'
7. buka browser dan akses http://localhost:8080/
8. web CI 4 sudah bisa terbuka
