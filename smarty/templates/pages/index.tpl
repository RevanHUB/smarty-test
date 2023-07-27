{include file='include/meta.tpl'}
{include file='include/header.tpl'}
{assign var="default_banner" value="0"}
      <section class="container">
        <div class="generic-wrapped-container generic-wrapped-container-big">
          <div class="left-container">
            <h1> Wrapped container big sized </h1>
            <span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
              Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
            </span>
            <a href=""> Link Button </a>
          </div>
          <div class="right-container">
          </div>
        </div>
      </section>

      <section class="container">
        <!--  Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            {foreach from=$banners.banners key=k item=banner}
              <li data-target="#myCarousel" data-slide-to="{$k}" {if $k == $default_banner}class="active"{/if}></li>
            {/foreach}
          </ol>
            <div class="carousel-inner">
              {foreach from=$banners.banners key=k item=banner}
              <div class="item {if $k == $default_banner}active{/if}">
                <a href="{$banner.link.href}" target="{$banner.link.target}">
                  <img src="{$banner.banner_src}" alt="{$banner.alt}">
                </a>
                </p>
                  <h1 class="carousel-caption">{$banner.title}</h1>
              </div>
              {/foreach}
            </div><!-- .carousel-inner -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- .carousel -->
        <!-- end carousel -->
    
      </section>

      <section class="container">
        <div class="generic-wrapped-container generic-wrapped-container-small">
            <div class="left-container">
              <h1> Wrapped container small sized </h1>
              <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
                Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
              </span>
              <a href=""> Link Button </a>
            </div>
            <div class="right-container">
            </div>
        </div>
      <div class="generic-container generic-container-big">
        <h1>Generic Container</h1>
        <span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
          Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
        </span>
        <a href="" >Generic button</a>
      </div>
    </section>

    <section class="container">
        <div class="generic-wrapped-container generic-wrapped-container-medium">
          <div class="left-container">
            <h1> Wrapped container medium sized </h1>
            <span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
              Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
                
            </span>
            <a href=""> Link Button </a>
          </div>
          <div class="right-container">
          </div>
        </div>

        <div class="generic-wrapped-container generic-wrapped-container-medium">
          <div class="left-container">
            <h1> Wrapped container medium sized </h1>
            <span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
              Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
                
            </span>
            <a href=""> Link Button </a>
          </div>
          <div class="right-container">
          </div>
        </div>
      </section>
   
{include file='include/footer.tpl'}