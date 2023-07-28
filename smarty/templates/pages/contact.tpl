{include file='include/meta.tpl'}
{include file='include/header.tpl'}
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

    {$treatmentOptions = array('Mr', 'Mrs', 'Miss', 'Ms')}

    {* Starts here *}
    <section class="container">
        {$generic_container}
        {$medium_container}
    </section>
    <section class="container">
        <div class="form-wrapper">
            {* Starts formulary *}
            <form class="form-group" action="{$smarty.server.PHP_SELF}?action=contact" method="POST">
                <h1>Contact Form</h1>
                <label for="email">Email address*</label>
                <input class="form-control" type="email" name="email" value="" required>
                <label for="treatment">Treatment</label>
                <select class="form-control" name="treatment" required>
                    {foreach $treatmentOptions as $option}
                        <option value="{$option}">{$option}</option>
                    {/foreach}
                </select>
                <label for="message">Your message*</label>
                <textarea class="form-control" name="message" value="test"></textarea>

                {* Starts validation *}
                {if (isset($smarty.post.email) && isset($smarty.post.message) && !empty($smarty.post.message))}
                    {assign var="email" value=filterData value=$smarty.post.email}
                    {assign var="message" value=filterData value=$smarty.post.message}
                    {assign var="treatment" value=filterData value=$smarty.post.treatment}
                    {validation email=$email message=$message treatment=$treatment }
                {else}
                    <p id="validation"  style="color: black">
                        Please enter the provided information.
                    </p>
                {/if}
                {* Ends validation *}

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>  {* Ends formulary *}
           
            {* Starts Contact Information *}
            <div class="image-form">
                <h2>Let's talk</h2>
                <p>
                    <i class="glyphicon glyphicon-comment"></i> 
                    <a href="https://wa.me/{$env['website_contact_phone']}">+{$env['website_contact_phone']}</a>
                </p>
                <p> 
                    <i class="glyphicon glyphicon-envelope"></i>
                    <a href="mailto:{$env['website_contact_email']}">{$env['website_contact_email']}</a>
                </p>
            </div>
            {* Ends Contact Information *}
        
        </div>

        {$small_container}
       
    </section>
    {* Ends here *}
{include file='include/footer.tpl'}