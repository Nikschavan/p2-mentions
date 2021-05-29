<?php

namespace BSF\P2\Mentions;

function bootstrap() {
    $GLOBALS['mentions'] = new P2_Mentions();
}

function p2_maybe_define( $constant, $value, $filter = '' ) {
	if ( defined( $constant ) )
		return;

	if ( !empty( $filter ) )
		$value = apply_filters( $filter, $value );

	define( $constant, $value );
}