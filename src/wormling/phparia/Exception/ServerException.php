<?php

/*
 * Copyright 2014 Brian Smith <wormling@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace phparia\Exception;

use Exception;

/**
 * @author Brian Smith <wormling@gmail.com>
 *
 * The error code is actually 500-599
 */
class ServerException extends Exception
{

    public function __construct(\Exception $e)
    {
        parent::__construct($e->getMessage(), 500, $e->getPrevious());
    }

}
