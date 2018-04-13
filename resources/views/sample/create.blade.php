@extends("layouts.app")
@section("title","Form Sample")
@section("content")
<div class='container'>
    <form class='form' id="frmUser" method="post" enctype="multipart/form-data">
        
        <div class='col-lg-6 col-md-6 col-sm-6'>
            <div class="form-group">
            <label for="">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6'>
            <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name.." required>
                <small class="form-text text-muted"></small>
            </div>
        </div>

        <div class='col-lg-6 col-md-6 col-sm-6'>
            <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6' >
            <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password.." required>
                <small class="form-text text-muted"></small>
            </div>
        </div>

        <div class='col-lg-6 col-md-6 col-sm-6'>
            <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username.." required>
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6' >
            <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth..." required>
                <small class="form-text text-muted"></small>
            </div>
        </div>


        
        
        
        
        
        
        <button type="button" class='btn btn-primary btn-center btnSave'>Save</button>
    </form>
</div>
@endsection

@push("scripts")
    <script>
        $(function() {
            $(".btnSave").click(function() { $("#frmUser").submit(); });
            $(".form-control").keypress(function() {
                $(this).next().html("");
                $(this).prev(".arrow-indicator, .arrow-indicator-right").remove();
            });
            $("#frmUser").submit(function() 
            {
                var context = $(this);
                var hasEmptyField = false;
                $(".arrow-indicator, .arrow-indicator-right").remove();
                var counter = 0;
                $("[required]",context).each(function()
                {
                    if($.trim($(this).val()) == "")
                    {
                        if(counter%2==1)
                        {
                            $("<i class='fa fa-arrow-left fa-2x arrow-indicator-right'></i>").insertBefore($(this));
                        } else {
                            $("<i class='fa fa-arrow-right fa-2x arrow-indicator'></i>").insertBefore($(this));
                        }
                        
                        $(".arrow-indicator, .arrow-indicator-right").animate({"opacity":"1"},500);
                        $(this).next().html("<i class='fa fa-angle-right'></i>&nbsp;This field is required.");
                        hasEmptyField = true;                        
                    }
                    counter++;
                });
                if(hasEmptyField)
                {
                    return false;
                }
            });
        });
    </script>
@endpush

