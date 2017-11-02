<?php

    function strTrim( $str ) {
        if( ! isset( $str ) ) return '';
        return trim( $str );
    }

    function _get( $key ) {
        if( ! isset( $_GET[ $key ] ) ) return '';
        return strTrim( $_GET[ $key ] );
    }

    function _post( $key ) {
        if( ! isset( $_POST[ $key ] ) ) return '';
        return strTrim( $_POST[ $key ] );
    }

    function _output( $data = [], $resCode = 200 ) {

        // Setting the reponse code of the output.
        http_response_code( $resCode );

        if( empty( $data ) ) {
            echo json_encode( [] );
        } else if ( is_array( $data ) ) {
            echo json_encode( $data );
        } else {
            echo json_encode( [ $data ] );
        }
        exit();
    }