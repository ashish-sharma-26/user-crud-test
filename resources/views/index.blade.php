@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User Data') }} <span style="float:right;"><a href="{{ route('students.create') }}" class="btn btn-outline-secondary btn-sm">Add New</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   


                    <table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Name</th>
           
            <th class="text-center">Image</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone</th>
            
            <th class="text-center">Address</th>
           
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $index=1; ?>
        @foreach($students as $student)
        <tr>
            <td>{{$index}}</td>
            <td>{{$student->name}}</td>
            <td><img src='/images/{{ $student->image }}' width="100px"></td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->address}}</td>
            <td>
            <a href="{{ route('students.edit', $student->id)}}" class="btn btn-outline-secondary btn-sm">Edit</a>
            

            <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
            <!-- <td></td>
            <td></td> -->
        </tr>
        <?php $index++; ?>
        @endforeach
    </tbody>
</table>



                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
@endsection
