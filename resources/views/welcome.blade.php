@extends('layouts.app')

@section('title', 'Landing Page | Peduli Diri')

@section('content')
<style type="text/css">
    @media screen and (min-width: 400px)
    {
        .card{
        margin-top: -150px;
        width: 300px;
        }

        .btn{
            width: 80px
        }
    }

    @media screen and (max-width: 700px)
    {
        .card{
        margin-top: -150px;
        width: 300px;
        }

        .btn{
            width: 80px
        }
    }

    @media screen and (min-width: 701px)
    {
        .card{
            margin-top: -250px;
            width: 400px;
        }

        .btn{
            width: 100px
        }
    }

</style>

<div class="container-fluid bg-white">
    <img src="/img/landing.png" class="img-fluid mt-1">
    <div class="container">
    <center>
        <div class="card">
            <div class="card-body text-center">
                <br>
                <h4 class="mb-3">Silakan Login Terlebih Dahulu</h4>
                <a href="/login" class="btn btn-info btn-sm text-white">Login</a>
                <br><br>
            </div>
        </div>
    </center>
    </div>
</div>
@endsection
