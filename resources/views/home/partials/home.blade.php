<div style="width: 500px; height: 500px;">
    {!! Mapper::render() !!}
</div>
<!-- image Gallery -->
<div class="wrapper">
    <div class="">
     <div class="grid">
         <div id="js-filters-masonry" class="cbp-l-filters-work">
            <div data-filter=".Irteera_eta_Meta" class="cbp-filter-item-active cbp-filter-item">
               Irteera eta Meta
               <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".Pagamendi" class="cbp-filter-item">
               Pagamendi
               <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".zona3" class="cbp-filter-item">
               Zona3
               <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".zona4" class="cbp-filter-item">
               Zona4
               <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".zona5" class="cbp-filter-item">
               Zona5 
               <div class="cbp-filter-counter"></div>
            </div>
          </div>
      </div>

      <div id="js-grid-masonry" class="cbp">
        @foreach($titlePhotos as $zones)
            @foreach($zones as $key =>$photos)
                 @foreach($photos as $photo)
                     <div class="cbp-item {{ $key }}">
                      <a href="{{ $photo }}" class="cbp-caption cbp-lightbox">
                        <div>
                           <img src="{{ $photo }}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            
                        </div>
                      </a>       
                    </div>
                 @endforeach
            @endforeach
        @endforeach
      </div>
    </div>
</div>
