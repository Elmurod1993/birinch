@extends("admin.layouts.layout")

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('store.category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">iamge</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">category</label>
                    <input type="file" name="category" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="add category">

            </form>
        </div>
    </div>

@endsection
