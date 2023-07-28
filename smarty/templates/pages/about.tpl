{include file='include/meta.tpl'}
{include file='include/header.tpl'}
    <section class="container">

        {capture assign="big_container"}
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
        {/capture}

        {capture assign="medium_container"}
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
        {/capture}

        {capture assign="small_container"}
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
        {/capture}
        
        {capture assign="generic_container"}
            <div class="generic-container generic-container-big">
            <h1>Generic Container</h1>
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
                Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
            </span>
            <a href="" >Generic button</a>
            </div>
        {/capture}

        {* Starts here *}
        {$generic_container}

        {$big_container}
        
        <div class="generic-card-container">
            <h1>About Us</h1>
            <div class="generic-card-wrapper">
                    {foreach from=$employees.employees key=k item=employee}
                        <div class="generic-card">
                            <div class="inset-bg">
                                <img src="{$employee.avatar}" alt={$employee.alt}/>
                                <h2>{$employee.name}</h2>
                                <span>{$employee.desc}</span>
                            </div>
                        </div>
                    {/foreach}
            </div>
        </div>

        {$small_container}
    </section>
{include file='include/footer.tpl'}