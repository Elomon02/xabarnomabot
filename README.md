Botga xabar yuboruvchi kichik sayt

```bash
   git clone https://github.com/Elomon02/xabarnomabot.git
   cd xabarnomabot
```
so'ng qo'shimcha fayllar o'rnatiladi
```bash
   composer install
   npm install
```
```bash
   php artisan migrate
```
databasa fayllarini migratsiya qilish uchun
```bash
   php artisan migrate
```

.env faylidan copy qilib .env.example faylini yaratish uchun
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```

Rotur dagi keshlarni tozalash uchun
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```
proektni ishga tushurish uchun ohiri bu kommanda yoziladi
```bash
   php artisan serve
```
 Ushbu oxirgi buyruqdan keyin bravzerda http://localhost:8000 shu manzilda saytimizni bosh sahifasini ochishingiz mumkin,xabar yuborish sahifasiga o'tib form maydoniga xabar sarlavhasi,matni,fayl tanlab xabar yuborish tugmasini bosib botga xabar yuborishingiz mumkin shundan so'ng botga kirib xabarni ko'rish mumkin.
