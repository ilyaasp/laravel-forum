@extends('layouts.app')

@section('content')

   <!-- <div class="d-flex justify-content-end mb-2">
        <a href="{{route('discussions.create')}}" class="btn btn-success">Add Discussion</a>     
    </div> -->   

    @foreach ($discussions as $discussion)
        <div class="card mb-4">
            
            @include('partials.discussion-header')

            <div class="card-body">
                <div class="text-center">
                    <strong>
                        {{$discussion->title}}
                    </strong>
                </div>
            </div>
        </div>
    @endforeach

    {{$discussions->appends(['channel' => request()->query('channel')])->links()}}

@endsection
