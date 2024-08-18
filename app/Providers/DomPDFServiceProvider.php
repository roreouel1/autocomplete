<?php

namespace App\Providers;

// use Barryvdh\DomPDF\ServiceProvider as DomPDFServiceProvider;
use Dompdf\Dompdf;
use Illuminate\Support\ServiceProvider;


class DomPDFServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('dompdf', function ($app) {
            $options = $app->make('dompdf.options');
            $dompdf = new Dompdf($options);
    
            $publicPath = base_path('public_html');
    
            // Check if the public_html path exists
            if (!is_dir($publicPath)) {
                error_log('Cannot resolve public path: ' . $publicPath);
                $publicPath = base_path('public');
            }
    
            $dompdf->setBasePath(realpath($publicPath));
    
            return $dompdf;
        
        });
    }
}
