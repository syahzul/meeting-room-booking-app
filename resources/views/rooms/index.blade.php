@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="mb-4">
                Rooms

                <a href="{{ route('rooms.create') }}" class="btn btn-success float-right">
                    Register Room
                </a>
            </h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ($rooms->count())
                <div class="row mt-5">
                    @foreach ($rooms as $room)
                        <div class="col-md-4 col-sm-2 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    {{ $room->name }}
                                </div>
                                <div class="card-body">
                                    {{ Str::words($room->description, 10) }}

                                    <hr>

                                    <div class="row">
                                        <div class="col">Capacity</div>
                                        <div class="col text-right">
                                            {{ $room->capacity }}
                                        </div>
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col">Projector</div>
                                        <div class="col text-right">
                                            @if ($room->projector)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </div>
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col">Flip Chart</div>
                                        <div class="col text-right">
                                            @if ($room->flip_chart)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </div>
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col">Wi-Fi</div>
                                        <div class="col text-right">
                                            @if ($room->wifi)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.card-body -->

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('rooms.book', $room) }}" class="btn btn-info btn-block">
                                                Book This Room
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="float-right">
                                                <a href="{{ route('rooms.edit', $room) }}" class="btn btn-warning">
                                                    Edit
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><!-- /.row -->

                <div class="row justify-content-center mt-3 mb-3">
                    {{ $rooms->links() }}
                </div>
            @else
                <div class="text-danger text-center mt-5">
                    No room available.
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
