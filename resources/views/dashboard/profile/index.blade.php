@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Profile</h1>
        </div>
   

    <div class="col-lg-7">
                <div class="card-style mb-30">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                    <form method="post" action="/dashboard/profile" >
                    @method('PUT')   
                    @csrf
                        
                            <div class="input-style-1">
                                <label>Nama</label>
                                <input type="text" placeholder="Username" id="username" name="username"
                                    value="{{ auth()->user()->username }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>NIK</label>
                                <input type="text" placeholder="Nik" id="nik" name="nik"
                                    value="{{ auth()->user()->nik }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>Tgl.Lahir</label>
                                <input type="text" placeholder="lahir" id="lahir" name="lahir"
                                    value="{{ auth()->user()->tgl_lahir }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>Email</label>
                                <input type="text" placeholder="Email" value="{{ auth()->user()->email }}" disabled />
                            </div>
                            <div class="input-style-1">
                                <label>No.Handphone</label>
                                <input type="text" placeholder="No.Handphone" value="{{ auth()->user()->telepon }}" id="no_hp" name="no_hp"
                                     />
                            </div>
                            <div class="input-style-1">
                                <label>Alamat</label>
                                <textarea placeholder="Alamat lengkap...." rows="4" name="address" id="address"
                                    ></textarea>
                            </div>
                           
                            <div class="input-style-1">
                                <button type="submit"
                                    class="main-btn btn-hover primary-btn ms-auto d-block">Simpan</button>
                            </div>
                    </form>
                    <!-- end input -->
                </div>
            </div> 
        </main>
@endsection