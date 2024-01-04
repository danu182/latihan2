
@extends('layout.app.app.app')
@section('content')

@push('script')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Paket == {{ $paket->name }}</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('paket.detail.create',$paket->id) }}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Add paket</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="crudTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>paket nama</th>
                                            <th>barang_id</th>
                                            <th>barang</th>
                                            <th>aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                        @forelse ($data as $item)
                                        <tr> 
                                            <td>{{ $item->id }}</td>       
                                            <td>{{ $item->paket->name }}</td>      
                                            <td>{{ $item->barang_id }}</td>      
                                            <td>{{ $item->barang->name }}</td>      
                                            <td>
                                                {{-- <a href="{{ route('paket.detail.index',$item->id) }}" class="btn btn-info" >detail</a>     --}}
                                                {{-- <a href="{{ route('paket.edit',$item->id) }}" class="btn btn-warning" >edit</a>     --}}
                                                <form class="btn btn-warning=" action="{{ route('detail.destroy', $item->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger" >
                                                        Hapus
                                                    </button>
                                                        
                                                </form>
                                            </td> 
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-warning">tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    {{-- <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>



@endsection
