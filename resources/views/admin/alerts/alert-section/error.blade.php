@if (sessin('alert-section-error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">خطا</h4>
        <hr> 
        <p class="mb-0"> {{session('alert-section-error')}} </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="close" style="right: auto !important; left: 0 !important;">
            <span aria-label="true">&times;</span>
        </button>
    </div>
@endif