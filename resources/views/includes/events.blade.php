
<div class="col-md-3">
    <aside>
        <div class="blog-sidebar rounded">
            <h4 class="font-italic">Upcoming Events</h4>
            <ol class="list-unstyled">
                @foreach ($events as $event)
                    <li><a href="#">{{$event->venue.' - ' . Carbon\Carbon::parse($event->date)->format('D jS M Y @ gA')
                    }}</a></li>
                    <hr>
                @endforeach
            </ol>
        </div>


    </aside>
</div>