@extends('layouts.app')

@section('content')
<!--- Start of Unauthorized template--->
@guest 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-danger">You are not authorized</div>

                <div class="card-body text-danger">
                    Please Login
                </div>
            </div>
        </div>
    </div>
</div>
@endguest

<!--- End of Unauthorized template--->
@endsection
