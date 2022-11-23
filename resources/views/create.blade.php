@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

        <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
              <span style="color:red;">@error('name') {{$message}} @enderror</span>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
              <span style="color:red;">@error('email') {{$message}} @enderror</span>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
              <span style="color:red;">@error('phone') {{$message}} @enderror</span>
          </div>


          <div class="form-group">
              <label for="phone">Photo</label>
              <input type="file" name="image" class="form-control" placeholder="image">
              <span style="color:red;">@error('image') {{$message}} @enderror</span>
          </div>


          <div class="form-group">
              <label for="password">Address</label>
              <input type="text" class="form-control" name="address"/>
              <span style="color:red;">@error('address') {{$message}} @enderror</span>
          </div>
          <p></p>
          <button type="submit" class="btn btn-block btn-danger" style="float:right;">Create User</button>
      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
