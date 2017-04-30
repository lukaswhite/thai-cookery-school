@extends( 'layouts.default' )

@section( 'content' )

    <p>You are booking a place on <strong>{{ $class[ 'name' ] }}</strong> on <time datetime="{{ $date->toIso8601String( ) }}">{{ $date->format( 'l jS F') }} at {{ $date->format( 'ga') }}</time></p>

    <form method="post">
        <div class="form-group">
            <label>Please enter your forename</label>
            <input name="firstName" placeholder="Your forename" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Please enter your surname</label>
            <input name="lastName" placeholder="Your surname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Please enter your e-mail address</label>
            <input type="email" name="email" placeholder="Your e-mail address" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>

@stop