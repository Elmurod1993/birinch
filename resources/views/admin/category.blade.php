@extends("admin.layouts.layout")
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('create.category')}}" class="btn btn-primary m-5">add product</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>country</th>
                    <th>image</th>
                </tr>

                </thead>
                <tbody>
                @foreach(\App\Models\Cotegory::all() as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>

                        <td><img src="{{asset('storage/'.$item->image)}}" width="100" alt=""></td>
                        <td>
                            <form style="display: inline-block" action="{{route('delete.category')}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id"  value="{{$item->id}}">
                                <input type="submit" class="btn btn-info" value="delete">
                            </form>

                            <form style="display: inline-block" action="{{route('edit.category')}}" method="post">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id"  value="{{$item->id}}" method="post">
                                <input type="submit" class="btn btn-info" value="edit">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
