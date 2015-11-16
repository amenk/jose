<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2015 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace SpomkyLabs\Jose\Algorithm\KeyEncryption;

use AESKW\A192KW as Wrapper;

/**
 * Class ECDHESA192KW.
 */
class ECDHESA192KW extends ECDHESAESKW
{
    /**
     * {@inheritdoc}
     */
    protected function getWrapper()
    {
        return new Wrapper();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlgorithmName()
    {
        return 'ECDH-ES+A192KW';
    }
}
