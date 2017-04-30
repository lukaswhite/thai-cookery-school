@extends( 'layouts.default' )

@section( 'content' )

    <div class="alert alert-success" role="alert">
        <strong>Your booking is confirmed!</strong> Your booking reference is {{ $appointment[ 'id' ] }}.
    </div>

@stop