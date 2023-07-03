@extends('layout.master')
@section('title')
<title>Create</title>

@endsection

@section('content')
<div class="bg-dark">
    <div
      class="container d-flex flex-column justify-content-center align-items-center text-center min-vh-100"

    >
      <div
        class="row border shadow box-shadow rounded-5 p-3 justify-content-center align-items-center text-center bg-dark"
      >
      <h3>Insert Product</h3>

        <form action="" method="post" class="form-group" enctype="multipart/form-data">
            {{ csrf_field() }}
            @foreach ($errors->all() as $er)

                <p class="text-danger">{{$er}}</p>
            @endforeach
            @if (session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif

          <div class="text-center justify-content-center mt-3">
            <input
              type="text"
              class="form-control mb-3"
              placeholder="Enter your title"
              style="width: 100%"
              name="title"
            />
          </div>
          <input
            type="number"
            name="price"
            id=""
            class="form-control mb-3"
            placeholder="Enter your price"
            style="width: 100%"
          />
          <div class="bg-light rounded-2">
            <label for="exampleFormControlFile1" class="my-2">Upload your img</label>
            <input type="file" name="file[]" class="file" multiple class="form-control-file" id="exampleFormControlFile1" >


          </div>

          <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1" class="text-light mt-2">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>






          <div class="input-group mb-3">
            <button class="btn btn-lg btn-primary w-100 fs-6">Insert Post</button>
          </div>

        </div>
        </form>
      </div>
    </div>
</div>


@endsection
