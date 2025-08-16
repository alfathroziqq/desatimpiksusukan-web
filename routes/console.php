<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('generate:sitemap', function () {
    Sitemap::create()
        ->add(Url::create('https://desatimpiksusukan.id/'))
        ->add(Url::create('https://desatimpiksusukan.id/sejarah-desa'))
        ->add(Url::create('https://desatimpiksusukan.id/tata-kelola-desa'))
        ->add(Url::create('https://desatimpiksusukan.id/peta-potensi-desa'))
        ->add(Url::create('https://desatimpiksusukan.id/dokumen'))
        ->add(Url::create('https://desatimpiksusukan.id/berita'))
        ->add(Url::create('https://desatimpiksusukan.id/galeri-desa'))
        ->add(Url::create('https://desatimpiksusukan.id/belanja'))
        ->writeToFile(public_path('sitemap.xml'));

    $this->info('✅ Sitemap berhasil dibuat di public/sitemap.xml');
})->purpose('Generate sitemap XML untuk SEO');
