<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{$title}}</h4>
    </div>

    @if(isset($list))
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                @if(is_array($list))
                    @foreach($list as $item)
                        <li>{{$item}}</li>
                    @endforeach
                @endif
            </ol>
        </div>
    @endif
</div>