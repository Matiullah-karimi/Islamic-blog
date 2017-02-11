<?php
/**
 * Render HTML messages into the view.
 */
function displayAlerts()
{
    if (Session::has('message')) {

        list($type, $message) = explode('|', Session::get('message'));

        return sprintf('<div class="alert alert-%s"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>%s</div>', $type, $message);
    }

    return '';
}