@extends('admin.app', ['title' => 'Admin | Tambah Service'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Service</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.service.index')}}"></a>
                        </li>
                        <li class="breadcrumb-item">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.service.store')}}" id="formservice" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Service</h6>
                            <div class="row">
                                    <div class="mb-1">
                                        <label class="form-label" for="header">Header</label>
                                        <input type="text" class="form-control" name="header" autocomplete="off"
                                            placeholder="Header" id="header" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="detail">Detail</label>
                                        <textarea id="detail" name="detail" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="link">Text</label>
                                        <input type="text" class="form-control" name="text" autocomplete="off"
                                            placeholder="Text" id="text" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.service.index')}}" class="btn btn-outline-secondary"><i
                                    class="fa fa-chevron-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i>
                                Selesai</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
<script>
    tinymce.init({
    selector: 'textarea#detail',
    height: 350,
    });
</script>

@endsection