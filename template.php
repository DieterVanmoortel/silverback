<?php
function silverback_preprocess_page(&$vars) {
  $vars['tasks'] = menu_local_tasks();
}
