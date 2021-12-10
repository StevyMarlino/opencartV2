@extends('layouts.front')

@section('content')

    <div class="container md:py-8">
        <form action="{{route('shops.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="description">Your store name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


@endsection
