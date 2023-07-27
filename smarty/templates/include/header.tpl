<div id="main">
<header>
  <div class="wrapper">
    <h2>
      <a href="?action=">{$env['website_logo_title']}</a>
    </h2>
    <nav class="nav-desktop">
      {* Starts creation of buttons *}
      {foreach $env['website_sections'] as $section}
        <a 
        {if $smarty.get.action == $section}
          class="navbar-brand selected-button"
        {else}
          class="navbar-brand"
        {/if}
        href="?action={$section}">
          {if $section eq ''} 
          home 
          {else} 
          {$section} 
          {/if}
        </a>
      {/foreach}
      {* Ends creation of buttons  *}
    </nav>
    <nav class="nav-mobile">
      <button id="mobile-burger-button"><span class="glyphicon glyphicon-list"></span></button>
      {* Starts creation of buttons *}
      <div id="responsive-menu" class="mobile-menu-content">
        {foreach $env['website_sections'] as $section}
          <a 
          {if $smarty.get.action == $section}
            class="navbar-brand selected-button"
          {else}
            class="navbar-brand"
          {/if}
          href="?action={$section}">
            {if $section eq ''} 
            home 
            {else} 
            {$section} 
            {/if}
          </a>
      {/foreach} 
      {* Ends creation of buttons  *}
      </div>
    </nav>
  </div>
</header>
  