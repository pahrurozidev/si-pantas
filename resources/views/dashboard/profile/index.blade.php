@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Profile</h1>
        </div>
   

    <div class="col-lg-7">
                <div class="card-style mb-30">
                    <form method="post" action="/dashboard/profile" >
                        @csrf
                        <h3 class="mb-25 fw-bold">Account Information</h6>
                            <div class="input-style-1">
                                <label>Full Name</label>
                                <input type="text" placeholder="Full Name" id="name" name="name"
                                    value="{{ auth()->user()->name }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>Username</label>
                                <input type="text" placeholder="Username" id="username" name="username"
                                    value="{{ auth()->user()->username }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>Email</label>
                                <input type="text" placeholder="Email" value="{{ auth()->user()->email }}" disabled />
                            </div>
                            <div class="input-style-1">
                                <label>No Handphone</label>
                                <input type="text" placeholder="No Handphone" id="no_hp" name="no_hp"
                                    value="{{ auth()->user()->no_hp }}" required />
                            </div>
                            <div class="input-style-1">
                                <label>Address</label>
                                <textarea placeholder="Address" rows="5" name="address" id="address"
                                    value="{{ auth()->user()->address}}"></textarea>
                            </div>
                            <div class="form-group mb-25">
                                <div class="row align-items-end">
                                    <div class="col-sm-3">
                                        <img src="{{ url('') }}/storage/{{auth()->user()->photo}}" class="img-thumbnail"
                                            id="output">
                                    </div>
                                    <div class="col-sm-9 ">
                                        <div class="custom-file mt-auto">
                                            <input type="file" class="form-control cs" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-style-1">
                                <button type="submit"
                                    class="main-btn btn-hover primary-btn ms-auto d-block">Submit</button>
                            </div>
                    </form>
                    <!-- end input -->
                </div>
            </div> 
        </main>
@endsection