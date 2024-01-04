@extends('layout.app.app.app')

@section('content')


<div class="container">

              <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDit an paket = {{ $paket->name }}</h1>
                            </div>
                            <form class="user" action="{{ route('paket.update', $paket->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Name</label>
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="name" required value="{{ $paket->name }}">
                                </div>

                                <button class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Update paket</span>
                                </button>
                            </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>
    </div>

    
@endsection