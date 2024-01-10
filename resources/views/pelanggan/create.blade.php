@extends('layout.app.app.app')

@section('content')


<div class="container">

             <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Pwlanggan</h1>
                            </div>
                            <form class="user" action="{{ route('pelanggan.store') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Name</label>
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="name" required >
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">email</label>
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="name" required >
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="name" required >
                                </div>

                                <div class="form-group">
                                  <label for="">alamat</label>
                                  <textarea name="alamat" id="" cols="55    " rows="4"></textarea>
                                </div>

                                <div class="<div class="form-group">
                                  <label for="">jenis kelamin</label>
                                    <select name="jenis_kelamin" id="">
                                        <option value="1">laki-laki</option>
                                        <option value="2">perempuan</option>
                                    </select>
                                </div>


                                <button class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Save Pelanggan</span>
                                </button>
                            </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>


    </div>

    
@endsection