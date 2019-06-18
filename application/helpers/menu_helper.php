<?php

if ( !function_exists('active_menu') )
{

    function active_menu( $uri, $output = 'active', $false = '' )
    {
        $CI    = get_instance();
        $class = $CI->router->fetch_class();
        if ( is_array( $uri ) )
        {
            foreach ($uri as $u) 
            {
                if ( $class == $uri )
                return $class == $uri ? $output : $false; 
            }
        }
        else {
            {
                return $class == $uri ? $output : $false;                 
            }
        }
    }

}