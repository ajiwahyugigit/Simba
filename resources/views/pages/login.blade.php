@extends('layouts.app')

@section('content')
    <div class="main-login">
        <div class="container">
            <div class="row justify-content-center mt-5" style="margin-bottom: 60px;">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            Masuk
                        </div>
                        <div class="card-body">
                            <form method="post" action="/login" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email address</label>
                                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"></i>
                                    Masuk
                                </button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
