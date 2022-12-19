@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="box-header with-border">
                    <h4 class="box-title">Edit Mobil</h4>
                  </div>

                <form class="row g-3" method="post" action="{{route('owner.update_mobil')}}">
                  @csrf
                    <div class="col-md-6">
                      <fieldset disabled>
                        <label for="mobil" class="form-label">Id Mobil</label>
                        <input type="text" class="form-control" value="{{$editData->id}}" id="mobil" name="mobil" required data-validation-required-message="This field is required" placeholder="id">
                      </fieldset>                    
                    </div>
                    <div class="col-md-6 ">
                      <label for="mobil" class="form-label">Nama Mobil</label>
                      <input type="text" class="form-control" value="{{$editData->nama_mobil}}" id="mobil" name="mobil" required data-validation-required-message="This field is required" >
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="jenis" class="form-label">Jenis Mobil</label>
                      <input type="text" class="form-control" value="{{$editData->jenis_mobil}}" id="jenis" name="jenis" required data-validation-required-message="This field is required">
                    </div>
                    <div class="col-md-6 pt-4">
                        <label for="harga" class="form-label" >Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input type="text" class="form-control" value="{{$editData->harga}}" id="harga" name="harga" aria-describedby="basic-addon1" required data-validation-required-message="This field is required">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="kursi" class="form-label">Jumlah Kursi</label>
                      <input type="text" class="form-control" value="{{$editData->jumlah_kursi}}" id="kursi" name="kursi" required data-validation-required-message="This field is required">
                    </div>
                    <div class="col-md-6 pt-4">
                      {{-- <label for="bahanBakar" class="form-label">Bahan Bakar</label> --}}
                      {{-- <input type="text" class="form-control" id="bahanBakar" name="bahanBakar" required data-validation-required-message="This field is required"> --}}
                      <div class="form-group">
                        <label for="bahanBakar">Bahan Bakar</label>
                        <select class="form-control" id="bahanBakar">
                            <option selected>Pilih Bahan Bakar</option>
                            <option value="Bensin" {{($editData->bahan_bakar=="Bensin"?"selected":"")}}>Bensin</option>
                            <option value="Solar" {{($editData->bahan_bakar=="Solar"?"selected":"")}}>Solar</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <label for="bahanBakar">Jenis Transmisi</label>
                            <select class="form-control" id="bahanBakar">
                                <option selected>Pilih Jenis Transmisi</option>
                                <option value="Matic" {{($editData->jenis_transmisi=="Matic"?"selected":"")}}>Matic</option>
                                <option value="Manual" {{($editData->jenis_transmisi=="Manual"?"selected":"")}}>Manual</option>
                                <option value="Manual & Matic" {{($editData->jenis_transmisi=="Manual & Matic"?"selected":"")}}>Manual & Matic</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="deskripsi" class="form-label">Deskripsi Mobil</label>
                      <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required data-validation-required-message="This field is required">{{$editData->deskripsi}}</textarea>
                    </div>

                    <div class="input-group mb-3 pt-4 col-md-6">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">{{$editData->mobil_photo_path}}</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                      </div>
                    </div>
                    
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12">Simpan Perubahan</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>

            <!-- /.container-fluid -->

@endsection
