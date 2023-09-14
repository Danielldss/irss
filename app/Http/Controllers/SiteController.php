<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SiteController extends Controller
{
    public function index() {
        return View::make('index', ['title' => 'Página inicial = IRSS Patentes']);
    }

    public function services() {
        return View::make('services', ['title' => 'Serviços = IRSS Patentes']);
    }

    public function about() {
        return View::make('about', ['title' => 'Sobre nossa empresa = IRSS Patentes']);
    }

    public function comoFunciona() {
        return View::make('faqs', ['title' => 'Como funciona = IRSS Patentes']);
    }

    public function contact() {
        return View::make('contact', ['title' => 'Entre em contato = IRSS Patentes']);
    }
}
