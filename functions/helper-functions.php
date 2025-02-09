<?php

/*-------------------------------------------*
 *      Preg Replace
 *------------------------------------------- */
if(!function_exists('villa_preg_replace')) :
    function villa_preg_replace( $value ) {
        return preg_replace( array( '/\.+/', '/\(+/', '/\)+/', '/\-+/', '/[ \t]+/' ), array( ' ' ), $value );
    }
endif;


/*-----------------------------------------------------
*              Custom Excerpt Length
*----------------------------------------------------*/
if(!function_exists('villa_excerpt_max_charlength')):
    function villa_excerpt_max_charlength($charlength) {
        $excerpt = get_the_excerpt();
        $charlength++;

        if ( mb_strlen( $excerpt ) > $charlength ) {
            $subex = mb_substr( $excerpt, 0, $charlength - 5 );
            $exwords = explode( ' ', $subex );
            $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
            if ( $excut < 0 ) {
                return mb_substr( $subex, 0, $excut );
            } else {
                return $subex;
            }
        } else {
            return $excerpt;
        }
    }
endif;

/* -------------------------------------------- *
* VILLA Pagination
* -------------------------------------------- */
if(!function_exists('villa_pagination')):
    function villa_pagination( $page_numb , $max_page ){
        $output = '';
        $big = 999999999;

        $prev = '<svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313"><g id="Arrow" transform="translate(-214.586 -2267.996)"><path id="Path_600" data-name="Path 600" d="M-16953.2-21536.943l-9.1,9.1,9.1,9.1" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/><path id="Path_601" data-name="Path 601" d="M-16962.293-21527.848h26.2" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/></g></svg>';

        $next = '<svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313">
        <g id="Arrow" transform="translate(0 1.061)"><path id="Path_600" data-name="Path 600" d="M-16962.295-21536.943l9.1,9.1-9.1,9.1" transform="translate(16979.398 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/><path id="Path_601" data-name="Path 601" d="M-16936.094-21527.848h-26.2" transform="translate(16962.293 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/></g></svg>';

        $output .= "<div class='villa-pagination villa-blog-pagination' data-preview='".$prev."' data-nextview='".$next."'>";
        $output .= paginate_links( array(
            'base'          => esc_url_raw(str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) )),
            'format'        => '?paged=%#%',
            'current'       => $page_numb,
            'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313"><g id="Arrow" transform="translate(-214.586 -2267.996)"><path id="Path_600" data-name="Path 600" d="M-16953.2-21536.943l-9.1,9.1,9.1,9.1" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/><path id="Path_601" data-name="Path 601" d="M-16962.293-21527.848h26.2" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/></g></svg> Previous',
            'next_text'     => 'Next <svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313">
            <g id="Arrow" transform="translate(0 1.061)"><path id="Path_600" data-name="Path 600" d="M-16962.295-21536.943l9.1,9.1-9.1,9.1" transform="translate(16979.398 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/><path id="Path_601" data-name="Path 601" d="M-16936.094-21527.848h-26.2" transform="translate(16962.293 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/></g></svg>',
            'total'         => $max_page,
            'type'          => 'list',
        ) );
        $output .= '</div>';
        return $output;
    }

endif;
