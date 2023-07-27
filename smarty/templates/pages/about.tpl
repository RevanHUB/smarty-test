{include file='include/meta.tpl'}
{include file='include/header.tpl'}
    <section class="container">
       
        <div class="generic-container generic-container-medium">
            <h1>Generic Container</h1>
            <a href="" >Generic button</a>
        </div>

        <div class="generic-container-text-center generic-container-big">
            <h2>Generic Container with Text Sample Title</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
                Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
                
            </span>
            <a href="" >Generic button</a>
        </div>
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

        <div class="generic-container-text-center generic-container-small">
            <h2>Generic Container with Text Sample Title</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
            Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
            
            </span>
            <a href="" >Generic button</a>
        </div>
    </section>
{include file='include/footer.tpl'}