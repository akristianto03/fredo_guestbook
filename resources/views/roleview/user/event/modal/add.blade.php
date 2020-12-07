<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(count($events) > 0)
                    <form action="{{route ('user.event.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Choose Event</label>
                            <select name="event_id" class="custom-select" required>
                                @foreach($events as $event)
                                    <option value="{{$event->id}}">{{$event->title . " (" . \Carbon\Carbon::parse($event->event_date)->format('d F Y') . ")"}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Send request</button>
                        </div>
                    </form>
                @else
                    <h1 class="h4 mb-0 font-weight-bold">No Ongoing Event</h1>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



{{--    <div class="container" style="margin-top: 20px;">--}}
{{--        <div class="row mt-5">--}}
{{--            <h1 class="mt-5">Masukkan Data</h1>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <form action="{{ route('user.event.store') }}" method = "post">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Title:</label>--}}
{{--                        <input type="text" class="form-control" name="title">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Description:</label>--}}
{{--                        <textarea type="text" class="form-control" name="description"></textarea>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <select name="created_by" class="custom-select">--}}
{{--                            @foreach($users as $user)--}}
{{--                                <option value="{{ $user->id }}">{{ $user->name . ' (' . $user->email . ')' }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Event Date:</label>--}}
{{--                        <input type="date" class="form-control" name="event_date">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
