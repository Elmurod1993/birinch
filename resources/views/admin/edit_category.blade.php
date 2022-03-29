@extends("admin.layouts.layout")
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <input type="text" name="id" class="form-control" value="{{$category['id']}}">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control" value="{{$category['name']}}">
                    </div>

                    <div class="form-group">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control" value="{{$category['image']}}">
                    </div>

                    <input type="submit" class="btn btn-primary" value="update product">

                </form>

            </div>
            <div class="col-md-6">
                <img src="{{asset('storage/'.$category['image'])}}" width="300">
            </div>
        </div>
    </div>
@endsection
