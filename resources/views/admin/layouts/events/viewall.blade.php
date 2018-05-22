@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="row mt-3">
        <div class="col-sm-12 mb-12">
            <table class="table table-striped table-bordered table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Venue</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit Event</th>
                    <th scope="col">Cancel Event</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{$event->venue}}</td>
                        <td>{{Carbon\Carbon::parse($event->date)->format('D jS M Y')}}</td>
                        <td>{{Carbon\Carbon::parse($event->time)->format('g:i A')}}</td>
                        <td>{{$event->contact}}</td>
                        <td>{{$event->address}}</td>
                        <td><a href="/events/{{$event->id}}/edit" class="btn
                        btn-warning">Edit</a></td>
                        <td>
                            <form action="/events/{{$event->id}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger"  onclick="return confirm('Are you sure you want to ' +
                                 'remove this event?')"
                                        type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$events->links()}}
        </div>


    </div>
    <!-- Area Chart Example-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

@endsection