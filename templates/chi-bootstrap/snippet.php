	<?php 
			    $asideClass = 'col-md-3 col-sm-12 col-xs-12';
			    /** left **/
			    if ($this->left && (!($this->right))): 
			    $contentClass = 'col-md-9 col-sm-12 col-xs-12';
			    
			    elseif if ($this->left && (!($this->right))):
			    $contentClass = 'col-md-12 col-sm-12 col-xs-12';
			endif; ?>
			    /** right **/
			<?php if ($this->right): 
			    $contentClass = 'col-md-offset-3 col-md-9 col-sm-12 col-xs-12';
			    else :
			    $contentClass = 'col-md-12 col-sm-12 col-xs-12';
			endif; ?>