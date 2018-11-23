
@extends('layouts.base')


@section('body')
<div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Writing</h5>
                        <p class="card-text">Select for start with some exercices about writing</p>
                        <a href="/funcionario/writing" class="btn btn-primary">Let's go</a>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Reading</h5>
                        <p class="card-text">Select for start with some exercices about reading</p>
                        <a href="/funcionario/reading" class="btn btn-primary">Let's go</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Listening</h5>
                        <p class="card-text">Select for start with some exercices about listening</p>
                        <a href="/funcionario/listening" class="btn btn-primary">Let's go</a>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Grammar</h5>
                        <p class="card-text">Select for start with some exercices about Grammar</p>
                        <a href="/funcionario/grammar" class="btn btn-primary">Let's go</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection