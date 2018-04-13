@extends("layouts.app")
@section("title","Form Sample")
@section("content")
<div class='container'>
    <form class='form' id="frmUser" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
            <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name.." required>
            <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password.." required>
            <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username.." required>
            <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
        <label for="">Date of Birth</label>
        <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth..." required>
            <small class="form-text text-muted"></small>
        </div>
        <button type="button" class='btn btn-primary btn-block btnSave'>Save</button>
    </form>
</div>
@endsection

@push("scripts")
    <script>
        $(function() {
            $(".btnSave").click(function() { $("#frmUser").submit(); });
            $(".form-control").focus(function() {
                $(this).next().html("");
            });
            $("#frmUser").submit(function() 
            {
                var context = $(this);
                var hasEmptyField = false;
                $("[required]",context).each(function()
                {
                    if($.trim($(this).val()) == "" && hasEmptyField == false)
                    {
                        $(this).next().html("<i class='fa fa-angle-right'></i>&nbsp;This field is required.");
                        hasEmptyField = true;                        
                    }
                });
                if(hasEmptyField)
                {
                    return false;
                }
            });
        })(jQuery);
    </script>
@endpush

