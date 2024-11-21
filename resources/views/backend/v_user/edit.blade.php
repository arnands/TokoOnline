@extends('backend.v_layouts.app')
@section('content')
 
    <div class="card">
        <div class="card-body">
            <form action="{{ route('backend.user.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>foto</label>
                            @if($edit->foto)
                                <img src="{{ asset('storage/img-user/' . $edit->foto) }}" class="foto-preview" width="100%">
                            @else
                                <img src="{{ asset('storage/img-user/img-default.jpg') }}" class="foto-preview" width="100%">
                            @endif
                            @error('foto')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select name="role" class="form-control @error('role') is-invalid @enderror">
                            <option value=""{{ old('role', $edit->role) == '' ? 'selected' : '' }}>- Pilih Hak Akses</option>
                            <option value="1"{{ old('role',  $edit->role) == '1' ? 'selected' : '' }}>Super Admin</option>
                            <option value="0"{{ old('role',  $edit->role) == '0' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                            <option value=""{{ old('status', $edit->status) == '' ? 'selected' : '' }}>- Pilih status</option>
                            <option value="1"{{ old('status',  $edit->status) == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0"{{ old('status',  $edit->status) == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{ old('nama', $edit->nama) }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                            @error('nama')
                            <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>HP</label>
                            <input type="text" name="hp" value="{{ old('hp', $edit->hp) }}" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukkan Nomor HP" onkeypress="return hanyaAngka(event)">
                            @error('hp')
                            <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ old('email', $edit->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email">
                            @error('email')
                            <div class="invalid-feedback alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                        <a href="{{ route('backend.user.index') }}">
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection