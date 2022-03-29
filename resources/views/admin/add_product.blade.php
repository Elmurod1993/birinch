@extends("admin.layouts.layout")

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">price</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">country</label>
                    <input type="text" name="country" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">iamge</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="update product">

            </form>
        </div>
    </div>

@endsection
