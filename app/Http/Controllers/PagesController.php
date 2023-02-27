<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home', ['name' => 'Hello, Selamat Datang Mirza di beranda Home']);
    }

    public function product()
    {
        return view ('product', ['produk' => 'List Product 
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games">Product 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Product 2</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/riri-story-books">Product 3</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/kolak-kids-songs">Product 4</a>
            </li>
        </ul>']);
    }

    public function news(){
        return view ('news', ['berita' => 'List News
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/news">Berita 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Berita 2</a>
            </li>
        </ul>'
    ]);
    }

    public function program(){
        return view ('program', ['programs' => 'List Program
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/program/karir">Program 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/magang">Program 2</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/kunjungan-industri">Program 3</a>
            </li>
        </ul>']);
    }

    public function aboutus(){
        return view('about-us', ['aboutus' => '<h1>Menampilkan About Us</h1>
        <a href="https://www.educastudio.com/about-us">About Us</a>']);
    }

    public function index(){
        return view('contact-us', ['contact' => 'Menampilkan Contact Us <br>
        <a href="https://www.educastudio.com/contact-us">Contact Us</a>']);
    }
}
