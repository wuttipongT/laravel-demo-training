@extends('layouts.app')

@section('content')
<div class="container">
            <div class="jumbotron">
              <h1>Hello, world!</h1>
              <p>...</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>

            <button class="btn btn-primary" onclick="BootstrapDialog.alert('click me');">click me!</button>
            <button class="btn btn-primary" onclick="toastr['error']('Hello');">toastr!</button>
            <input type="checkbox" data-toggle="toggle"/>
            <input type="text" class="form-control" />
            <table id="table" class="display"></table>
        </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    window.onload = function () {
        $('#table').dataTable({
            "processing": true,
            "ajax": "{{ asset('json/objects_deep.txt') }}",
            "columns": [
                { "data": "name", "title": "Name" },
                { "data": "hr.position", "title": "Position" },
                { "data": "contact.0", "title": "Office" },
                { "data": "contact.1", "title": "Extn." },
                { "data": "hr.start_date", "title": "Start Date" },
                { "data": "hr.salary", "title": "Salary" }
            ]
        });

        $('input[type=text]').autocomplete({
            source: availableTags
        });
    }

</script>
@endsection
