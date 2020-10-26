@if(session("error"))
    <div class="clearfix"></div>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session("error")}}
    </div>

    <script>
        $(".alert").alert();
    </script>
@endif
@if(session("success"))
    <div class="clearfix"></div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session("success")}}
    </div>

    <script>
        $(".alert").alert();
    </script>
@endif
