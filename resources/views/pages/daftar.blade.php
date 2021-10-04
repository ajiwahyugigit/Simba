@extends('layouts.app')

@section('content')
    <div class="main-daftar">
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            Daftar
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email Anda">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Passwod</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Konfirmasi Password Anda">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Jenis Lembaga:</label>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Lembaga:</label>
                                  <label for="exampleInputEmail1" class="form-label">Jenis Lembaga</label>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Daftar</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
