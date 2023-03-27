@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Data Artikel</h1>
                <span class="divider divider--color"></span>
            </div>
            <div class="cards_body">
                <table class="table table-striped table-hover ">
                    <thead class="table-dark ">
                      <tr>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Author</th>
                        <th scope="col">Konten Artikel</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                        <td>@Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>

                  <a class="btn btn-primary" href="/editArtikel" role="button">Tambah Artikel</a>

            </div>
        </div>
@endsection