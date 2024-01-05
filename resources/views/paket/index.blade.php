
@extends('layout.app.app.app')
@section('content')

@push('script')

{{-- <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id', width: '5%'},
                    { data: 'name', name: 'name' },
                    { data: 'description', name: 'description' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '25%'
                    },
                ],
            });
        </script>
    
@endpush --}}



<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables Paket</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('paket.create') }}" class="btn btn-success btn-icon-split">
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
                                            <th>Name</th>
                                            <th>aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                        @forelse ($paket as $item)
                                        <tr> 
                                            <td>{{ $item->id }}</td>       
                                            <td>{{ $item->name }}</td>      
                                            <td>
                                                <a href="{{ route('paket.detail.index',$item->id) }}" class="btn btn-info" >detail</a>    
                                                <a href="{{ route('paket.edit',$item->id) }}" class="btn btn-warning" >edit</a>    
                                                <form class="btn btn-warning=" action="{{ route('paket.destroy', $item->id) }}" method="POST">
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
                                                <td colspan="3">tidak ada data</td>
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
