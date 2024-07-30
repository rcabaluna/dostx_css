<?php
class AuthGuard {
    public function check() {
        $CI =& get_instance();
        $CI->load->library('session');

        $protected_routes = array(
            'admin/dashboard',
            'admin/registry/quarters',
            'reports/responses',
            'reports/generate',
            'reports/gen_result',
            'reports/gen_pdf',
            'user/dashboard'
        );

        $current_route = $CI->uri->uri_string();

        if (in_array($current_route, $protected_routes) && !$CI->session->userdata('logged_in')) {
            redirect('login');
        }
    }
}
