## Gerçek Zamanlı Broadcast Uygulaması

Proje geliştirirken çalıştırdığımız komutlar:
```bash
composer require livewire/livewire
php artisan make:livewire RealtimeMessage
php artisan livewire:layout
npm install
php artisan install:broadcasting
php artisan make:event SendRealtimeMessage
composer require jantinnerezo/livewire-alert
```

Projenin çalıştırılması:
```bash
php artisan serve --port=8000
php artisan serve --port=8001
npm run dev
php artisan reverb:start --debug
```
