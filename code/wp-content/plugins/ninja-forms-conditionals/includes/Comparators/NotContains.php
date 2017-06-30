<?php

class NF_ConditionalLogic_Comparators_NotContains implements NF_ConditionalLogic_Comparator
{
    public function compare( $comparison, $value )
    {
        return ( false === strpos( $comparison, $value ) );
    }
}