<x-app-layout>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            @include('sidebar')
        </div>
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h6>Create New Category</h6>

                </div>
                <div class="card-body">
                    <form action="/Management/category" method="POST">
                        @csrf
                        <label for="">New Category</label> <br>
                        <input type="text" class='form-control' name='cat'> <br>
                        <input type="submit" class='btn btn-danger'>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>

        </div>
    </div>
</div>

</x-app-layout>
