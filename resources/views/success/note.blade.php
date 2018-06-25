@if(Session::has('successEditAdmin'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successEditAdmin')}}
        </span>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('success')}}
        </span>
    </div>
@endif

@if(Session::has('successAddCate'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successAddCate')}}
        </span>
    </div>
@endif

@if(Session::has('successEditCate'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successEditCate')}}
        </span>
    </div>
@endif

@if(Session::has('successDelCate'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successDelCate')}}
        </span>
    </div>
@endif

@if(Session::has('successAddProd'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successAddProd')}}
        </span>
    </div>
@endif

@if(Session::has('successEditProd'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successEditProd')}}
        </span>
    </div>
@endif

@if(Session::has('successDelProd'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Thành công - </b> {{Session::get('successDelProd')}}
        </span>
    </div>
@endif