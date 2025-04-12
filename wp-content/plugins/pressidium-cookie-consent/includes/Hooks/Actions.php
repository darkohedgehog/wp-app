<?php
/**
 * Actions interface.
 *
 * @author Konstantinos Pappas <konpap@pressidium.com>
 * @copyright 2023 Pressidium
 */

namespace Pressidium\WP\CookieConsent\Hooks;

// Prevent direct access to files
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

interface Actions {

    /**
     * Return the actions to register.
     *
     * @return array
     */
    public function get_actions(): array;

}
