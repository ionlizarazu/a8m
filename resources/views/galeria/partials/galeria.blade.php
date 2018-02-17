<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('js/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

<!-- image Gallery -->
<div class="wrapper">
    <div class="">
      <h1 class="page-header">2017 Argazki galeria</h1>

      <div class="grid">
        <div id="js-filters-masonry" class="cbp-l-filters-work">
            <?php $i=0; ?>
            @foreach($galleryImages as $zones)
                @if ($i == 0)     
                <?php $firstkey = $zones['gallery_id'];?>
                <div data-filter=".{{ $zones['gallery_id'] }}" class="cbp-filter-item-active cbp-filter-item">
                  {{ $zones['title'] }}
                  <div class="cbp-filter-counter"></div>               
                </div>  
                @else
                <div data-filter=".{{ $zones['gallery_id'] }}" class="cbp-filter-item">
                  {{ $zones['title'] }}
                  <div class="cbp-filter-counter"></div>
                </div>
                @endif
                <?php $i++; ?>
            @endforeach
          </div>
      </div>

      <div id="js-grid-masonry" class="cbp">
        @foreach($galleryImages as $zones)              
            @foreach($zones['images'] as $photos)
              <div class="cbp-item {{ $zones['gallery_id'] }}">
                <a href="{{ $photos['url'] }}" class="cbp-caption cbp-lightbox">
                  <div>
                    <img src="{{ $photos['url'] }}" alt="{{$photos['title']}}">
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignLeft">
                      <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">{{$photos['title']}}</div>
                      </div>
                    </div>        
                  </div>
                </a>       
              </div>
            @endforeach
        @endforeach
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
          @include('footer.partners') 
    </div>
</div>
