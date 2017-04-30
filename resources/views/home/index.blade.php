@extends( 'layouts.default' )

@section( 'content' )

<p>We offer three different classes, detailed below.</p>

@foreach( $classes as $class )
    <h2>{{ $class[ 'name' ] }}</h2>
    <p>{{ $class[ 'description' ]  }}</p>
    <ul class="instances">
    @foreach( $instances->get( $class[ 'acuity_id' ] ) as $instance )
        <li>
            <h5>
                <time datetime="{{ $instance[ 'date' ]->toIso8601String( ) }}">{{ $instance[ 'date' ]->format( 'l jS F') }} at {{ $instance[ 'date' ]->format( 'ga') }}</time>
                @if ( $instance[ 'slotsAvailable' ] == 0 )
                    <span class="badge badge-danger">Fully booked</span>
                @elseif ( $instance[ 'slotsAvailable' ] < 2 )
                    <span class="badge badge-warning">Only {{ $instance[ 'slotsAvailable' ] }} available</span>
                @else
                    <span class="badge badge-success">{{ $instance[ 'slotsAvailable' ] }} slots available</span>
                @endif
            </h5>

            @if ( $instance[ 'slotsAvailable' ] > 0 )
                <a href="/{{ $class[ 'key' ] }}/{{ $instance[ 'date' ]->toIso8601String( ) }}/{{ $instance[ 'calendarID' ] }}/book" class="btn btn-primary btn-sm">Book Now</a>
            @endif
        </li>
        @endforeach
    </ul>
@endforeach

@stop