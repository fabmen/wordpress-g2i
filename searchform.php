<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div>
<input type="text" class="search_input" value="Recherchez et validez" name="s" id="s" onfocus="if (this.value == 'Recherchez et validez') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Recherchez et validez';}" />
<input type="hidden" id="searchsubmit" value="Recherche" />
</div>
</form>
