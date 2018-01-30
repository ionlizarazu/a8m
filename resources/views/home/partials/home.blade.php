<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('js/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

<div style="width: 100%; height: 800px;">
    {!! Mapper::render() !!}
</div>
<!-- image Gallery -->
<div class="wrapper">
    <div class="">
     <div class="grid">
         <div id="js-filters-masonry" class="cbp-l-filters-work">
            <?php $i=0; ?>
            @foreach($titlePhotos as $zones)
              @foreach($zones as $key => $photos)
                @if ($i == 0)     
                <?php $firstkey = $key;?>
                <div data-filter=".{{ $key }}" class="cbp-filter-item-active cbp-filter-item">
                  {{$galleries[$i][0]}}
                  <div class="cbp-filter-counter"></div>               
                </div>  
                @else
                <div data-filter=".{{ $key }}" class="cbp-filter-item">
                {{$galleries[$i][0]}}
                  <div class="cbp-filter-counter"></div>
                </div>
                @endif
                <?php $i++; ?>
              @endforeach
            @endforeach
          </div>
      </div>

      <div id="js-grid-masonry" class="cbp">
        @foreach($titlePhotos as $zones)
            @foreach($zones as $key =>$photos)
                 @foreach($photos as $title => $photo)
                     <div class="cbp-item {{ $key }}">
                      <a href="{{ $photo }}" class="cbp-caption cbp-lightbox">
                        <div>
                           <img src="{{ $photo }}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">{{$title}}</div>
                                </div>
                            </div>
                            
                        </div>
                      </a>       
                    </div>
                 @endforeach
            @endforeach
        @endforeach
      </div>
    </div>
</div>
<script type="text/javascript">
$('#js-grid-masonry').cubeportfolio({
    filters: '#js-filters-masonry',
    layoutMode: 'grid',
    defaultFilter: '.{{$firstkey}}',
    animationType: 'slideDelay',
    gapHorizontal: 20,
    gapVertical: 20,
    gridAdjustment: 'responsive',
    mediaQueries: [{
        width: 1500,
        cols: 5
    }, {
        width: 1100,
        cols: 4
    }, {
        width: 800,
        cols: 3
    }, {
        width: 480,
        cols: 2
    }, {
        width: 320,
        cols: 1
    }],
    caption: 'overlayBottomPush',
    displayType: 'bottomToTop',
    opacity:'50',
    displayTypeSpeed: 100,
    // lightbox
    lightboxDelegate: '.cbp-lightbox',
    lightboxGallery: true,
    lightboxTitleSrc: 'data-title',
});
</script> 