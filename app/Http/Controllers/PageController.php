<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "<h2> Selamat Datang </h2> <br> 
        Menampilkan Contact Us <br>
        <a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
        
    }

    public function about()
    {
        return "Nama : Mirza Priscilla Faradiba <br>
        NIM : 2141720254";
    }

    public function home(){
        echo "Hallo Selamat Datang di WEB Educa Studio";
    }

    public function product()
    {

        echo " Menampilkan Daftar Product
        <ul>
            <li>
                <a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/riri-story-books'>Product 3</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a>
            </li>
        </ul>";
    }

    public function program()
    {

        echo " Menampilkan Daftar Program
        <ul>
            <li>
                <a href='https://www.educastudio.com/program/karir'>Program 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/magang'>Program 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a>
            </li>
        </ul>";
    }

    public function news(){
        echo " Menampilkan Daftar berita
        <ul>
            <li>
                <a href='https://www.educastudio.com/news'>Berita 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>Berita 2</a>
            </li>
        </ul>";
    }

    public function aboutus(){
        echo " <h1>Menampilkan About Us</h1>
        <a href='https://www.educastudio.com/about-us'>About Us</a>";

    }

    public function contact(){
        echo "<h1>Menampilkan Contact Us</h1>
        <a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Halaman Artikel dengan ID ' .$id; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
