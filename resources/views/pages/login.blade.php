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
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
